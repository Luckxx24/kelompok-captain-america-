<?php
    include 'koneksi.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from film where id_film = $id";
    $result = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($result);
}
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
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

        .logo {
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
            width: 200px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            margin-right: 10px;
            background-color: #A5A5AB; 
            color: white;
        }

        .search-bar button {
            background-color: #870000;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
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
        }

        .social-icons img {
            width: 30px; 
            margin: 0 5px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div style="width: 100%; display: flex; justify-content: center;">
            <a href="home.php">Home</a>
            <a href="explore.php">explore</a>
        </div>

        <div style="display: flex; align-items: center; margin-right: 70px;">
            <img class="logo" src="account-logo.png" alt="tiktok">
            <button class="button">Logout</button>
        </div>
    </nav>

    <div class="content">
        <!-- Informasi Review Film -->
        <div class="movie-review">
            <!-- Tampilkan Informasi Film -->
            <h2><?php echo $data['judul_film']; ?></h2>
            <img src="<?php echo $data['poster_film']; ?>" alt="<?php echo $data['judul_film']; ?> Poster">
            <p>Rilis: <?php echo $data['tahun_rilis']; ?></p>
            <p>Rating: <?php echo $data['rating']; ?></p>
            <p>Deskripsi: <?php echo $data['deskripsi']; ?></p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>copyright &copy; captain review</p>
     
        <div class="social-icons">
            <img src="tiktok-logo.png" alt="TikTok Logo"> 
            <img src="instagram-logo.png" alt="Instagram Logo"> 
        </div>
    </footer>

</body>
</html>