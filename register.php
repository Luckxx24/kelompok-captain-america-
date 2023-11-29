<?php
    include 'koneksi.php';
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Perbarui query untuk menyimpan data ke dalam tabel user
        $query = "INSERT INTO user (username, nama, email, password) VALUES ('$username', '$nama', '$email', '$hashedpassword')";
        
        // Eksekusi query
        if (mysqli_query($koneksi, $query)) {
            echo '<script>alert("Registrasi Anda Berhasil!"); window.location.href = "login.php";</script>';
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
            justify-content: flex-end;
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
            margin-right: 110px;
          
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
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            width: 600px;
            height: auto;
        }
    </style>
</head>
<body>
    <img class="logo" src="logo.png" alt="Logo">

    <form action="" method="POST">
    <h2 style="text-align: center; color: #0000FF;">Sign up</h2>

        <label for="Nama"></label>
        <input type="text" id="Nama" name="nama" required placeholder="Nama">

        
        <label for="username"></label>
        <input type="text" id="username" name="username" required placeholder="Username">

      
        <label for="email"></label>
        <input type="email" id="email" name="email" required placeholder="Email">

      
        <label for="password"></label>
        <input type="password" id="password" name="password" required placeholder="Password">

       
        <input type="submit" value="Sign up" name="register">
        <p>sudah memiliki akun? <a href="login.php">log in</a></p>
    </form>
</body>
</html>
