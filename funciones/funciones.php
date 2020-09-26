


<!-- var_dump($datocg); para ver lo que devuelve un array -->
<!-- Guerras online-->

<?php

function clanes($clan)
{
//$clantag = "#8VVJCY9R";
//echo $clan;
	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImRlZmQyOWY0LTBlMTctNDViYy05MmJjLTg2OWU5NmZlMTU2YSIsImlhdCI6MTUxNzQzOTAyNiwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjg5LjEzMC4xMTQuMTE5Il0sInR5cGUiOiJjbGllbnQifV19.LuO8Ll_4-t5rVRKNJ0lcnMI9N0DD4RbpJpxE516-qUuoZ1-LPQ8IuGDMwbow3L2zXpJTu6eYqQR3v-EiNHQhCg";
	$url = "https://api.clashofclans.com/v1/clans/" . urlencode($clan);
	$ch = curl_init($url);
	$headr = array();
	$headr[] = "Accept: application/json";
	$headr[] = "Authorization: Bearer ".$token;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$res = curl_exec($ch);
	$dato = json_decode($res, true);
	curl_close($ch);
	if (isset($dato["reason"])) {
		$errormsg = true;
		}
		return $dato;
		print_r();
}

	?>	 





<!-- PRIMEROS GUERRA ACTUAL-->

 <?php
// Replace with the token you get from the site, see more at http://jwt.io
function guerras($clan)
{ 	  
 if(isset($clan)){ 
 	//echo $clan,"</br>";
	$clanmod= substr($clan, 1, 20);//sacamos 2 2 numero para minutos
 	$clanmod= "%23"."".$clanmod ;
 	//echo $clanmod,"</br>";
	$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImRlZmQyOWY0LTBlMTctNDViYy05MmJjLTg2OWU5NmZlMTU2YSIsImlhdCI6MTUxNzQzOTAyNiwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjg5LjEzMC4xMTQuMTE5Il0sInR5cGUiOiJjbGllbnQifV19.LuO8Ll_4-t5rVRKNJ0lcnMI9N0DD4RbpJpxE516-qUuoZ1-LPQ8IuGDMwbow3L2zXpJTu6eYqQR3v-EiNHQhCg';
	$url = 'https://ifconfig.io';
	$url = "https://api.clashofclans.com/v1/clans/".$clanmod."/currentwar";
	$ch = curl_init(htmlspecialchars($url));
	$headr = array();
	$headr[] = 'Accept: application/json';
	$headr[] = 'Authorization: Bearer '.$accesstoken;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$execute = curl_exec($ch);
	//var_dump($execute);
	$res = curl_exec($ch);
	$datog = json_decode($res, true);
	curl_close($ch);
if (isset($datog["reason"])) {
		$errormsg = true;
		$error=$datog["reason"];
		//echo $error;
		
		switch($error){
			case 'notFound':
				$datog ='notFound';
			break;
			case 'accessDenied':
				$datog = 'accessDenied';
			break;
}}
				
return $datog;}
		
}//isset clan
//echo '<pre>';
	//print_r($datog);
	//echo '</pre>';
?> 

<!-- TOP 10 ESPAÑA
-->

<?php

function top()
{
	$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImRlZmQyOWY0LTBlMTctNDViYy05MmJjLTg2OWU5NmZlMTU2YSIsImlhdCI6MTUxNzQzOTAyNiwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjg5LjEzMC4xMTQuMTE5Il0sInR5cGUiOiJjbGllbnQifV19.LuO8Ll_4-t5rVRKNJ0lcnMI9N0DD4RbpJpxE516-qUuoZ1-LPQ8IuGDMwbow3L2zXpJTu6eYqQR3v-EiNHQhCg';
	$url = 'https://ifconfig.io';
	$url = 'https://api.clashofclans.com/v1/locations/32000218/rankings/clans?limit=10'/*?limit=20 para el limite de gerras mostradas*/;
	$ch = curl_init(htmlspecialchars($url));
	$headr = array();
	$headr[] = 'Accept: application/json';
	$headr[] = 'Authorization: Bearer '.$accesstoken;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//$execute = curl_exec($ch);
	//var_dump($execute);
	$res = curl_exec($ch);
	$datot = json_decode($res, true);
	curl_close($ch);
	if (isset($datot["reason"])) {
	$errormsg = true;
	}
	return $datot;
//echo '<pre>';
//print_r($datot);
//echo '</pre>'; 
}
	?>	 






<!-- PRIMEROS REGISTRO GUERRA-->
<?php
	// Replace with the token you get from the site, see more at http://jwt.io
	$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImRlZmQyOWY0LTBlMTctNDViYy05MmJjLTg2OWU5NmZlMTU2YSIsImlhdCI6MTUxNzQzOTAyNiwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjg5LjEzMC4xMTQuMTE5Il0sInR5cGUiOiJjbGllbnQifV19.LuO8Ll_4-t5rVRKNJ0lcnMI9N0DD4RbpJpxE516-qUuoZ1-LPQ8IuGDMwbow3L2zXpJTu6eYqQR3v-EiNHQhCg';
	//Use the first url to test your Server's IP adress and cURL function
	$url = 'https://ifconfig.io';
	$url = 'https://api.clashofclans.com/v1/clans/%238VVJCY9R/warlog'/*?limit=20 para el limite de gerras mostradas*/;
	$ch = curl_init(htmlspecialchars($url));
	$headr = array();
	$headr[] = 'Accept: application/json';
	$headr[] = 'Authorization: Bearer '.$accesstoken;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//$execute = curl_exec($ch);
	//var_dump($execute);
	$res = curl_exec($ch);
	$datocg = json_decode($res, true);
	curl_close($ch);
	if (isset($datocg["reason"])) {
	$errormsg = true;
	}
	//$mienbrose = $datocg["opponent"]["members"];
	//echo $datocg[""];
?> 



