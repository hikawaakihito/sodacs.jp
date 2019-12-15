<!Doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ソダックス - スローンのオフィシャルデベロップメント＆コーディングサイト</title>
	<meta name="description" content="日々上達しながら、人の便益になるソリューションを設計から運用まで念入りに開発できる一人前のエンジニアを目指しております！" />
	<link rel="stylesheet" href="../css/normalize.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
	<script type="text/javascript" src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" ></script>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
	<header>
			<?php include('../parts/top_menu.php'); $menu = new topMenu('プロジェクト詳細', 1, 1); $menu->getMenu();?>
	</header>
	<main>
	<section>
	<?php 
		$page_id = $_GET['project_id'];
		if(!(is_numeric($page_id))){
			header ('Location: ../projects.php');
		}  
		$db_cred_array = parse_ini_file('../../../private/config.ini');
		$server = 'mysql14.onamae.ne.jp';
		$user = $db_cred_array['username'];
		$pass = $db_cred_array['password'];
		$dbname = $db_cred_array['db'];
		$link = mysqli_connect($server, $user, $pass, $dbname) or die("Can't connect");
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		$sql = 'SELECT * FROM project WHERE project.project_id = '.mysqli_real_escape_string($link, $_GET['project_id']);
		$result = mysqli_query($link, $sql);
		$sql2 = 'SELECT MAX(project_id) FROM project';
		$result2 = mysqli_query($link, $sql2);         
		if($result && $result2){
			$row = mysqli_fetch_row($result);
			$row2 = mysqli_fetch_row($result2);
			if($page_id < 1 || $page_id > $row2[0]){
				$page_id = $row2[0];
				header ('Location: project_details.php?project_id='.$page_id);
			}  
			print '<div id="contentWrapper">
				<div id="content">
					<div class="cardWrapper">
						<div class="projectCard">
							<div class="projectInner">
								<div class="projectCardHeader"><h2>'.$row[2].'</h2></div>
								<div class="projectPicArea"><img class="projectPic" src="../'.$row[5].'" alt="画像"/></div>
								<br />
								<h3>このプロジェクトについて</h3>
								<small style="color: #888888;">'.$row[8].'</small>
								<div class="projectInfo"><p>'.$row[4].'</p></div>
								<h3>関連リンク：</h3>
								<div class="projectLink"><p><a class="externalLink1" href="'.$row[6].'">'.$row[6].'</a></p></div>
								<div class="projectLink"><p><a class="externalLink1" href="'.$row[7].'">'.$row[7].'</a></p></div>
								<div class="projectInfo"><p>　プロジェクトにより、ソースコードや関連ファイル等をGITHUBに載せております。ソースは自由に使っても構いませんが、アプリのコンテンツや意匠等の再使用を許可しておりません。</p></div>
								<br />								
								<div class="projectInfo">';
								if($page_id > 1){
									print '<a class="pageNavLeft1" href="./project_details.php?project_id=1">＜＜最古</a><a class="pageNavLeft2" href="./project_details.php?project_id='.($page_id - 1).'">前</a>';
								}
								if($page_id < $row2[0]){
									print '<a class="pageNavRight1" href="project_details.php?project_id='.$row2[0].'">最新＞＞</a><a class="pageNavRight2" href="project_details.php?project_id='.($page_id + 1).'">次</a>';
								}
						 print '</div>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}
		else{
			echo "error while executing mysql: " . mysqli_error($link);
		}
		mysqli_close($link);
	?>
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
