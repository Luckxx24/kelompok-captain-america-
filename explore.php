<?php
    include 'koneksi.php';
    session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
        exit();
    }
    $query = "select * from film";
    $result = mysqli_query($koneksi,$query);
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
            position: relative;
            overflow: hidden;
            border: none;
            padding: 5px;
            cursor: pointer;
            width: 60px;
            height: 43px;
            border-radius:17px;
            background-color: #870000;
        }

        
        .search-bar button img {
            width: 35%;
            height: 50%;
            object-fit: cover;
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
    z-index: 5000;
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

    .movie-posters {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .movie-poster {
            margin: 10px;
            text-align: center;
        }

        .movie-poster img {
            width: 250px;
            height: 250px;
            border-radius: 10px;
        }

        .movie-poster a {
            display: block;
            margin-top: 10px;
            background-color: #002D5C;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .movie-poster a:hover {
            background-color: #001F40;
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
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button>
            <img src="gambar/search.png" alt="Search">
        </button>
    </div>
    <h2>Rekomendasi</h2>
    <div class="movie-posters">
        <?php
        while($data = mysqli_fetch_array($result)){
            
        ?>
            <!-- Film 1 -->
            <div class="movie-poster">
                <img src="<?=$data['poster_film']?>" alt="Film 1 Poster">
                <a href="review.php?id=<?=$data['id_film']?>">Review</a>
            </div>
            <?php
            }?>

            <!-- Film 2 -->
            <!-- <div class="movie-poster">
                <img src="captainamerica.jpeg" alt="Film 2 Poster">
                <a href="review.php?title=Film 2">Review</a>
            </div> -->

             <!-- Film 3 -->
             <!-- <div class="movie-poster">
                <img src="civil.jpg" alt="Film 3 Poster">
                <a href="review.php?title=Film 3">Review</a>
            </div> -->

             <!-- Film 4 -->
             <!-- <div class="movie-poster">
                <img src="infinity.jpg" alt="Film 4 Poster">
                <a href="review.php?title=Film 4">Review</a>
            </div> -->
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