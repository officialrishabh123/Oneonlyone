<?php
$con=mysqli_connect('localhost','root','rishabh','webproject');
$message;
if(isset($_POST['save'])){

    $email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
    $s = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con,$s);
    $num =mysqli_num_rows($result);
 
    if($num == 1)
    {
        
        $res1=mysqli_query($con,"insert into login(username,password) values('$email','$password')");
        header('location:index.php');
    }
    else{
      
        header('login.php');
        
                               
    }
   
 
                               
                        
   
							
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <title>login form</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;

        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .box {
            position: relative;
            margin: 40px;
            width: 100%;
            height: 90%;
            /* background: chocolate; */
            backdrop-filter: blur(14px);
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        form .left-box {
            background: linear-gradient(#2196f3, #31f138);
            border-radius: 30px 0 0 30px;
            padding:30px;
        }

        form .right-box {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            border-radius: 0 30px 30px 0;
            background: linear-gradient(#ffc107, #e91e63);


        }

        form .right-box .right-field {
            width: 100%;
            height: 561px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .username {
            width: 80%;
        }

        .username input {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            text-align: center;
            border: none;
            margin: 20px 5px;
            background: white;
            border-radius: 10px;
            font-weight: 500;
            color: linear-gradient(#2196f3, #31f138, #ffc107, #e91e63);
            border: 1px solid #ffc103;
            color:  #ffc107;
        }

        input::placeholder {
            color: linear-gradient(#2196f3, #31f138, #ffc107, #e91e63);

        }

     

        input[type=submit] {
            width: 200px;
            height: 40px;
            border-radius: 100px;
            margin-top: 50px;
            background: linear-gradient(#ffc107, #e91e63);
            border: none;
            font-size: 20px;
            color: white;
            cursor: pointer;
        }

        h1 {
            color: rgb(182, 14, 42);
            margin: 30px;
        }
        form p{
            margin-top: 30px;
            text-transform:capitalize;

        }
        form p a{
            text-transform: uppercase;
        }

        @media(max-width:1000px) {
            form {

                grid-template-columns: 1fr;
            }
            form .left-box{
                border-radius: 30px 30px 0px 0px;
            
            }
            form .right-box{
                border-radius: 0px 0px 30px 30px;
            }
        }
        .left-box .fa{
            font-size:50px;
            z-index: 100000;
            color:red;
        }
    </style>
</head>

<body>

    <div class="box">
        <div class="form">
            <form action="" method="post">
                <div class="left-box">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <h1>Hii</h1>
                <h3>My name is rishabh tiwari.</h3> 
                <p>I am provide you the best content of your universy exam </p>  
                </div>
                <div class="right-box">

                    <div class="right-field">
                        <h1>Welcome user......</h1>
                        <div class="username">
                            <input type="text" name="email" placeholder="Enter Your email">
                        </div>
                        <div class="username pass">
                            <input type="password" name="password" placeholder="Enter Your password">
                        </div>
                        <div class="user button">
                            <input type="submit" name="save" placeholder="Enter Your name">
                        </div>
                       
                        <p>if you are a new user  then<a href="Registration.html"> Register Here..</a></p>

                    </div>
                </div>
            </form>
        </div>

    </div>
</body>

</html>