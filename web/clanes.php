<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>*Guerras online* | Clash of clans</title>
	<link rel="stylesheet" href="../style/apistyle.css" media="screen" />
	<link rel="icon" href="images/imagenes/.png" />
	<meta name="author" content="micro" />
	<meta name="copyright" content="micro" />
	<!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">-->
	<meta name="twitter:site" content="@Micrelio">
	<link rel="alternate" hreflang="es" href="https://micrelio.esy.es/" />
	<meta name="Title" content="Guerras oline Clash of clans" />
	<meta name="Description" content="clash of clans,  aqui puedes ver las guerras en directo del clan que quieras del juego clash of clans de supercell." />
	<meta name="Keywords" content="clash of clans,  guerras, supercell, online." />
	<meta http-equiv="content-language" content="es-ES" />
	<meta name="Distribution" content="Global" />
	<meta name="googlebot" content="index, follow">
	<meta name="robots" content="index,follow">
	<meta property="og:url" content="https://micrelio.esy.es/">
	<meta property="og:site_name" content="Guerras online | Clash of Clans">
	<?php include('../funciones/funciones.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="../funciones/funciones.js"></script>
	<?php // include('funciones/funciones.php'); 
	?>
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
	<title><?php // echo $dato["name"]; 
			?></title>
</head>

<body>
	<div id="contenedor">
		<div class="banner">
			<img src="../images/imagenes/" alt="" />
			<!--<nav>
            <ul>
                <li><a href="../index.php" >Bienvenida</a></li>
		        <li><a href="coliders.html" >Coliders</a></li>
		        <li><a href="veteranos.html" >Veteranos</a></li>
				<li><a href="videos.html" >Videos</a></li>
				<li><a href="clanes.php" class="active">Clanes</a></li>
                <li><a href="guerras.php" >Guerras</a></li>
                <li><a href="aldeas.html" > Aldeas<center >	</a></li>
            			   <br clear="all" />
           </ul>
           <a id="pull" href="#">Menu</a>
        </nav>-->
		</div>
		<!--banner-->
		<!--<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> -->
		<?php //$dato=$dato2
		?>
		<div id="main2">
			<div class="centro2" style="background-color:#e3cfb5;  ">
				<img src="../images/imagenes/topcentral.png" alt="" />
				<div id="actualidad">
					<div>
						<form action="clanes.php" method="get" class="botones">
							<div class="boton"><button name="guerras" value="guerras" type="submit">
									<h1>Guerras</h1>
								</button></div>
							<div class="boton"><button class="bot" name="bienvenida" value="bienvenida" type="submit">
									<h1>Bienvenida</h1>
								</button></div>
							<!--<div class="boton"><button name="clanes" value="clanes"   type="submit"><h1>Clanes</h1></button></div>-->
						</form>
						<?php
						if (isset($_GET["bienvenida"])) {
							header("Location: ../index.php");
						} else if (isset($_GET["clanes"])) {
							header("Location: clanes.php");
						} else if (isset($_GET["guerras"])) {
							header("Location: guerras.php");
						}
						?>
					</div>
					<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
					<?php
					if (!isset($error)) {
						echo "<div id='guerrae'>
					<div class='top'>";
						$datot = (top());
						$clanes = $datot['items'];
						echo "<table >
						<th colspan= '2'>TOP 10</th>";
						foreach ($clanes as $clant => $tope['array']) {
							foreach ($tope as $topet => $top) {
								echo "<tr>
									<td class='tdn'>" . $top['name'] . " </td>
									<td class='tdt'>" . $top['tag'] . "</td>
								</tr>";
							}
						}
						echo "</table>		
					</div>
				</div>";
					}
					?>
					<div id="guerrae">
						<form action="clanes.php" method="get">
							<label for="clan">
								<!-- <h1>Escribe el codigo del clan</h1></br> -->
							</label>
							<input class="input" type="text" name="clan" value="#" maxlength="20" size="12" />
							<br /></br>
							<input class="enviar" type="submit" value="buscar" />
							<br />
						</form>
						<?php
						if (!isset($_GET["clan"])) {
							$dato = (clanes('#2Q2QVJC9'));
							echo "<p>Escribe el codigo del clan</p>";
							echo "<h1 style='text-decoration:none;
						animation-name: parpadeo;
						 animation-duration: 1s;
						animation-timing-function: linear;
						animation-iteration-count: infinite;
						-webkit-animation-name:parpadeo;
						-webkit-animation-duration: 1s;
						-webkit-animation-timing-function: linear;
						-webkit-animation-iteration-count: infinite;'>" . $dato["name"] . "</h1>";
						} else if (isset($_GET["clan"])) {
							$clan = $_GET["clan"];
							$dato = (clanes($clan)); // guerra_online($clan);
						} else {
							//echo "<p>Escribe el codigo del clan</p>";
						}
						?>
					</div>
					<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
					<div id="clanes">
						<table class="clantable">
							<tr>
								<td rowspan="11">
									<!--Nivel:--><?php $copas = "copas"; //if (isset($dato["clanLevel"])){ echo $dato["clanLevel"];} 
													?><img src="<?php if (isset($dato["badgeUrls"]["medium"])) {
																	echo $dato["badgeUrls"]["medium"];
																} ?>" alt="<?php if (isset($dato["name"])) {
																				echo $dato["name"];
																			}  ?>" /></td>
								<td style="font-family: supercell;"><?php if (isset($dato["name"])) {
																		echo  $dato["name"];
																	} ?></td>
								<td><?php if (isset($dato["tag"])) {
										echo $dato["tag"];
									} ?></td>
								<td rowspan="11"><?php if (isset($dato["description"])) {
														echo $dato["description"];
													} ?></td>
							</tr>
							<tr class="copas">
								<td>Puntos totales</td>
								<td><?php $copas = "copas";
									if (isset($dato["clanPoints"])) {
										echo $dato["clanPoints"];
										echo " " . '<img src="../images/iconos/' . $copas . '.png" ; />';
									} ?></td>
							</tr>
							<tr class="copas">
								<td>Guerras ganadas</td>
								<td><?php if (isset($dato["warWins"])) {
										echo $dato["warWins"];
									} ?></td>
							</tr>
							<tr class="copas">
								<td>Racha de victorias</td>
								<td><?php if (isset($dato["warWinStreak"])) {
										echo $dato["warWinStreak"];
									} ?></td>
							</tr>
							<tr class="copas">
								<td>Guerras empatadas</td>
								<td><?php if (isset($dato["warTies"])) {
										echo $dato["warTies"];
									} ?></td>
							</tr>
							<tr class="copas">
								<td>Guerras perdidas</td>
								<td><?php if (isset($dato["warLosses"])) {
										echo $dato["warLosses"];
									} ?></td>
							</tr>
							<tr class="copas">
								<td>Miembros</td>
								<td><?php if (isset($dato["members"])) {
										echo $dato["members"];
									} ?>/50</td>
							</tr>
							<tr class="copas">
								<td>Tipo de clan</td>
								<td><?php if (isset($dato["type"])) {
										echo $dato["type"];
									} ?></td>
							</tr>
							<tr class="copas">
								<td>Trofeos requeridos</td>
								<td><?php if (isset($dato["requiredTrophies"])) {
										echo $dato["requiredTrophies"];
										echo " " . '<img src="../images/iconos/' . $copas . '.png" ; />';
									} ?>
								</td>
							</tr>
							<tr class="copas">
								<td>Frecuencia de guerra</td>
								<td><?php if (isset($dato["warFrequency"])) {
										echo $dato["warFrequency"];
									}	 ?></td>
							</tr>
							<tr class="copas">
								<td>Ubicacion del clan</td>
								<td><?php if (isset($dato["location"]["name"])) {
										echo $dato["location"]["name"];
									} ?></td>
							</tr>
						</table>
					</div>
					<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
					<div id="clanes">
						<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
						<div class="clan">
							<table border="1" class="miembros">
								<?php if (isset($dato["memberList"])) {
									$mienbros = $dato["memberList"];
								}
								if (isset($mienbros)) {
									foreach ($mienbros as $mienbro) {
								?>
										<tr>
											<td><?php if (isset($mienbro["clanRank"])) {
													echo $mienbro["clanRank"];
												} ?></td>
											<td><img src="<?php if (isset($mienbro["league"]["iconUrls"]["tiny"])) {
																echo $mienbro["league"]["iconUrls"]["tiny"];
															} ?>" alt="<?php if (isset($mienbro["league"]["name"])) {
																			echo $mienbro["league"]["name"];
																		}  ?>" /></td>
											<td class="exp"><?php if (isset($mienbro["expLevel"])) {
																echo $mienbro["expLevel"];
															} ?></td>
											<td class="nombre"><?php if (isset($mienbro["name"]) && ($mienbro["role"])) {
																	echo "<b>", $mienbro["name"], "</b><br/>", $mienbro["role"];
																}
																?></td>
											<td class='dona'>Donado:<br /><?php if (isset($mienbro["donations"])) {
																				echo "<fieldset >" . $mienbro["donations"] . "</fieldset>";
																			} ?></td>
											<td class='dona'>Recibido:<br /><?php if (isset($mienbro["donationsReceived"])) {
																				echo "<fieldset >" . $mienbro["donationsReceived"] . "</fieldset>";
																			} ?></td>
											<td class='cop'><?php if (isset($mienbro["trophies"])) {
																echo "<fieldset >" . $mienbro["trophies"] . " " . '<img src="../images/iconos/' . $copas . '.png" ; />' . "</fieldset>";
															} ?></td>
										</tr>
								<?php
									}
								}
								?>
							</table>
						</div>
						<!--clan-->
					</div>
					<!--clanes-->
					<?php
					//echo '<pre>';
					//print_r($dato);
					//echo '</pre>';
					?>
				</div>
				<!--actualidad-->
				<img src="../images/imagenes//bottomcentral.png" alt="" />
			</div>
			<!--centro2-->
		</div>
		<!--main2-->
		<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
	</div>
	<!--contenedor-->
	<div id="pie">
		<div id="diseño">
			<p>Gracias a <a href="https://www.youtube.com/channel/UCAfuTUdmRn0PLtN3uwtIRPA/videos"> kai cami coc </a> por la edicion de videos</p>
			<p>Designed by Micro (microa4@gmail.com)</p>
			<p>Copyright ® 2017 Primeros coc</p>
		</div>
		<div id="copyright">
		</div>
	</div>
</body>

</html>