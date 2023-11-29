<?php
    include 'koneksi.php';
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

        <div class="search-bar">
            
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>
    
    </div>

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
