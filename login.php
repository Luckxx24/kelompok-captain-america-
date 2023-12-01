<?php
    include 'koneksi.php';
    session_start();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $user = mysqli_fetch_assoc($result);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['nama'] = $user['nama'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];

                echo '<script>alert("Login Anda Berhasil! ' . $user['nama'] . '");</script>';
                
                echo '<script>setTimeout(function(){ window.location.href = "home.php"; },);</script>';
                exit();
            } else {
                echo '<script>alert("Username atau password salah.");</script>';
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }

?>
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
    <form action="" method="POST">
        <h2 style="text-align: center; color: #0000FF;">Login</h2>

      
        <img class="logo" src="logo.png" alt="Logo">

        <label for="username"></label>
        <input type="text" id="username" name="username" required placeholder="Username">

        <label for="password"></label>
        <input type="password" id="password" name="password" required placeholder="Password">

        <input type="submit" value="Sign in" name="login">
        <p>Belum memiliki akun? <a href="register.php">Sign up</a></p>
    </form>
</body>
</html>