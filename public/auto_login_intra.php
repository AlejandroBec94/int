<?php //print_r($argv[2]);exit;?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

</head>
   <body>
        <iframe src="http://intranet.nikkenlatam.com:8080/intra_test_two/test.html?user=<?php echo $argv[1];?>&pass=<?php echo $argv[2];?>" name="mainFrame" id="mainFrame" title="mainFrame" style="display:none;" />
    </body>

</html>
