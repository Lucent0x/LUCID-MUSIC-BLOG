<?php
 
 require('./php/conn.php');

 $stmt = mysqli_query($conn, "SELECT * FROM  lucidmusic ORDER BY id DESC LIMIT 3 ");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap"
      rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/index.css" />
    <title>LUCID MUSIC BLOG</title>
  </head>
  <body>
    <div class="container">
      <section id="intro">
        <div class="logo-c">
          <div class="logo">LUCID MUSIC BLOG</div>
          <div class="search">
            <input type="search" name="" id="search" />
            <i class="fas fa-search"></i>
          </div>
        </div>

        <div class="info">
          <div>
            <h1>
              The Best Music <br />
              Downloader
            </h1>
          </div>
          <div class="img">
            <img src="./image.png" alt="image" />
          </div>
        </div>

        <div class="note">
          <b
            >Whatever music you search for you'll find here
            <i class="fas fa-hand-point-down"></i>
          </b>
        </div>
      </section>
      <section id="audio"></section>
      <section id="suggestions">
        <b> Trending Hot Now!!</b>
        <?php 
                while( $res = mysqli_fetch_assoc($stmt) ){

           ?>
        <a
          href="<?php echo $res['path'] ?> "
          style="color: black"
          download="<?php $res['artist'] .' - '. $res['title'] ?>"
        >
          <p>
            <?php echo $res['artist'] .'  -  '. $res['title'];  ?>
            <i class="fas fa-download"></i>
          </p>
        </a>
        <?php } ?>
      </section>
    </div>
  </body>
  <footer>
    <div class="links">&copy; 2022 - LUCIDITY</div>
  </footer>
  <script src="./search.js"></script>
</html>
