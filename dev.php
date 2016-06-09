<html>
<head>
<title>DEV - Barco Display</title>
<link type="text/css" rel="stylesheet" href="./dev_styles.css"/>
</head>
<body>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1"><META http-equiv="refresh" content="5">

<h2> * * * * - DEV PAGE - * * * *</h2>
<a href="./dev.php"><h2>Home</h2></a>

<?php

echo '<div id="header">Barco Display</div><br>';

$date = date("d/m/Y H:i:s");
$dir = './imgs/';
$images = scandir($dir);

foreach ($images as &$image) {

  if (!(($image == '.') or ($image == '..'))) {
  
    // Remove the filename extension 
    $temp = explode('.', $image);
    $ext = array_pop($temp);
    $screenName = implode('.', $temp);
    $displayScrnName = ucfirst($screenName);

    //echo $image . '<br>';
    //echo $screenName . '<br>';

    echo '<div class="img"><a href="./' . $screenName . '.html"><img src="./imgs/' . $image . '" alt="' . $displayScrnName . ' Display" width="100%"></a><div class="desc">' . $displayScrnName . ' Display</div></div>';

  }

}

echo '<div id="footer">Last Updated: ' . $date . '</div>';

?>

<!--
<div class="img">
  <a href="./autocell.html">
    <img src="./imgs/autocell.png" alt="Autocell Display" width="100%">
  </a>
  <div class="desc">Autocell Display</div>
</div>

<div class="img">
  <a href="./barcobay-1.html">
    <img src="./imgs/barcobay-1.png" alt="Bay 1 Display" width="100%">
  </a>
  <div class="desc">Bay 1 Display</div>
</div>

<div class="img">
  <a href="./barcobay-2.html">
    <img src="./imgs/barcobay-2.png" alt="Bay 2 Display" width="100%">
  </a>
  <div class="desc">Bay 2 Display</div>
</div>

<div class="img">
  <a href="./barcobay=3.html">
    <img src="./imgs/barcobay-3.png" alt="Bay 3 Display" width="100%">
  </a>
  <div class="desc">Bay 3 Display</div>
</div>
-->

</body>
</html>
