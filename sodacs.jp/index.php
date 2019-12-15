<!Doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ソダックス - スローンのオフィシャルデベロップメント＆コーディングサイト</title>
	<meta name="description" content="日々上達しながら、人の便益になるソリューションを設計から運用まで念入りに開発できる一人前のエンジニアを目指しております！" />
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/home.css"/>
	<script type="text/javascript" src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" ></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
			<?php include('./parts/top_menu.php'); $menu = new topMenu('', 0, 0); $menu->getMenu();?>
	</header>
	<main>
	<section>
		<div id="contentWrapper">
			<div id="content">
				<div id="fadeIn">
					<img id="logoL" src="img/logoL.png" alt="ロゴ画像-大"/>
				</div>
				<div class="revealContainer">
					<span class="revealText">Sodacsへようこそ</span>
					<div class="revealBlock"></div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div id="footer">
			<a href="https://github.com/hikawaakihito"><img id="githubLink" src="img/githubLogo.png"></a>
			<small id="copyright">©Sodacs</small>
		</div>
	</footer>	
	<script>
		function resize() {
			var wih = window.innerHeight;
			var ch = document.getElementById("contentWrapper").scrollHeight;
			if ((ch + 102) < wih) {
				document.getElementById("contentWrapper").style.height = wih - 102 + "px";
			}
			else {
				document.getElementById("contentWrapper").style.height = "100%";
			}
		}
		resize();
		window.onresize = function () {
			resize();
		}
	</script>
</body>
</html>

