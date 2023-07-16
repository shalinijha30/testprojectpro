<?php
include("header.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>name</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>Action</th> 
                  </tr>
                 
                      
                  </thead>
                  <tbody>
                
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>name</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>Action</th> 
                  </tr>
</thead>
<?php 
     include 'db.php';
     $sql="SELECT * FROM data2";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) { 
    
    echo 
    '<tr>
    <td style="text-align:center;">'.$row["name"].'</td>
    <td style="text-align:center;">'.$row["phone"].'</td>
    <td style="text-align:center;">'.$row["email"].'</td>
    <td style="text-align:center;"><a href="Edit.php?rid='.$row["id"].'">Edit</a><a href="delete.php?rid='.$row["id"].'">/delete</a></td>
    
    </tr>';
}  

} else {
echo "0 results";
}
$conn->close();
?>

                      
        
                </table>
              
  <?php
  include("footer.php");
  
  ?>