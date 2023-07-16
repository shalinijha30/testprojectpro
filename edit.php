<?php

global $err_name,$err_phone,$err_email,$name,$phone,$email,$old_name,$old_phone,$old_email;
include ("db.php");
error_reporting(0);
echo $id= $_GET['rid'];
$sql=mysqli_query($conn,"SELECT * from data2 where id='$id'")or die(mysqli_error($conn));
$row=mysqli_fetch_array($sql);
$old_name=$row['name'];
$old_phone=$row['phone'];
$old_email=$row['email'];

if(isset($_POST['submit'])) 
{
 
   $name = $_POST['name'];
   $phone= $_POST['phone'];
   $email = $_POST['email'];
   
     
      if (empty($name)) 
      {
      $err_name="Name is empty";
     
      } 
      else
      {
      $name=$name;
      }
      if(empty($phone))
      {
          $err_phone= "phone is empty";
       
      }
      else
      {
         $phone=$phone; 
      }
      if(empty($email))
      {
          $err_email= "email is empty";
       
      }
      else{
        $email=$email;
      }
      
      if(!$name=="" && !$phone=="" && !$email=="" )
      {
       
        $result= mysqli_query($conn,"UPDATE data set name='$name', phone='$phone',email='$email' where id=$id")or die(mysqli_error($conn));
       
         header("location:general.php");
        
    } 
}
?>
<!DOCTYPE html>
<html>
<body>
<table align="center">
<form method="POST" action="">
<h1 align="center">PHP FORM VALIDATION </h1>
  <tr>
    <td><lable>Name</lable></td> 
    <td><input type="text" name="name" value="<?php echo $name ?? $old_name;?>"></td>
    <td><span style="color:red;"><?php echo $err_name;?></span></td>
  </tr>
  <tr>
    <td><lable>phone</lable></td> 
    <td><input type="text" name="phone" value="<?php echo $phone ??$old_phone; ?>"></td>
    <td><span style="color:red;"><?php echo $err_phone;?></span></td>
    <td></td>
  </tr> 
  <tr>
    <td><lable>email</lable></td> 
    <td><input type="text" name="email" value="<?php echo $email ?? $old_email ;?>"></td>
    <td><span style="color:red;"><?php echo $err_email;?></span></td>
    <td></td>
  </tr>
  

   <tr>
    <td> <label></label></td>
    <td><input type="submit" name="submit"></td>
    <td></td>
  </tr>
 
</form>


</table>
</body>
</html>

