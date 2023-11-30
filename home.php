<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
        exit();
    }
    
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
            padding: 20px;
            text-align: center;
        }

        .search-bar {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
       
            padding: 15px; 
            border-radius: 10px; 
        }

       
        .search-bar input {
            width: 220px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            margin-right: 10px;
            background-color: #A5A5AB; 
            color: white;
        }

        .search-bar button {
        background-color: #870000; /* Add the background color */
        background: url('gambar/search.png') no-repeat center center;
        background-size: cover;
        border: none;
        width: 30px;
        height: 30px; 
        cursor: pointer;
        }
        .button{
            
            background-color: #870000; 
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width:90px;
            margin-left:20px;
        }

        

        footer {
    background-color: #870000;
    padding: 5px;
    color: white;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: auto;
    margin-right: auto; 
    margin-bottom: 2%;
}


.social-icons {
    display: flex;
   margin-right:30px;
}

.social-icons img {
    width: 30px;
    margin-right: 10px; 
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
            <img class="profile" src="gambar/profile-user.png" alt="tiktok">
            <button class="button">Logout</button>
        </div>
    </nav>

 
    <div class="content">

        <div class="search-bar">
            
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>
        <h2>Rekomendasi</h2>
     
    </div>

    <!-- Footer -->
    <footer>
        <p>copyright &copy; captain review</p>
     
        <div class="social-icons">
        <img src="gambar/tik-tok.png" alt="TikTok Logo"> 
       <img src="gambar/instagram.png" alt="Instagram Logo"> 
       </div>

    </footer>

</body>
</html>