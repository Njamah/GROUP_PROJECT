<?php 

   include "config.php";
  

   $id=$_GET['updateid'];
   $sql= "SELECT *FROM coursereg Where id='$id'";
   $result=mysqli_query($conn, $sql);
   $row=mysqli_fetch_assoc($result);
   $CourseCode=$row['CourseCode'];
   $CourseTitle=$row['CourseTitle'];
   $Units=$row['Units'];

if(isset($_POST['submit'])){
  $CourseCode =$_POST['CourseCode'];
  $CourseTitle =$_POST['CourseTitle'];
  $Units =$_POST['Units'];

  header('location:view.php');
  $sql="UPDATE coursereg SET id='$id', CourseCode='$CourseCode', CourseTitle='$CourseTitle', Units='$Units' 
  WHERE id='$id'";

  $result=mysqli_query($conn, $sql);
  if($result){
    echo "Updated successfully";
  }else{
    die(mysqli_error($conn));

  }
}
?>


<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 </head>
 <body>
     <h2>Course Registration Form</h2>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
           <fieldset>
             Course Code: <br>
             <input type="text" name="CourseCode" required value="<?php echo $CourseCode;?>">
             <br>

             Course Title: <br>
             <input type="text" name="CourseTitle" required value="<?php echo $CourseTitle;?>">
             <br>

             Units: <br>
             <input type="number" name="Units" required value="<?php echo $Units;?>">
             <br>
             
             <input type="submit" name="Update" value="Update"> 
           </fieldset>
          
     </form>

 </body>
</html>



