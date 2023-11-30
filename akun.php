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
            padding: 20px;
            color: white;
            text-align: center;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-left: auto; /* Center horizontally */
            margin-right: auto;
            margin-bottom: 3%;
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
            <img class="profile" src="gambar/profile-user.png" alt="tiktok">
            <button class="button">Logout</button>
        </div>
    </nav>

    <div class="content">
        <img class="profile-picture" src="profile-user.png" alt="Profile Picture">
        <a href="">tambahkan foto</a>

        <b><p>Nama <br></b> John Doe</p>
        <b><p>Username <br></b> john_doe</p>
        <b><p>Email <br></b> john.doe@example.com</p>
        <b><p>Password <br></b> ********</p>
        <button class="edit-button" value="Edit">Edit</button>
    </div>

    <!-- Footer -->
    <footer>
        <p>copyright &copy; captain review</p>
     
        <div class="social-icons">
        <img src="gambar/tik-tok.png" alt="TikTok Logo"> 
       <img src="gambar/instagram.png" alt="Instagram Logo"> <!-- This assumes instagram-logo.png is in the same directory as your HTML file -->
       </div>

    </footer>

</body>
</html>
