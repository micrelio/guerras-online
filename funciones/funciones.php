<!-- var_dump($datocg); para ver lo que devuelve un array -->
<!-- Guerras online-->
<?php
$clan = "#8VVJCY9R";
function clanes($clan)
{
	//$clan="#88G0PRVJ"
	//echo $clan;
	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg";
	$url = "https://api.clashofclans.com/v1/clans/" . urlencode($clan);
	$ch = curl_init($url);
	$headr = array();
	$headr[] = "Accept: application/json";
	$headr[] = "Authorization: Bearer " . $token;
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
	print_r($dato);
	// echo '<pre>';
	// print_r($dato);
	// echo '</pre>';
}
?>
<!-- PRIMEROS GUERRA ACTUAL-->
<?php
// Replace with the token you get from the site, see more at http://jwt.io
function guerras($clan)
{
	//$clan="#2Q2QVJC9";
	//echo $clan;
	if (isset($clan)) {
		//echo $clan,"</br>";
		$clanmod = substr($clan, 1, 20); //sacamos 2 2 numero para minutos
		$clanmod = "%23" . "" . $clanmod;
		//echo $clanmod,"</br>";
		$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg';
		$url = 'https://ifconfig.io';
		$url = "https://api.clashofclans.com/v1/clans/" . $clanmod . "/currentwar";
		$ch = curl_init(htmlspecialchars($url));
		$headr = array();
		$headr[] = 'Accept: application/json';
		$headr[] = 'Authorization: Bearer ' . $accesstoken;
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
			$error = $datog["reason"];
			//echo $error;
			switch ($error) {
				case 'notFound':
					$datog = 'notFound';
					break;
				case 'accessDenied':
					$datog = 'accessDenied';
					break;
			}
		}
		// echo '<pre>';
		// print_r($datog);
		// echo '</pre>'; 
		return $datog;
	}
} //isset clan
//echo '<pre>';
//print_r($datog);
//echo '</pre>';
?>
<!-- TOP 10 ESPAÑA
-->
<?php
function top()
{
	$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg';
	$url = 'https://ifconfig.io';
	$url = 'https://api.clashofclans.com/v1/locations/32000218/rankings/clans?limit=10'/*?limit=20 para el limite de gerras mostradas*/;
	$ch = curl_init(htmlspecialchars($url));
	$headr = array();
	$headr[] = 'Accept: application/json';
	$headr[] = 'Authorization: Bearer ' . $accesstoken;
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
$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg';
//Use the first url to test your Server's IP adress and cURL function
$url = 'https://ifconfig.io';
$url = 'https://api.clashofclans.com/v1/clans/%238VVJCY9R/warlog'/*?limit=20 para el limite de gerras mostradas*/;
$ch = curl_init(htmlspecialchars($url));
$headr = array();
$headr[] = 'Accept: application/json';
$headr[] = 'Authorization: Bearer ' . $accesstoken;
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