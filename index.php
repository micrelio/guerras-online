<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>*Guerras online* | Clash of clans</title>
	<link rel="stylesheet" href="style/style.css" media="screen" />
	<link rel="icon" href="images/imagenes/.png" />
	<meta name="author" content="micro" />
	<meta name="copyright" content="micro" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta name="twitter:site" content="@Micrelio">
	<link rel="alternate" hreflang="es" href="https://clashofclansguerrasonline.titaniumgamers.com/" />
	<meta name="Title" content="Guerras oline Clash of clans" />
	<meta name="Description" content="clash of clans,  aqui puedes ver las guerras en directo del clan que quieras del juego clash of clans de supercell." />
	<meta name="Keywords" content="clash of clans,  guerras, supercell, online." />
	<meta http-equiv="content-language" content="es-ES" />
	<meta name="Distribution" content="Global" />
	<meta name="googlebot" content="index, follow">
	<meta name="robots" content="index,follow">
	<meta property="og:url" content="https://clashofclansguerrasonline.titaniumgamers.com/">
	<meta property="og:site_name" content="Guerras online | Clash of Clans">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src='funciones/funciones.js'></script>
	<?php include('funciones/funciones.php'); ?>
	<script type="text/javascript">
		Reproducir();
		desplegable();
	</script>
	<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
	<!--comunicacion con reloj-->
	<script>
		$(function() {
			var pull = $('#pull');
			menu = $('nav ul');
			menuHeight = menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});
	</script>
	<?php
	if (isset($_GET["bienvenida"])) {
		header("Location: index.php");
	} else if (isset($_GET["clanes"])) {
		header("Location: web/clanes.php");
	} else if (isset($_GET["guerras"])) {
		header("Location: web/guerras.php");
	}
	?>
</head>

