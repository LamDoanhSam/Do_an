const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.occupied)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const price = document.getElementById("price");
const movieSelect = document.getElementById("idPhim");
const theaterSelect = document.getElementById("theater");
const dateSelect = document.getElementById("movie-date");
const timeSelect = document.getElementById("movie-time");

let id = movieSelect.innerHTML;
let theaterIndex = $("#theater").find(":selected").val();
let ticketPrice = +price.innerHTML;
let totalPrice = 0 ;
let totalTicket = 0;



//function update total and count
function updateSelectedCount() {
	const selectedSeats = document.querySelectorAll(".row .seat.selected:not(.feature)");

	const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));
	localStorage.setItem("selectesSeats", JSON.stringify(seatsIndex));

	const selectedSeatsCount = selectedSeats.length;
	count.innerText = selectedSeatsCount;
	total.innerText = selectedSeatsCount * ticketPrice;
	totalPrice = selectedSeatsCount * ticketPrice;
	totalTicket = selectedSeatsCount;
}



//theater select change
theaterSelect.addEventListener("change", (e) => {
	theaterIndex = $("#theater").find(":selected").val();
	$.ajax({
		url: 'loadSeat.php',
		type: 'POST',
        data: 'idPhong=' + theaterIndex ,
		success: function (data) {
			$('#container').html(data);                     
		},
		error: function (e) {
			console.log(e.message);
		}
	});

	$.ajax({
		url: 'loadDate.php',
		type: 'POST',
        data: 'idPhong=' + theaterIndex +'&idPhim=' + id,
		success: function (data) {
			$('#movie-date').html(data);   			
			var date = document.getElementById("movie-date").value;
			loadTime(date,theaterIndex);	             
		},
		error: function (e) {
			console.log(e.message);
		}
	});

});

function loadTime(date,index){
	$.ajax({
		url: 'loadTime.php',
		type: 'POST',
		data: 'date=' + date +'&idPhong=' + index +'&idPhim=' + id,
		success: function (data) {
			// console.log(data);
			$('#movie-time').html(data);                     
		},
		error: function (e) {
			console.log(e.message);
		}
	});   
}


//date change
dateSelect.addEventListener("change", (e) => {
	var date = e.target.value;
	
	$.ajax({
		url: 'loadTime.php',
		type: 'POST',
		data: 'date=' + date +'&idPhong=' + theaterIndex +'&idPhim=' + id,
		success: function (data) {
			$('#movie-time').html(data);                     
		},
		error: function (e) {
			console.log(e.message);
		}
	});
	
});

container.addEventListener("click", function(e) {
	if (
		e.target.classList.contains("seat") &&
		!e.target.classList.contains("occupied")
	) {
		e.target.classList.toggle("selected");
		updateSelectedCount();
	}
});

function Reload(){
	if(totalTicket==0 || totalPrice==0) return false;
	if(confirm("Số vé đã đặt: " + totalTicket +"\nTổng tiền: "+ totalPrice +" VND")==false)
		return false;
	var data = document.querySelectorAll(".selected:not(.feature)");	
	const totalSeats = document.querySelectorAll(".seat:not(.feature)");


	///update ghế
	// mảng : 1 - hết chỗ, 0 - ghế trống
	isChecked = [];
	for(let i = 0;i <totalSeats.length;i++){
		if(totalSeats[i].classList.contains("occupied") || totalSeats[i].classList.contains("selected"))
			isChecked.push(1);
		else
			isChecked.push(0);
	}


	// 1 - đã chọn, 0 - chưa chọn
	isSelected = [];
	for(let i = 0;i <totalSeats.length;i++){
		if(totalSeats[i].classList.contains("selected"))
			isSelected.push(1);
		else
			isSelected.push(0);
	}

	$.ajax({		
		url: 'seat.php', // tìm vị trí ghế + lưu mảng ghế
		type: 'POST',
        data: 'idPhong='+ theaterIndex +'&arraySelected='+isSelected +'&arraySeat='+isChecked ,
		success: function (data) {   
			console.log(data);              
		},
		error: function (e) {
			console.log(e.message);
		}
	});



	if(data.length>0){
		document.getElementById("checked").disabled = true;
		document.getElementById("checked").classList.remove("bttn-fill");
		document.getElementById("checked").style.cursor ="default";
		// document.getElementById("checked").textContent ="Đã thanh toán";
		$('#totalPrice').val(totalPrice);
		$('#totalTicket').val(totalTicket);
		$('#ngayChieu').val(dateSelect.value);
		$('#gioChieu').val(timeSelect.value);
		$('#idPhong').val(theaterIndex);
		return true;
	}
	
	
}