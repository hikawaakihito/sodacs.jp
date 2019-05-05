<!Doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ソダックス-新たなバリューが生まれるソリューションを開発します。</title>
	<meta name="description" content="人の便益になるソリューションを開発し、コミュニケーションを取りながら設計から実施まで念入りに良いアプリケーションを仕上げることが目標です。" />
	<link rel="stylesheet" href="../css/normalize.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
	<script type="text/javascript" src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" ></script>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
	<header>
		<div id="menuIconWrapper">
			<a class="trigger" href="#">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<img id="logoS1" src="../img/logoS.png" alt="ロゴ画像-小"/>
			<div id ="pageName1">プロジェクト詳細</div>
		</div>
		<nav>
			<div id="menuWrapper">
				<img id="logoS2" src="../img/logoS.png" alt="ロゴ画像-小"/>
				<div id ="pageName2">プロジェクト詳細</div>
				<ul>
					<li><a href="../index.php">トップへ戻る</a></li>	
					<li class="dropdownMenu">
						<a href="../portfolio.php" class="dropdownButton">ポートフォリオ</a>	
						<div class="dropdownContent">	
							<a href="sodacs.php"><?php print "→　ソダックス"; ?></a>
							<a href="../portfolio.php"><?php print "→　未完成"; ?></a>
							<a href="../portfolio.php"><?php print "→　未完成"; ?></a>
							<a href="../archive.php"><?php print "→　アーカイブ"; ?></a>
						</div>
					</li>
					<li><a href="../about.php">Sodacsとは</a></li>	
					<li><a href="../contact.php">お問い合わせ</a></li>
				</ul>
			</div>
		</nav>	
	</header>
	<main>
	<section>
		<div id="contentWrapper">
			<div id="content">
				<div class="cardWrapper">
					<div class="projectCard">
						<div class="projectInner">
							<div class="projectCardHeader"><h2>ソダックス 1.01</h2></div>
							<div class="projectPicArea"><img class="projectPic" src="../img/project1.png" alt="画像"/></div>
							<br />
							<h3>このプロジェクトについて</h3>
							<div class="projectInfo"><p>　初プロジェクトとしてレスポンシブデザインに心がけました。私自身のポートフォリオサイトだからこそ、自分らしくシンプルに、またできるだけオリジナルに出来上がるように頑張りました。HTML、CSS、PHP、またはJAVASCRIPTを使い、ゼロから計画し、一行一行コーディングしました。非常におもしろい経験でした。</p></div>
							<h3>このプロジェクトを試す：</h3>
							<br />
							<div class="projectLink"><p><a class="internalLink1" href="../index.php">www.sodacs.jp</a></p></div>
							<br />
							<h3>ソースコード・関連ファイル</h3>
							<div class="projectInfo"><p>　ソースコードやモックアップ等をGITHUBに載せております。自由にダウンロードできます。※参照のために載せております。このサイトの内容やロゴ等の再使用を許可しません。</p></div>
							<div class="projectLink"><p><a class="externalLink1" href="https://github.com/hikawaakihito/sodacs.jp">https://github.com/hikawaakihito/sodacs.jp</a></p></div>
							<br />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div id="footer">
			<a href="https://github.com/hikawaakihito"><img id="githubLink" src="../img/githubLogo.png"></a>
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