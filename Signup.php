<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Signup</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 10px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container {
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 25px 30px;
            border-radius: 5px;
        }

        .container .title {
            font-size: 25px;
            font-weight: 700;
            position: relative;
        }

        .error {
            display: flex;
            justify-content: space-between;
        }


        form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            width: calc(100%/2-20px);
            margin-bottom: 15px;
        }

        .user-details .input-box .details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            border-bottom-width: 2px;
            transition: all 0.3s ease;

        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        form .button {
            height: 45px;
            margin: 45px 0;
        }

        form .button input {
            width: 100%;
            height: 100%;
            outline: none;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            box-shadow: 0px 5px 5px #d0c0c0;
        }

        form .button input:hover {
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="error">
            <div class="title">Registration</div>
            <div class="wrong"><a href="./index.html"><i class="fa-solid fa-x fa-rotate-90"></i></a></div>
     
        </div>

        <form  method="POST" onsubmit="submit()">
        <div class="message-box">
            <?php

                if(isset($_POST['submit']))
                {
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $confirm_password = $_POST['confirm_password'];
                    if($password !== $confirm_password)
                    ?>
                        <p>Password not matched</p>
                    <?php
                    
                }

            ?>
        </div>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="First Name" name="first_name" required>
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Last Name" name="last_name" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone</span>
                    <input type="text" placeholder="phone" name="phone" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>



    <script>
        const submit = (e)=>{
            e.preventDefault();
        }
    </script>
</body>

</html>



