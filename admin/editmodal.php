<?php

include_once('includeWithVar.php');

 ?>
<?php
  

    echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">\n";
    echo "        <div class=\"modal-dialog modal-lg\">\n";
    echo "\n";
    echo "           \n";
    echo "            <div class=\"modal-content\">\n";
    echo "                <div class=\"modal-body\">\n";
    echo "                    <div class=\"container col-md-12\">\n";
    echo "                        <div class=\"row\">\n";
    echo "                            <div class=\"col-md-2\"></div>\n";
    echo "                            <div class=\"col-md-8\">\n";
    echo "                                <form enctype=\"multipart/form-data\" action=\"\" method=\"post\">\n";
    echo "                                    <div style=\"height:30px\"></div>\n";
    echo "                                    <div class=\"row\">\n";
    echo "                                        <div class=\"form-group col\">\n";
    echo "                                            <label for=\"name\">Tên</label>\n";
    echo "                                            <input type=\"name\" class=\"form-control\" id=\"nameEdit\" aria-describedby=\"\"\n";
    echo "                                               name=\"name\" >\n";
    echo "                                        </div>\n";                   
    echo "                                    </div>\n";
    
    echo "                                    <div class=\"row\">\n";
    echo "                                        <div class=\"form-group col\">\n";
    echo "                                            <label for=\"phone\">Số điện thoại</label>\n";
    echo "                                            <input type=\"phone\" class=\"form-control\" id=\"phoneEdit\" aria-describedby=\"\"\n";
    echo "                                                name=\"phone\" disable>\n";
    echo "                                        </div>\n";                   
    echo "                                    </div>\n";

    echo "                                    <div class=\"row\">\n";
    echo "                                        <div class=\"form-group col\">\n";
    echo "                                            <label for=\"email\">Email</label>\n";
    echo "                                            <input type=\"email\" class=\"form-control\" id=\"emailEdit\" aria-describedby=\"\"\n";
    echo "                                                 name=\"email\">\n";
    echo "                                        </div>\n";                   
    echo "                                    </div>\n";

    echo "                                    <div class=\"row\">\n";
    echo "                                        <div class=\"form-group col\">\n";
    echo "                                            <label for=\"gender\">Giới tính</label>\n";
    echo "                                           <select class='form-control' id='genderEdit' name='genderEdit'>
                                                        <option>Nam</option>
                                                        <option>Nữ</option>
                                                        <option>Khác</option>
                                                      </select>";
   
    echo "                                        </div>\n";                   
    echo "                                    </div>\n";


    echo "                                    <div class=\"center-item\"><button name=\"submit\" value=\"submit\" id = \"submit\"type=\"submit\"\n";
    echo "                                            class=\"btn-sm btn-dark button-size\">Save</button></div>\n";
    echo "\n";
    echo "                                </form>\n";
    echo "\n";
    echo "                            </div>\n";
    echo "                            <div class=\"col-md-2\"></div>\n";
    echo "\n";
    echo "\n";
    echo "                        </div>\n";
    echo "                    </div>\n";
    echo "                </div>\n";
    echo "                <div class=\"modal-footer\">\n";
    echo "                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n";
    echo "                </div>\n";
    echo "            </div>\n";
    echo "\n";
    echo "        </div>\n";
    echo "    </div>\n";
    

    echo "
            <script>
            $(document).ready(function () {

                $('#submit').click(function () {
              
                  var id = document.getElementById('idKhachHang').value;
                  var name = $('#nameEdit').val();
                  var phone = $('#phoneEdit').val();
                  var email = $('#emailEdit').val();
                  var gender = $('#genderEdit').val();
              
                  $.ajax({
                    type: 'POST',
                    url: '../admin/updatekhachhang.php',
                    data: { id: id,name: name, phone: phone, email: email, gender: gender},
                    dataType: 'json'
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





