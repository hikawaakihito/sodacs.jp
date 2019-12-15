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
			<?php include('./parts/top_menu.php'); $menu = new topMenu('アーカイブ', 0, 1); $menu->getMenu();?>
	</header>
	<main>
	<section>
		<div id="contentWrapper">
			<div id="content">
				<div class="cardWrapper">
					<div class="projectCard">
						<div class="projectInner">
							<div class="projectCardHeaderArchive"><h2>プロジェクトアーカイブ</h2></div>
							<div class="projectPicArea"><img class="archivePic" src="img/archive.png" alt="画像"/></div>
							<br />
							<div class="archiveInfo"><p>　下記のリストに各プロジェクトの詳細ページへ、またはソースコードや関連ファイル等のダウンロードページへのリンクが載っています。</p><p>　ソースは自由に使っても構いませんが、アプリのコンテンツや意匠等の再使用を許可しておりません。</p></div>
							<?php
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
								$sql = "SELECT * FROM project ORDER BY project_id DESC";
								$result = mysqli_query($link, $sql);                   
								if($result){
									while($row = mysqli_fetch_row($result)){
										print'<div class="archiveInfo">
											<h2>'.$row[2].'</h2>
											<small style="color: #888888;">'.$row[8].'</small>
											<p>プロジェクト詳細：</p>
											<p><a class="internalLink1" href="projects/project_details.php?project_id='.$row[0].'">www.sodacs.jp/projects/project_details.php?project_id='.$row[0].'</a></p>
											<p>関連リンク：</p>
											<p><a class="externalLink1" href="'.$row[6].'">'.$row[6].'</a></p>
											<p><a class="externalLink1" href="'.$row[7].'">'.$row[7].'</a></p>
											<br />
										</div>';
									}
								}
								else{
									echo "error while executing mysql: " . mysqli_error($link);
								}
								mysqli_close($link);
							?>
							



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