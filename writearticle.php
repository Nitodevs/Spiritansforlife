<?php include 'back.php';?>
<!DOCTYPE html>
<head>
   <html lang="en">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
   integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
   crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
   integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
   crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
   integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
   \crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="spiritansforlife.css">
   <script src="spiritansforlife.js" defer></script>
   <script src="https://kit.fontawesome.com/53ef80b314.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="sidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times</a>
    <div class="sidebar-header">
    <h4><img class="prolifelogo" src="IMG-20201202-WA0032.jpg"></img>spiritansforlife</h4>
    </div>
    <div>
    <ul class="list-unstyled components">
    <li><i class="fa fa-home"><a href="index.html">Home</a></i></li>
    <li><i class="fa fa-book-open"><a href="articles.html">Articles</a></i></li>
    <li><i class="fa fa-book"><a href="books.html">Books</a></i></li>
    <li><i class="fas fa-hand-holding-usd"><a href="donate.html">Donate</a></i></li>
    <li><i class="fa fa-ad"><a href="advert.html">Advertise</a></i></li>
    <li><i class="fa fa-Users"><a href="about.html">About us</a></i></li>
    <li><i class="fas fa-user-graduate"><a href="officials.html">Officials</a></i></li>
    <li><i class="fa fa-phone"><a href="contacts.html">Contact</a></i></li>
    </ul>
    <div>
    <nav class="slogan" style="position:relative;background-color:#990099;"> To restore the dignity of human life!!!</nav></div>
    <div style="background-color:#990099;text-align:center;"><p>Designed by Okika Johnpaul</p>
    </div>
    </div>
    </div>



  <div id="content">
  <div class="body-text wrapper">
  <div id="main">
  <nav class="buttonlogo">
  <div><button class="button openbtn" onclick="openNav()" type="button" >
  <i class="#"><img class="prolifelogo" src="IMG-20201202-WA0033.jpg"></img></i></button></div>
  <div class="navlogo"><p>Spiritansforlife.<small>com</small></p></div></nav>
  <nav class="slogan"> Life is precious! Life is sacred!! Defend it!!!</nav><br><br><br><br>


  <div class="container">
  <div class="jumbotron">
  <h2>ARTICLE GUIDELINES</h6>
  <ol style="color:black">
  <li>FONT STYLE (Times New Roman).</li>
  <li>LINE SPACING (1.5)</li>
  <li>CHICAGO MANUAL OF STYLE (CMS)</li>
  <li>AT LEAST TWO PAGES</li>
  <li>A PICTURE, WITH BLACK BACKGROUND (optional).</li>
  <li>ALL TOPICS THAT DEALS WITH HUMAN LIFE.</li>
  </ol>

  <form action="writearticle.php" method="post" enctype="multipart/form-data">
    <label for="myfile">SUBMIT ARTICLE HERE!
    </label>

    <input type="file" name="myfile">
    <!-- <button type="submit" name="save">upload</button> -->
    <input type="submit" value="Upload Document" name="save" class="btnsubmit1"style="cursor:default;">
  </form>



  </div>
  </div><br>


  <div>
  <a href="#"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"  style="color:black"></i></a>
  <a href="#"><i class="fab fa-twitter-square fa-2x" aria-hidden="true" style="color:black"></i></a>
      <a href="#"><i class="fab fa-instagram-square fa-2x" aria-hidden="true" style="color:black"></i></a>
      <a href="#"><i class="fab fa-whatsapp-square fa-2x" aria-hidden="true" style="color:black"></i></a>
    </div>

    <footer><br>
    <div class="form-group">
    <div class="col-sm-12">
    <label class="control-label" for="email">Get our daily prolife newsletter:</label>
    <input type="email" class="form-control" id="email" placeholder="eg.name@gmail.com"></input><br>

    <button type="button" class="btnsubmit1">Submit</button>
    </div>
    </div>

    <div id="footlinks"><hr>
    <a href="about.html">About Us</a><br>
    <a href="donate.html">Donate</a><br>
    <a href="advert.html">Advertise with us</a><br>
    <a href="officials.html">officials</a><br>

    <h7>copyright @spiritansforlife.com 2020</h7></div>
    </footer>

</body>
</html>
