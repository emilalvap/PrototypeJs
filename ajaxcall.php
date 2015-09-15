<?php
$val = $_POST['number'] +1;
//$arr = array('value' => $val);

//echo json_encode($arr);
echo "<input type=\"text\" id=\"finalprice\" readonly value=\""+$val+"/>";
?>