<?php
include("header.php");

include("db.php");
global $err_name,$err_phone,$err_email;
if (isset($_POST['submit'])) { 
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $email=$_POST['email'];
    if(empty($_POST['name'])){ 
        $name_error ="Enter your name";
    }else{
        $err_name=$name;
    }
    if(empty($_POST['phone'])){ 
        $phone_error ="Enter your phone";
    }else{
        $err_phone=$name;
    }
    if(empty($_POST['email'])){ 
        $email_error ="Enter your email";
    }else{
        $err_email=$email;
    }

    echo $name;
    echo $phone;
    echo $email;
    if($err_name!="" && $err_email!="" && $err_phone!=""){
        $sql= mysqli_query($conn,"INSERT INTO data2 (name,phone,email)VALUES('$name','$phone','$email')")or die(mysqli_error($con));
       
    }
} 
 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="#">
              <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="name"  name="name"placeholder="Enter name">
                    <span><?php if (isset($name_error)) echo $name_error;?></span>
                  </div>
              
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phoneno.">
                    <span><?php  if(isset($phone_error)) echo $phone_error;?></span> 
                  </div>
              
                     <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    <span><?php if(isset($email_error)) echo $email_error; ?></span>
                  </div>
                
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name ="submit" value="submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>
           
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  include("footer.php");
  ?>
