<!DOCTYPE html>
<html>

<head>
  <title>About</title>
  <link rel="icon" href="personal/images/instagram.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body onload="myFunction()">

  <div id="loader">

  <div id="loader2">
    <img src="personal/images/instagram.png" alt="instagram">
  </div>

  <?php $page = 'home'; include("includes/navigation.php");?>

  </div>

<div style="display:none;" id="myDiv" class="animate-bottom">

  <img src="images/passport.png" alt="passportphoto" class="image10">
  <img src="images/dempsey_dewalt.png" alt="dempsey_dewalt" class="image20">


<footer></footer>
  <nav>
    <span><a href="../index.html">©2021 Eoghan Dempsey</a>—<a href="../art&design/art&design.html">Art & Design</a> / <a href="../photos/photos.html">Photo</a> / <a href="https://archive.eoghan.world">Archive</a></span>
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
