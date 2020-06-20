<?php include "function.php" ?>
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
    $dec = bin_to_dec($_GET['bin']);

  }
  if (isset($dec)) {
    $str_result = sprintf("１０進数 %d は、<br>２進数：%b<br>１６進数: %x<br>です。",
    $dec, $dec, $dec);
  } else {
    $str_result = "URLの後ろに ?bin=２進数 のパラメータを付けてアクセスしてみてください。";
  }
?>

<p><?= $str_result ?></p>

</body>
</html>