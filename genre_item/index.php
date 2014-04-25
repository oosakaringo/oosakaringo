<?php
phpinfo();
//#/usr/local/apache2/conf/php.ini
//passthru('whoami');
//echo ini_get('safe_mode') ? "セーフモードです" : "CGIモードです";
//exec("http://localhost/make_data.php > /dev/null &");
//exec("/home/httpd/html/flash/genre_item/make_data.php");


$v_data="";
$filename = "list_data.txt";
f_load_data($filename);

function f_load_data($filename){
	if ( !file_exists($filename) ) {
//		exec("php /home/httpd/html/flash/genre_item/make_data.php > /dev/null &");
echo shell_exec( '/home/httpd/html/flash/genre_item/make_data.php 2>&1' );

//exec("/home/httpd/html/flash/genre_item/make_data.php >/dev/null 2>&1");
	}else if( (date("U")-600)>date("U", filemtime($filename)) ){
		echo file_get_contents($filename);
		exec("php /home/httpd/html/flash/genre_item/make_data.php > /dev/null &");
//exec("php /home/httpd/html/flash/genre_item/make_data.php > /dev/null &");
//exec("nohup php -c '' '/home/httpd/html/flash/genre_item/make_data.php' > /dev/null &");
//exec("/home/httpd/html/flash/genre_item/make_data.php >/dev/null 2>&1");
	}else{
		echo file_get_contents($filename);
	}
}
?>


