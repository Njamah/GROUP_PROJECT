<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
     
    //Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric ($user_name))
    {

        //read from  database
    
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0);
            {

                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: view.php");
                    die;

                }
            }
        }
        
        echo "Wrong username or password!";
    }else
    {
        echo "Wrong username or password!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
</head>
<body>
    
<style type="text/css">
    body{
        background: url("pics/IMG_0427.JPG");
        background-repeat: repeat-x;
        background-size: cover;
    }


    #text{
        height:25px;
        border-radius: 5px;
        padding:4px;
        border:solid thin #aaa;
        width:100%;
    }

    #btn{
        border-radius: 10px;
        /* margin-left: 110px; */
        padding:10px;
        width:150px;
        color:white;
        background-color: lightblue;
        border: none;
    }

    .container{
        margin-top: 50px;
    }

    #box{
        height: 400px;
        position: relative;
        margin: 0px;
        width:300px;
        padding:20px;
        border:1px solid lightblue;
    }

    </style>
<div class="container">
<div class="row">
<img class="col-sm-7" src="pics/IMG_0459.JPG" alt="school login" height="400px" width="100%">    
    <div id="box" class="col-sm-5">
        <form method="post" >
            <div style="font-size:20px; color:white">Login</div><br>
            <input id="text" type="text" name="user_name" placeholder="Reg no/Matric no"> <br><br>
            <input id="text" type="password" name="password" placeholder="Password"> <br><br><br><br><br><br><br>   
            <input id="btn" id="text" type="submit" value="login"><br><br>

            
        </form>
        <a href="signup.php">New student? Click to Sign up</a>
</div>
</div>
</div>

</body>
</html>