<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>数値変換ツール</title>
</head>
<body>
<?php
  $dec = null;
  if (isset($_GET['bin'])) {
    $bin = $_GET['bin'];
    $dec = intval($bin, 2);
  } else if (isset($_GET['hex'])) {
    $hex = $_GET['hex'];
    $dec = intval($hex, 16);
  }
  if (isset($dec)) {
    $str_result = sprintf("10進数 %d は、<br>2進数：%b<br>16進数: %x<br>です。",
    $dec, $dec, $dec);
  } else {
    $str_result = "URLの後ろに ?bin=2進数 あるいは、hex=16進数 のパラメータを付けてアクセスしてみてください。";
  }
?>

<p><?= $str_result ?></p>

</body>
</html>