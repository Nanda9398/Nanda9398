<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In|360 RF</title>
    <link rel="icon" href="images/360rf.png" type="image/icon type" />
    <link rel="stylesheet" href="./css/login.css" />

</head>

<body>
    <div id='login-form' class='login-page'>
        <div class='form-box'>

            <div class="button-box">
                <div id='btn'></div>
                <button type="button" onclick="login()" class='toggle-btn'>Log in</button>
                <button type="button" onclick="register()" class='toggle-btn'>Register</button>
            </div>

            <form id='login' class='input-group-login' action="action/login-action.php" method="POST">
                <input type='text' class='input-field' placeholder='Email Id' name="email" autocomplete="off" requried>
                <input type='password' class='input-field' placeholder='Enter Password' name="password" requried>
                <input type='checkbox' class='check-box'><span>Remember Password</span>
                <button class='submit-btn' name="submit">Login In</button>
            </form>

            <form id='register' class='input-group-register' action="action/signup-action.php" method="POST">
                <input type='text' class='input-field' placeholder='First Name' name="firstname" autocomplete="off" requried>
                <input type='text' class='input-field' placeholder='Last Name' name="lastname" autocomplete="off" requried>
                <input type='text' class='input-field' placeholder='Email Id' name="email" autocomplete="off" requried>
                <input type="tel"  pattern="[0-9]{10}"  maxlength="10" placeholder="0123456789" name="phone" autocomplete="off" required/>   
                <input type='password' class='input-field' placeholder='Enter Password' requried>
                <input type='password' class='input-field' placeholder='Confirm Password' name="password" requried>
                <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                <button class='submit-btn' name="submit">Sign Up</button>
            </form>

        </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        wimdow.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>