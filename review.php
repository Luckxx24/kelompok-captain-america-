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
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* Set a higher z-index to ensure it appears above other elements */
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
    margin-top: 60px; /* Add a top margin to accommodate the fixed navigation bar */
    margin-bottom: 60px; /* Add a bottom margin to accommodate the fixed footer */
}

        .movie-container {
            display: flex;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
        }

        .movie-image {
            width: 40%;
            overflow: hidden;
            position: relative;
        }

        .movie-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .movie-details {
            padding: 20px;
            width: 60%;
        }

        .movie-details h2 {
            margin-top: 0;
            
            
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
    z-index: 1000; /* Set a higher z-index to ensure it appears above other elements */
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
    <button class="button">Logout</button>
     </div>
    </nav>

 
    <div class="content">
        <!-- Informasi Review Film -->
        <div class="movie-container">
            <div class="movie-image">
                <img src="<?php echo $data['poster_film']; ?>" alt="<?php echo $data['judul_film']; ?> Poster">
            </div>
            <div class="movie-details">
                <!-- Tampilkan Informasi Film -->
                <h2><?php echo $data['judul_film']; ?></h2>
                <p>Rilis: <?php echo $data['tahun_rilis']; ?></p>
                <p>Rating: <?php echo $data['rating']; ?></p>
                <p>Deskripsi: <?php echo $data['deskripsi']; ?></p>
            </div>
        </div>
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