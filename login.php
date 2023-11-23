<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #002D5C; 
        }

        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #A5A5AB;
            margin: 0 auto; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border-radius: 10px; 
        }

        input[type="submit"] {
            background-color: #870000;
            color: white;
            cursor: pointer;
            border-radius: 10px; 
            width: 100px;
            height: 30px; 
            font-size: 14px;
            margin: 0 auto;
            display: block;
        }

        input[type="submit"]:hover {
            background-color: #6E0000;
        }

        .logo {
            width: 250px; 
            height: auto;
            margin-bottom: 15px; 
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <h2 style="text-align: center; color: #0000FF;">Login</h2>

      
        <img class="logo" src="logo.png" alt="Logo">

        <label for="username"></label>
        <input type="text" id="username" name="username" required placeholder="Username">

        <label for="password"></label>
        <input type="password" id="password" name="password" required placeholder="Password">

        <input type="submit" value="Sign in">
        <p>Belum memiliki akun? <a href="login.php">Log in</a></p>
    </form>
</body>
</html>
