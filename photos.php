<!DOCTYPE html>
<html>

<head>
  <title>Photos</title>
  <link rel="icon" href="personal/images/instagram.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
</head>

<body onload="myFunction()">

  <div id="loader">

  <div id="loader2">
    <img src="personal/images/instagram.png" alt="instagram">
  </div>

  <?php $page = 'home'; include("includes/navigation.php");?>

  <div class="row0">

    <!--FIRST COLUMN-->
    <div class="column0">
      <img src="images/photo104.jpg" alt="2">
      <img src="images/photo34.jpg" alt="6">
      <img src="images/photo53.jpg" alt="1">
      <img src="images/photo30.jpg" alt="1">
      <img src="images/photo35.jpg" alt="1">
      <img src="images/photo38.jpg" alt="1">
      <img src="images/photo40.jpg" alt="1">
      <img src="images/photo58.jpg" alt="26">

    </div>

    <!--SECOND COLUMN-->
    <div class="column0">
      <img src="images/photo109.jpg" alt="12">
      <img src="images/140photo.jpg" alt="20">
      <img src="images/photo14.jpg" alt="14">
      <img src="images/photo23.jpg" alt="23">
      <img src="images/photo41.jpg" alt="2">
      <img src="images/photo42.jpg" alt="6">
      <img src="images/photo44.jpg" alt="14">
    </div>

    <!--THIRD COLUMN-->
    <div class="column0">
      <a href="images/nuns.jpg"><img src="images/nuns.jpg" alt="nuns"></a>
      <a href="images/karshe.jpg"><img src="images/karshe.jpg" alt="karshe"></a>
      <img src="images/photo3.jpg" alt="3">
      <img src="images/photo4.jpg" alt="4">
      <img src="images/photo48.jpg" alt="7">
      <img src="images/photo49.jpg" alt="11">
      <img src="images/photo52.jpg" alt="24">
    </div>

    <!--FOURTH COLUMN-->
    <div class="column0">
      <a href="images/deerlightleak.jpg"><img src="images/deerlightleak.jpg" alt="deerlightleak"></a>
      <img src="images/photo15.jpg" alt="2">
      <img src="images/photo26.jpg" alt="26">
      <img src="images/photo53.jpg" alt="15">
      <img src="images/photo55.jpg" alt="12">
      <img src="images/photo56.jpg" alt="20">
    </div>

  </div>



<p class="stickycaption" style="color:yellow; filter: blur(1.5px);">  Photos 2017-2021 </p>

<footer></footer>
  <nav style="color:yellow;">
    <a style="color:yellow;" class="homelink" href="index.html">©2021 Eoghan Dempsey</a>
    <div class="slashes">—</div>
    <a style="color:yellow;" href="art&design/art&design.html" class="andlink">Art & Design</a>
    <div class="slashes">&nbsp;/&nbsp;</div>
    <a style="color:yellow;" href="photos/photos.html" class="photolink">Photography</a>
    <div class="slashes">&nbsp;/&nbsp;</div>
    <a style="color:yellow;" href="https://archive.eoghan.world" class="archivelink">Archive</a>
  </nav>

</div>




  <script>
  var myVar;

  function myFunction() {
    myVar = setTimeout(showPage, 3000);
  }

  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  }
  </script>

</body>

</html>