<body>
	<div id="contenedor">
		<div class="banner">
			<img src="images/imagenes/" alt="" />
		</div>
		<!--banner-->
		<div class="contenido">
			<div id="left">
				<div class="inner">
					<img src="images/imagenes/toplaterales.png" alt="" />
					<div>
						<img src="images/imagenes/constructor.png" alt="" />
					</div>
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="images/imagenes/toplaterales.png" alt="" />
					<div class=img2>
						<table>
							<tr>
								<td><a href="https://es.bignox.com/"><img src="images/iconos/nox.png" style="width:100px;" alt="" /></td>
								<td> <a href="https://es.bignox.com/">Quieres jugar a clash of clans en tu ordenador descargate NOX player el emulador de android mas ligero</a></td>
							</tr>
						</table>
					</div>
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="images/imagenes/toplaterales.png" alt="" />
					<h>Visitas</h><br>
					<div id="counter">
						<div id="counter">
							<?php
							//---------- Contador de visitas
							$archivo = "visitas.txt"; // creas un txt donde vas a guardar la cantidad de visitas
							$abre = fopen($archivo, "r"); // abris el txt
							$total = fread($abre, filesize($archivo)); // lo lees
							fclose($abre); //cerras la conexion al archivo
							$abre = fopen($archivo, "w"); // lo abris de vuelta
							$total = ($total + 1); // al total de visitas le sumas 1
							$grabar = fwrite($abre, $total); // lo sobreescribis
							fclose($abre); // cerras nuevamente la conexxion al txt
							/*echo $total;*/    /* comentario */
							?>
						</div>
						<div id="sfcfscaryk5jlj4lx3uew7rw3a82kpjhm13" style=" height:60px; margin: 0 auto;"></div>
						<script type="text/javascript" src="https://counter2.freecounter.ovh/private/counter.js?c=fscaryk5jlj4lx3uew7rw3a82kpjhm13&down=async" async></script></br>
					</div>
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
			</div>
			<!--left-->
			<div id="main">
				<div class="centro">
					<img src="images/imagenes/toplaterales.png" alt="" />
					<div class="titulo">
						<!--<img src="images/imagenes/titulo.jpg" alt="" />-->
						<h>Clash of Clans</h></br>
						<h>Guerras online </h>
					</div></br></br>
					<div id="botonmenu">
						<div>
							<form action="index.php" method="get" class="botones">
								<div class="boton"><button name="clanes" value="clanes" type="submit">
										<p5>Clanes</p5>
									</button></div>
								<div class="boton"><button name="guerras" value="guerras" type="submit">
										<p5>Guerras</p5>
									</button></div>
							</form>
						</div>
					</div>
					<div class="cont">
						<p>
							<w style="font-size:17px" ;> </w>
						</p>
						<p>Bienvenidos a guerras online.</p>
						<p>En esta web puedes seguir las <a href="web/guerras.php">Guerras.</a> en directo de todos los clanes que lo tengan disponible, tambien puedes ver los datos de cualquier clan del juego de supercell clash of clans</p>
						<h></h>
					</div>
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
			</div><!-- main-->
			<div id="right">
				<div class="inner">
					<img src="images/imagenes/toplaterales.png" alt="" />
					<div style="width:93%; margin:0 auto; overflow:hidden;">
						<script>
							(function() {
								var cx = '008452305118499538031:ewvkroyreoi';
								var gcse = document.createElement('script');
								gcse.type = 'text/javascript';
								gcse.async = true;
								gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(gcse, s);
							})();
						</script>
						<gcse:search></gcse:search>
					</div>
					<!--<img src="images/imagenes/constructor.png" alt="" style="width:90%;"/>-->
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="images/imagenes/toplaterales.png" alt="" />
					<div class="reloj">
						<h>Horario</h>
						<h>España</h>
						<table border="0" bgcolor="#a0a0a0" cellspacing=0 cellpadding=3 class="clock24st" style="line-height:14px; margin: 0 auto; padding:0; border-radius: 10px; -webkit-border-radius: 10px; ">
							<tr>
								<td bgcolor="black" class="clock24std" style="font-size:17px">
									<span class="clock24s" id="clock24_58764" style="color:gray; -webkit-text-stroke: 1.5px black; text-shadow: 0.1em 0.1em gray; color:white;  line-height:125%;">relojes pagina web</span>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							horaespaña();
						</script>
						<br>
						<h>Horario</h><br>
						<h>USA</h>
						<table border="0" bgcolor="#a0a0a0" cellspacing=0 cellpadding=3 class="clock24st" style="line-height:14px; margin: 0 auto; padding:0;">
							<tr>
								<td bgcolor="black" class="clock24std" style="font-size:17px; ">
									<span class="clock24s" id="clock24_86371" style="color:gray; -webkit-text-stroke: 1.5px black; text-shadow: 0.1em 0.1em gray; color:white;  line-height:125%;">relojes pagina web</span>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							horausa();
						</script>
						<br>
						<h>Horario</h>
						<h>Mexico</h>
						<table border="0" bgcolor="#a0a0a0" cellspacing=0 cellpadding=3 class="clock24st" style="line-height:14px; margin: 0 auto; padding:0;">
							<tr>
								<td bgcolor="black" class="clock24std" style="font-size:17px;">
									<span class="clock24s" id="clock24_90267" style="color:gray; -webkit-text-stroke: 1.5px black; text-shadow: 0.1em 0.1em gray; color:white;  line-height:125%;">relojes pagina web</span>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							horamexico();
						</script>
					</div>
					<!--reloj-->
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<!--inner-->
				<div class="inner">
					<img src="images/imagenes/toplaterales.png" alt="" />
					<!--<a class="twitter-timeline" data-lang="es"  data-width="20" data-height="300" data-dnt="true" href="https://twitter.com/CocPrimeros">Tweets by CocPrimeros</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>		-->
					<!--	<div class="twitter">-->
					<a class="twitter-timeline" data-width="20" data-height="300" data-theme="dark" data-chrome="noheader nofooter noscrollbar noborders transparent" href="https://twitter.com/Micrelio?ref_src=twsrc%5Etfw">Tweets by Micrelio</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					<!--data-border-color="white" data-chrome="noheader nofooter noscrollbar noborders transparent"-->
					<!--	 </div>-->
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="images/imagenes/toplaterales.png" />
					<h>Redes sociales</h>
					<div class="tabla">
						<table>
							<tr>
								<td><a href=https://twitter.com/Micrelio?lang=es target="blank"><img src="images/imagenes/twitter.png" alt="" id="imge" /></a></td>
								<td><a href="" target="blank"><img src="images/imagenes/youtube.png" alt="" id="imge" /></a></td>
							</tr>
							<tr>
								<td><a href="" target="blank"><img src="images/imagenes/instagram.png" alt="" id="imge" /></a></td>
								<td><a href="https://www.facebook.com/micro6" target="blank"><img src="images/imagenes/facebook.png" alt="" id="imge" /></a></td>
								<br>
							</tr>
						</table>
					</div>
					<img src="images/imagenes/bottomlaterales.png" alt="" />
				</div>
			</div>
			<!--rigth-->
		</div>
		<!--contenido-->
	</div>
	<!--contenedor-->
	<div id="pie">
		<div id="diseño">
			<!--<p>Gracias a <a href="https://www.youtube.com/channel/UCAfuTUdmRn0PLtN3uwtIRPA/videos"> kai cami coc </a> por la edicion de videos</p>-->
			<p>Designed by Micro (microa4@gmail.com)</p>
			<p>Copyright ® 2017 Micrelio</p>
		</div>
		<div id="copyright">
		</div>
		<div class="politicas" id="politicas">
			<a href="html/politicaDePrivacidad.html" target=”_blank”>
				<p class="privacidad" id="privacidad"> Política de privacidad</p>
			</a>
			<a href="html/avisoLegal.html" target=”_blank”>
				<p class="privacidad" id="aviso"> Aviso Legal</p>
			</a>
			<a href="html/politicaDeCookies.html" target=”_blank”>
				<p class="privacidad" id="cookies"> Política de Cookies</p>
			</a>
		</div>
	</div>
</body>

</html>