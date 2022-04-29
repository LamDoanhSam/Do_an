<?php
include_once('..\admin\header.php');
$string_column_name = $_REQUEST['column_name'];
$column_name = explode(',', $string_column_name);
$string_column_name_data  = $_REQUEST['column_name_data'];
$column_name_data = explode(',', $string_column_name_data);
$stmt = $_REQUEST['stmt'];
$table = $_REQUEST['table'];
$ve = $_REQUEST['stmt'];


?>
<?php
function OpenConnection()
{
  try {
    $username = "root";
    $password = "";
    $server   = "localhost";
    $dbname   = "rapphim";
    $conn = mysqli_connect($server, $username, $password, $dbname);
    if ($conn) {
      //echo "Connection established";
      return $conn;
    } else {
      die("Connection could not be established.</br>" . mysqli_connect_error());
      exit();
    }
  } catch (Exception $e) {
    echo "Error";
  }
  return null;
}

function getIdKhacHang($sdt)
{
  $stmt= "SELECT `idKhachHang` FROM `khach_hang` WHERE `soDienThoai`=$sdt";
  $conn = OpenConnection();
  $query = mysqli_query($conn, $stmt);
  while ($row = mysqli_fetch_assoc($query)) {
  return $row['idKhachHang'];
  }
}

function getTableValues($table, $stmt, $page, $columnname)
{
  if ($page == 1) {
    $offset = 0;
  } else {
    $offset = 100 * ($page - 1);
  }
  $stmt = $stmt . " ORDER BY CURRENT_TIMESTAMP
    LIMIT $offset,100";
  $conn = OpenConnection();
  
  switch ($table) {
    case 'khach_hang':
      $query = mysqli_query($conn, $stmt);
      $i = 0;
        while ($row = mysqli_fetch_assoc($query)) {
        $id = getIdKhacHang($row['soDienThoai']);
        echo  "<tr>";
        echo "<td>$i</td>";

        foreach ($columnname as $key) {
          echo "<td>  $row[$key] </td>";
        }      
            echo "<td>
            <a href=\"#myModal\" class=\"edit \" data=\"$id\"  data-toggle=\"modal\"><i class=\"material-icons\"  data-toggle=\"tooltip\" title=\"Sửa\">&#xE254;</i></a>
            <a href=\"#deleteModal\" class=\"delete \" data=\"$id\"  data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Xóa\">&#xE872;</i></a>
                </td>";
            echo "</tr>";
            $i++;
            
        }
        echo"<input type'hidden' id='idKhachHang' />";
        break;
    case 've_ban':
      // echo $stmt;
      $query = mysqli_query($conn, $stmt);
      $i = 0;
      while ($row = mysqli_fetch_assoc($query)) {
   
            $id = getIDVe($row['idVe']);
            echo  "<tr>";
            echo "<td>$i</td>";
        
            foreach ($columnname as $key) {
        
              echo "<td>  $row[$key] </td>";
            }
                // vé bán không thể sửa xoá
            // echo "<td>
            // <a href=\"#myModal\" class=\"edit \" data=\"$id\"  data-toggle=\"modal\"><i class=\"material-icons\"  data-toggle=\"tooltip\" title=\"Sửa\">&#xE254;</i></a>
            // <a href=\"#deleteModal\" class=\"delete \" data=\"$id\"  data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Xóa\">&#xE872;</i></a>
            //     </td>";
            // echo "</tr>";
            $i++;
      }
      echo"<input type'hidden' id='idVe' />";
      break;
    case 'feedback':
      $query = mysqli_query($conn, $stmt);
      $i = 0;
      while ($row = mysqli_fetch_assoc($query)) {
   
            echo  "<tr>";
            echo "<td>$i</td>";
        
            foreach ($columnname as $key) {
        
              echo "<td>  $row[$key] </td>";
            }
            $i++;
      }
      break;

  }
 

}
function getIDVe($ve){
  $ve=  "SELECT `idVe` FROM `ve_ban` WHERE `idVe`=$ve";

  $conn = OpenConnection();
  $query = mysqli_query($conn, $ve);
  while ($row = mysqli_fetch_assoc($query)) {
  return $row['idVe'];
  }
}
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Content Wrapper. Contains page content -->
<?php
if ($table == 'fish') {
  echo "  <div class=\"content-wrapper\" style=\"width: fit-content;\">";
} else {
  echo "  <div class=\"content-wrapper\">";
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>DataTables</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">DataTables</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
            <?php switch($table){
              case 'khach_hang':
                  echo 'Khách hàng';
                  break;
              case 've_ban':
                  echo 'Thông tin vé bán';
                  break;
              case 'feedback':
                  echo 'Phản hồi từ người dùng';
                  break;
                
            }
            ?></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <?php

                  echo "<th>#</th>";
                  foreach ($column_name as $item) {
                    echo  "<th>$item</th>";
                  }
                  ?>
                  <?php if($table=='khach_hang'){?>
                  <th>Actions</th>
                  <?php }?>
                </tr>
              </thead>
              <tbody>
                <?php
                getTableValues($table, $stmt, 1, $column_name_data)
                ?>
              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<div id="typefalse">

</div>
<?php

$arr = array('tablename' => $table);
include_once('includeWithVar.php');
includeWithVariables('..\admin\editmodal.php', $arr);
includeWithVariables('..\admin\deletemodal.php', $arr);

?>

<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- upload img -->
<script src="../admin/plugins/uploadimage/script.js"></script>
<!-- DataTables -->
<script src="../admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>

<!-- page script -->
<script>  
$(document).on("click", ".delete", function () {
     var idKhachHang = $(this).attr("data")
    
     document.getElementById("idKhachHang").setAttribute('value',idKhachHang);


});
$(document).on("click", ".edit", function () {
     var idKhachHang = $(this).attr("data")
     var item = $(this).closest("tr").text().replace(/\s+/g, ' ');
     var res = item.split(" ");
     document.getElementById("nameEdit").value =res[1] ;
     document.getElementById("phoneEdit").value =res[2] ;
     document.getElementById("genderEdit").value =res[3] ;
     document.getElementById("emailEdit").value =res[4] ;
     document.getElementById("idKhachHang").setAttribute('value',idKhachHang);


});

</script>
<script>
  $(function() {
    $('#myTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


</body>

</html>