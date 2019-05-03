<!Doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ソダックス-新たなバリューが生まれるソリューションを開発します。</title>
	<meta name="description" content="人の便益になるソリューションを開発し、コミュニケーションを取りながら設計から実施まで念入りに良いアプリケーションを仕上げることが目標です。" />
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" ></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
		<div id="menuIconWrapper">
			<a class="trigger" href="#">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<img id="logoS1" src="img/logoS.png" alt="ロゴ画像-小"/>
			<div id ="pageName1">ポートフォリオ</div>
		</div>
		<nav>
			<div id="menuWrapper">
				<img id="logoS2" src="img/logoS.png" alt="ロゴ画像-小"/>
				<div id ="pageName2">ポートフォリオ</div>
				<ul>
					<li><a href="index.php">トップへ戻る</a></li>	
					<li class="dropdownMenu">
						<a href="portfolio.php" class="dropdownButton">ポートフォリオ</a>	
						<div class="dropdownContent">	
							<a href="projects/sodacs.php"><?php print "→　ソダックス"; ?></a>
							<a href="portfolio.php"><?php print "→　未完成"; ?></a>
							<a href="portfolio.php"><?php print "→　未完成"; ?></a>
							<a href="archive.php"><?php print "→　アーカイブ"; ?></a>
						</div>
					</li>
					<li><a href="about.php">Sodacsとは</a></li>	
					<li><a href="contact.php">お問い合わせ</a></li>
				</ul>
			</div>
		</nav>	
	</header>
	<main>
	<section>
		<div id="contentWrapper">
			<div id="content">
				<div class="cardWrapper">
					<div class="portfolioCard">
						<div class="portfolioInner">
							<div class="portfolioCardHeader"><h2>ソダックス 1.01</h2></div>
							<div class="portfolioPicArea"><img class="portfolioPic" src="img/project1.png" alt="画像"/></div>
							<h3>このプロジェクトについて</h3>
							<div class="portfolioInfo"><p>　初プロジェクトとしてレスポンシブデザインに心がけました。私自身のポートフォリオサイトだからこそ、自分らしくシンプルに、またできるだけオリジナルに出来上がるように頑張りました。HTML、CSS、PHP、またはJAVASCRIPTを使い、ゼロから計画し、一行一行コーディングしました。非常におもしろい経験でした。</p></div>
							<div class="portfolioButtonContainer">
								<a href="projects/sodacs.php"><div class="portfolioButton"><div class="center" >プロジェクト詳細</div></div></a>
							</div>
						</div>
					</div>
					<div class="portfolioCard">
						<div class="portfolioInner">
							<div class="portfolioCardHeader"><h2>未完成</h2></div>
							<div class="portfolioPicArea"><img class="portfolioPic" src="img/project2.png" alt="画像"/></div>
							<h3>このプロジェクトについて</h3>
							<div class="portfolioInfo"><p>。。。</p></div>
							<div class="portfolioButtonContainer">
								<a href=""><div class="portfolioButton"><div class="center" >プロジェクト詳細</div></div></a>
							</div>
						</div>
					</div>
					<div class="portfolioCard">
						<div class="portfolioInner">
							<div class="portfolioCardHeader"><h2>未完成</h2></div>
							<div class="portfolioPicArea"><img class="portfolioPic" src="img/project2.png" alt="画像"/></div>
							<h3>このプロジェクトについて</h3>
							<div class="portfolioInfo"><p>。。。</p></div>
							<div class="portfolioButtonContainer">
								<a href=""><div class="portfolioButton"><div class="center" >プロジェクト詳細</div></div></a>
							</div>
						</div>
					</div>
					<div class="portfolioCard">
						<div class="portfolioInner">
							<div class="portfolioCardHeaderArchive"><h2>アーカイブ</h2></div>
							<div class="portfolioPicArea">
								<div class="center"><img src="img/archive.png" alt="画像"/></div>
							</div>
							<div class="portfolioInfoArchive"><p>　プロジェクトアーカイブには、公開プロジェクトがすべて載っています。ポートフォリオの陳列にないプロジェクトやすべてのプロジェクトのリスト表示等を見るにはこちらをご覧下さい。</p></div>
							<div class="portfolioButtonContainer">
								<a href="archive.php"><div class="portfolioButton"><div class="center" >プロジェクト詳細</div></div></a>
							</div>
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