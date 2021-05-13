<?php
$con=mysqli_connect('localhost','root','rishabh','webproject');

if(isset($_POST['save'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $fathername=mysqli_real_escape_string($con,$_POST['fathername']);
    $collegename=mysqli_real_escape_string($con,$_POST['collegename']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $mobileno=mysqli_real_escape_string($con,$_POST['mobileno']);
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
   
     $res=mysqli_query($con,"insert into registration(name,fathername,collegename,email,mobileno,dob,password) values('$name','$fathername','$collegename','$email','$mobileno','$dob','$password')");
    if(mysqli_affected_rows($con)===1){
        alert ("Thankyou For Sending Us Your Details!!!");
                        
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            height: 100%;
          
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
            padding:10px;
        

        }

        form .right-box .right-field {
            width: 100%;

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
            margin: 10px 5px;
            background: white;
            border-radius: 5px;
            font-weight: 500;
            color:  #ffc107;
            border: 1px solid #ffc103;
          
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
    </style>
</head>

<body>

    <div class="box">
        <div class="form">
            <form action="" method="post">
                <div class="left-box">
                <h1>Hii</h1>
                <h3>My name is rishabh tiwari.</h3> 
                <p>I am provide you the best content of your universy exam </p>  
                </div>
                <div class="right-box">

                    <div class="right-field">
                        <h1>Welcome user......</h1>
                        <div class="username">
                            <input type="text" name="name" placeholder="Enter Your name">
                        </div>
                        <div class="username father">
                            <input type="text" name="fathername" placeholder="Enter Your father's name">
                        </div>
                        <div class="username college">
                            <input type="text" name="collegename" placeholder="Enter Your College name">
                        </div>
                        <div class="username email">
                            <input type="email" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="username mobile">
                            <input type="text" name="mobileno" placeholder="Enter Your Mobile no">
                        </div>
                        <div class="username">
                            <input type="text" name="dob" placeholder="Enter Your D.O.B (dd/mm/year)">
                        </div>
                        
                        <div class="username pass">
                            <input type="password" name="password" id="pass"placeholder="Enter Your password">
                        </div>
                        <div class="username Confirmpass">
                            <input type="password" name="confirmpassword" id="conpass"placeholder="Enter Your Confirm password">
                        </div>
                        <div class="user button">
                            <input type="submit" name="save" placeholder="Enter Your name">
                        </div>
                        <p>if you register already then<a href="login.html"> Login here..</a></p>

                    </div>
                </div>
            </form>
        </div>

    </div>
    <script>
       }
    </script>
</body>

</html>