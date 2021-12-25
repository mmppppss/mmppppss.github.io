<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Metaetiquetas -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta property="og:title" content="mmppppss | Blog" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="/img/cookie.png" />
		<meta property="og:description" content="Programacion y desarrollo de Apps y paginas web" />
		<meta property="og:site_name" content="mmppppss" />
		<meta property="og:locale" content="es_ES">
		<meta property="fb:pages" content="" />
		<meta name="msapplication-TileColor" content="#FF1B1B"/>
		<meta name="msapplication-TileImage" content="/img/cookie.png"/>
		<meta name="theme-color" content="#000000"/>
		<!-- links -->
		<link rel="icon" href="/img/cookie.png">
		<link rel="stylesheet" href="/css/style.css" media="screen">

		<title>mmppppss</title>
	</head>
	<body>
		<header>
			<nav>
				<table class="logo" border="0">
					<tr>
						<td class="item"><img class="icon" src="/img/icon.png"></td>
						<td class="item2"><b>mmppppss</b></td>
						<td class="item3">
						<div class="drop">
							<ul>
								<li><img class="menu" src="/img/menu.png">
									<ul>
										<li><a href="#contacto">Contacto</a></li>
										<li><a href="#">Indice</a></li>
									</ul></li></ul >
							<div>
						</td>
					</tr>
				</table>
			</nav>
		</header>
		<br>
		<main>
			<section>
				<article>
					<form method="post" action="?">
						Usuario <input type="text" name="user"><br>
						Contraseña <input type="password" name="pass"><br>
						<input type="submit" name="comprobar" value="Iniciar"">
					</form>
					<?php
					echo $_SERVER["REMOTE_ADDR"];
						if (isset($_POST["comprobar"])){
							if ($_POST["user"]=="pedro"){
								if ($_POST["pass"]=="admin"){
									echo "<a href='hiperultraSecretContenido.php'>Entrar</a>";
								}
								else{echo "Contraseña Incorrecta";}
							}
							else{echo "Usuario No Registrado";}
						}
					?>
				</article>
			</section>
			<aside id="contacto">
				<hr>
				<h1>hola mundo</h2>
				<p>twitter: mmppppss</p>
				<p>facebook: Pedro Pozo</p>
				<p>github: mmppppss</p>
			</aside>
		</main>
		<footer>
			<br>
			Developed by: mmppppss
			<br>
			&copy2021 mmppppss
		</footer>
	</body>
</html>
