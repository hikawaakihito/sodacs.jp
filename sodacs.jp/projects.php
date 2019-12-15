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
			<?php include('./parts/top_menu.php'); $menu = new topMenu('プロジェクト', 0, 1); $menu->getMenu();?>
	</header>
	<main>
	<section>
	<?php
		print'<div id="contentWrapper">
			<div id="content">
				<div class="cardWrapper">';
		$db_cred_array = parse_ini_file('../../private/config.ini');
		$server = 'mysql14.onamae.ne.jp';
		$user = $db_cred_array['username'];
		$pass = $db_cred_array['password'];
		$dbname = $db_cred_array['db'];
		$link = mysqli_connect($server, $user, $pass, $dbname) or die("Can't connect");
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		$sql = "SELECT * FROM project ORDER BY project_id DESC LIMIT 3";
		$result = mysqli_query($link, $sql);                   
		if($result){
			while($row = mysqli_fetch_row($result)){
				print'<div class="portfolioCard">
				<div class="portfolioInner">
					<div class="portfolioCardHeader"><h2>'.$row[2].'</h2></div>
					<div class="portfolioPicArea"><img class="portfolioPic" src="'.$row[5].'" alt="画像"/></div>
					<h3>このプロジェクトについて</h3>
					<small style="color: #a3a3a3;">'.$row[8].'</small>
					<div class="portfolioInfo"><p>'.$row[4].'</p></div>
					<div class="portfolioButtonContainer">
						<a href="projects/project_details.php?project_id='.$row[0].'"><div class="portfolioButton"><div class="center" >プロジェクト詳細</div></div></a>
					</div>
				</div>
			</div>';
			}
		}
		else{
			echo "error while executing mysql: " . mysqli_error($link);
		}
		mysqli_close($link);
					print'<div class="portfolioCard">
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
		</div>';
	?>
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