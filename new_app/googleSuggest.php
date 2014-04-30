<?php
$enc=mb_internal_encoding();
$v_op=$_GET['v_op'];
$v_op=urlencode ($v_op);
$get_url = 'http://search.netprice.co.jp/search?rows=1000&qt='.$v_op;
header("Content-Type: text/xml");
$out = file_get_contents($get_url);
echo $out;
?>