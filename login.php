<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .input-group {
            margin-bottom: 1em;
        }
        .input-group label {
            display: block;
            margin-bottom: .5em;
        }
        .input-group input {
            width: 100%;
            padding: .5em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            margin-top: .5em;
        }
    </style>
    <script>
        function validateForm() {
            let username = document.forms["loginForm"]["username"].value;
            let password = document.forms["loginForm"]["password"].value;
            let valid = true;

            if (username == "") {
                document.getElementById("usernameError").innerText = "Please enter your username.";
                valid = false;
            } else {
                document.getElementById("usernameError").innerText = "";
            }

            if (password == "") {
                document.getElementById("passwordError").innerText = "Please enter your password.";
                valid = false;
            } else {
                document.getElementById("passwordError").innerText = "";
            }

            return valid;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form name="loginForm" method="post" action="login_process.php" onsubmit="return validateForm()">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username">
                <div id="usernameError" class="error"></div>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password">
                <div id="passwordError" class="error"></div>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Tidak punya akun? <strong><a href="register.php">Register</a></strong></p>
    </div>
</body>
</html>
