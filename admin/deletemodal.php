

<?php
  
  
            echo "<div id=\"deleteModal\" class=\"modal fade\">\n";
            echo "	<div class=\"modal-dialog\">\n";
            echo "		<div class=\"modal-content\">\n";
            echo "			<form>\n";
            echo "				<div class=\"modal-header\">						\n";
            echo "					<h4 class=\"modal-title\">Delete </h4>\n";
            echo "					<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>\n";
            echo "				</div>\n";
            echo "				<div class=\"modal-body\">					\n";
            echo "					<p>Are you sure you want to delete this record?</p>\n";
            echo "					<p class=\"text-warning\"><small>This action cannot be undone.</small></p>\n";
            echo "				</div>\n";
            echo "				<div class=\"modal-footer\">\n";

        	                       
            echo "					<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">\n";
            echo "					<input name=\"btnDelete\" id=\"deleteCustomer\" type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">\n";
            echo "				</div>\n";
            echo "			</form>\n";
            echo "		</div>\n";
            echo "	</div>\n";
            echo "</div>\n";
            echo "
            <script>
            $(document).ready(function () {
                $('#deleteCustomer').click(function () {
                  var id = document.getElementById('idKhachHang').value;
                  $.ajax({
                    type: 'POST',
                    url: '../admin/delete.php',
                    data: { id: id},
                    dataType: 'text'
                  })
                    .done(function (data) {
                        
                        $('#myModal').modal('hide');

                    })
                    .fail(function () {
                       
                      
              
                    });
                    location.reload();

                    $('#myModal').modal('hide');
                  return false;
              
              
                });
              
              });
</script>
            ";
    
 ?>