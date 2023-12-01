<?php
session_start();
    include 'koneksi.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        nav {
            background-color: #002D5C;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .profile {
            width: 40px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 2px solid white; 
        }

        h2, p {
            margin-bottom: 15px;
        }

        p {
            border-bottom: 3px solid #A5A5AB;
            padding-bottom: 5px;
            border-width: 3px;
        }

        .edit-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 90px;
        }

        footer {
    background-color: #870000;
    padding: 5px;
    color: white;
    text-align: center;
    position: absolute; 
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: auto;
    margin-right: auto; 
    z-index: 5000;
}       .social-icons {
            display: flex;
            margin-right:30px;
        }
        .social-icons img {
            width: 30px;
            margin: 0 5px;
        }

        .button {
            background-color: #870000;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 90px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-left: 20px;
         }

        .logo {
            width: 100px;
            height: auto;
            margin-right: 10px; 
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
      <div style="display: flex; align-items: center; margin-left: 20px;">
        <img class="logo" src="gambar/logo.png" alt="Logo">
      </div>
        <div style="width: 100%; display: flex; justify-content: center; margin-left:100px">
            <a href="home.php">Home</a>
            <a href="explore.php">explore</a>
        </div>

        <div style="display: flex; align-items: center; margin-right: 30px;">
    <a href="akun.php">
        <img class="profile" src="gambar/profile-user.png" alt="tiktok">
    </a>
    <button class="button"><a href="logout.php">Logout</a></button>
     </div>
    </nav>

    <div class="content">
        <img class="profile-picture" src="user.jpg" alt="Profile Picture">
        <a href="">Tambah Foto</a>
        <b><p>Nama : <?=$_SESSION['nama']?><br></b></p>
        <b><p>Username : <?=$_SESSION['username']?><br></b></p>
        <b><p>Email : <?=$_SESSION['email']?><br></b></p>
        <b><p>Password : <?=$_SESSION['password']?><br></b></p>
     
    </div>

    <!-- Footer -->
    <footer>
        copyright &copy; captain review
     
        <div class="social-icons">
        <img src="gambar/tik-tok.png" alt="TikTok Logo"> 
       <img src="gambar/instagram.png" alt="Instagram Logo"> 
       </div>

    </footer>

</body>
</html>
