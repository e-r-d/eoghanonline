<!DOCTYPE html>
<html>

<head>
  <title>Email</title>
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


<p id="gmail">eoghanrdempsey@gmail.com</p>

<div class="emicon">

  <div class="row2">

    <div class="column2">
        <a href="mailto:eoghanrdempsey@gmail.com">
          <img src="images/emailclienticon.jpg" alt="page2">
        </a>
    </div>

    <div class="column2">
      <a href="https://mail.google.com/mail/?view=cm&fs=1&to=eoghanrdempsey@gmail.com">
      <img src="images/gmailicon.jpg" alt="page3">
    </a>
    </div>

  </div>


</div>


<!--<div class="emailicons">

    <div class="row2">
    <div class="column2">
      <a href="mailto:eoghanrdempsey@gmail.com">
        <img src="images/emailclienticon.jpg" alt="emailclienticon">
      </a>
    </div>

    <div class="column2">
      <a href="https://mail.google.com/mail/?view=cm&fs=1&to=eoghanrdempsey@gmail.com">
        <img src="images/gmailicon.jpg" alt="gmailicon">
      </a>
    </div>

  </div>

</div>-->

<footer></footer>
<?php $page = 'home'; include("includes/navigation.php");?>
</div>



</body>

</html>
