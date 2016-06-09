<html>
<head>
<?php
$pageFileName = basename(__FILE__);
$temp = explode('.', $pageFileName);
$ext = array_pop($temp);
$pageName = implode('.', $temp);
$displayPageName = ucfirst($pageName);

echo '<a href="./index.php"><h2>Home</h2></a>';

echo '<title>Barco - ' . $displayPageName . ' Display</title>';
echo '<link type="text/css" rel="stylesheet" href="./index_styles.css"/>';
echo '</head>';
echo '<body>';
echo '<META http-equiv=Content-Type content="text/html; charset=iso-8859-1"><META http-equiv="refresh" content="5">';


echo '<div id="header">' . $displayPageName . ' Display</div><br>';

echo '<div class="largeImg">';
  echo '<img src="./imgs/' . $pageName . '.png">';
echo '</div>';

$date = date("d/m/Y H:i:s");
echo '<div id="footer">Last Updated: ' . $date . '</div>';
?>

</body>
</html>
