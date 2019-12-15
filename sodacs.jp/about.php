<!Doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ソダックス - スローンのオフィシャルデベロップメント＆コーディングサイト</title>
	<meta name="description" content="日々上達しながら、人の便益になるソリューションを設計から運用まで念入りに開発できる一人前のエンジニアを目指しております！" />
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" ></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
			<?php include('./parts/top_menu.php'); $menu = new topMenu('Sodacsとは', 0, 1); $menu->getMenu();?>
	</header>
	<main>
	<section>
		<div id="contentWrapper">
			<div id="content">
				<div class="cardWrapper">
					<div class="contactCard">
						<div class="contactInner">
							<h1>Sodacsとは</h1>
							<p><strong>ソダックス</strong>【Sodacs】〈名〉「スローンのオフィシャルデベロップメント＆コーディングサイト」の省略です。</p>
							<p><strong>《私の目標》</strong>日々上達しながら、人の便益になるソリューションを設計から運用まで念入りに開発できる一人前のエンジニアを目指しております！</p>
							<p><strong>《このサイトについて》</strong>エンジニアとしての自己PRサイトです。オリジナルデザインに心がけましたが、ウエブは日進月歩ですので、またいつか変貌を遂げる可能性のあるこのサイトは永遠に開発中でしょう。</p>							
							<hr />
							<h1>自己紹介</h1><p>　スローンシャーンと申します。現在、エンジニアを目指しております。このサイトでポートフォリオを始め、私の開発活動や他の情報等をご紹介致します。ぜひ、ご覧下さい。</p>
							<!-- <p><img id="profilePic" src="img/profilePic.png" /></p> -->
							<p><strong>資格：</strong>基本情報技術者試験、漢検三級</p>							
							<p><strong>趣味：</strong>筋トレ、ゲーム、勉強</p>
							<p><strong>好物：</strong>ラーメン、肉、野菜、コーヒー</p>
							<p><strong>生年月日：</strong>1986年7月22日</p>
						</div>
					</div>
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
