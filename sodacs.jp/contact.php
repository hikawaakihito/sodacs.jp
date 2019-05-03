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
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
			<div id ="pageName1">お問い合わせ</div>
		</div>
		<nav>
			<div id="menuWrapper">
				<img id="logoS2" src="img/logoS.png" alt="ロゴ画像-小"/>
				<div id ="pageName2">お問い合わせ</div>
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
					<div class="contactCard">
						<div class="contactInner">
							<?php
								if(isset($_POST["flag"])){$flag=$_POST["flag"];}else{$flag=0;}; 

								$captchaError ='';
								if(isset($_POST["g-recaptcha-response"])){
									$captcha = $_POST["g-recaptcha-response"];
									$secretKey = "6LdRC6EUAAAAAE5_TctXE-p7cb-EUKPEPb0y5V2N";
									$resp = @file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}");
									$resp_result = json_decode($resp,true);
									if(intval($resp_result["success"]) !== 1) {
										//認証失敗時の処理をここに書く
										$flag=1;
										$captchaError ='<span class="error">CAPTCHAエラー。お手数ですが、ロボットではないことを確認してからもう一度送信して下さい。</span>';
									}
								}

								if($flag==0){
									print '<h1>お問い合わせフォーム</h1>
									<form action="" method="post">
										<small>(※全項目は必須です。）</small>
										<label for="mName"><strong>姓：</strong></label>
										<input type="text" id="mName" name="myouji" placeholder="名字" maxlength="50"/>
										<label for="nName"><strong>名：</strong></label>
										<input type="text" id="nName" name="namae" placeholder="名前" maxlength="50"/>
										<label for="mNameK"><strong>セイ：</strong></label>
										<input type="text" id="mNameK" name="myoujiKatakana" placeholder="ミョウジ" maxlength="50"/>
										<label for="nNameK"><strong>メイ：</strong></label>
										<input type="text" id="nNameK" name="namaeKatakana" placeholder="ナマエ" maxlength="50"/>
										<label for="email"><strong>メールアドレス：</strong></label>
										<input type="email" id="email" name="emailAddress" placeholder="メールアドレス" maxlength="50"/>
										<label for="subject"><strong>題名：</strong></label>
										<input type="text" id="subject" name="emailSubject" placeholder="メールの題名" maxlength="100"/>
										<label for="message"><strong>お問い合わせ：</strong></label>
										<textarea id="message" name="emailMessage" placeholder="メールの本文…" maxlength="3000"></textarea>
										<input type="hidden" name="flag" value="1" />
										<input type="submit" value="内容確認画面へ" />
									</form>
									<p>※このフォームを使ったお問い合わせはsodacs.jpのメールアドレスに届きます。その後、私のプライベートメールアドレスにも転送されます。できるだけ早く返事しますが、遅れる場合があります。ライブチャットなど他の方法で連絡したい方は、まずはメールでご相談下さい。</p>
									';
								}
								elseif($flag ==1){
									$flagSwitch = 2;
									$myoujiError = '';
									$namaeError = '';
									$myoujiKatakanaError = '';
									$namaeKatakanaError = '';
									$emailAddressError = '';
									$emailSubjectError = '';
									$emailMessageError = '';
									if(empty($_POST["myouji"])){$_POST["myouji"]=''; $myoujiError='<span class="error">※必須：名字を必ず入力して下さい。</span>'; $flagSwitch=1;}
									if(empty($_POST["namae"])){$_POST["namae"]=''; $namaeError='<span class="error">※必須：名前を必ず入力して下さい。</span>'; $flagSwitch=1;}
									if(empty($_POST["myoujiKatakana"]) || !mb_ereg("^[ア-ン゛゜ァ-ォャ-ョー「」、]+$", $_POST["myoujiKatakana"])){$_POST["myoujiKatakana"]=''; $myoujiKatakanaError='<span class="error">※必須：ふりがなを必ず<u>全角カタカナ</u>のみで入力して下さい。</span>'; $flagSwitch=1;}
									if(empty($_POST["namaeKatakana"]) || !mb_ereg("^[ア-ン゛゜ァ-ォャ-ョー「」、]+$", $_POST["namaeKatakana"])){$_POST["namaeKatakana"]=''; $namaeKatakanaError='<span class="error">※必須：ふりがなを必ず<u>全角カタカナ</u>のみで入力して下さい。</span>'; $flagSwitch=1;}
									if(empty($_POST["emailAddress"]) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', $_POST["emailAddress"])){$_POST["emailAddress"]=''; $emailAddressError='<span class="error">※必須：正しいメールアドレスを入力して下さい。</span>'; $flagSwitch=1;}
									if(empty($_POST["emailSubject"])){$_POST["emailSubject"]=''; $emailSubjectError='<span class="error">※必須：お問い合わせの題名を必ず入力して下さい。</span>'; $flagSwitch=1;}
									if(empty($_POST["emailMessage"])){$_POST["emailMessage"]=''; $emailMessageError='<span class="error">※必須：メッセージを必ず書いて下さい。</span>'; $flagSwitch=1;}
									if($flagSwitch == 1){
										print '<h1>お問い合わせフォーム</h1>
										<form action="" method="post">
											<span class="error">正しく入力されていない項目があります。（※全項目は必須です。）</span>
											<label for="mName"><strong>姓：</strong></label>'.$myoujiError.'
											<input type="text" id="mName" name="myouji" value="'.htmlspecialchars($_POST["myouji"], 3).'" maxlength="50"/>
											<label for="nName"><strong>名：</strong></label>'.$namaeError.'
											<input type="text" id="nName" name="namae" value="'.htmlspecialchars($_POST["namae"], 3).'" maxlength="50"/>
											<label for="mNameK"><strong>セイ：</strong></label>'.$myoujiKatakanaError.'
											<input type="text" id="mNameK" name="myoujiKatakana" value="'.htmlspecialchars($_POST["myoujiKatakana"], 3).'" maxlength="50"/>
											<label for="nNameK"><strong>メイ：</strong></label>'.$namaeKatakanaError.'
											<input type="text" id="nNameK" name="namaeKatakana" value="'.htmlspecialchars($_POST["namaeKatakana"], 3).'" maxlength="50" />
											<label for="email"><strong>メールアドレス：</strong></label>'.$emailAddressError.'
											<input type="email" id="email" name="emailAddress" value="'.htmlspecialchars($_POST["emailAddress"], 3).'" maxlength="50"/>
											<label for="subject"><strong>題名：</strong></label>'.$emailSubjectError.'
											<input type="text" id="subject" name="emailSubject" value="'.htmlspecialchars($_POST["emailSubject"], 3).'" maxlength="100"/>
											<label for="message"><strong>お問い合わせ：</strong></label>'.$emailMessageError.'
											<textarea id="message" name="emailMessage" maxlength="3000">'.htmlspecialchars($_POST["emailMessage"], 3).'</textarea>
											<input type="hidden" name="flag" value="'.$flagSwitch.'" />
											<input type="submit" value="内容確認画面へ" />
										</form>
										<p>※このフォームを使ったお問い合わせはsodacs.jpのメールアドレスに届きます。その後、私のプライベートメールアドレスにも転送されます。できるだけ早く返事しますが、遅れる場合があります。ライブチャットなど他の方法で連絡したい方は、まずはメールでご相談下さい。</p>
										';
									}
									if($flagSwitch == 2){
										print'<h1>お問い合わせ内容確認</h1>
										<form action="" method="post">
											'.$captchaError.'
											<p><strong>姓：</strong>　'.htmlspecialchars($_POST["myouji"], 3).'</p>
											<input type="hidden" id="mName" name="myouji" value="'.htmlspecialchars($_POST["myouji"], 3).'" />
											<p><strong>名：</strong>　'.htmlspecialchars($_POST["namae"], 3).'</p>
											<input type="hidden" id="nName" name="namae" value="'.htmlspecialchars($_POST["namae"], 3).'" />
											<p><strong>セイ：</strong>　'.htmlspecialchars($_POST["myoujiKatakana"], 3).'</p>
											<input type="hidden" id="mNameK" name="myoujiKatakana" value="'.htmlspecialchars($_POST["myoujiKatakana"], 3).'" />
											<p><strong>メイ：</strong>　'.htmlspecialchars($_POST["namaeKatakana"], 3).'</p>
											<input type="hidden" id="nNameK" name="namaeKatakana" value="'.htmlspecialchars($_POST["namaeKatakana"]).'" />
											<hr>
											<p><strong>メールアドレス：</strong>　'.htmlspecialchars($_POST["emailAddress"], 3).'</p>
											<input type="hidden" id="email" name="emailAddress" value="'.htmlspecialchars($_POST["emailAddress"], 3).'"/>
											<hr>
											<p><strong>題名：</strong>　</p>
											<p>'.htmlspecialchars($_POST["emailSubject"], 3).'</p>
											<input type="hidden" id="subject" name="emailSubject" value="'.htmlspecialchars($_POST["emailSubject"], 3).'"/>
											<p><strong>お問い合わせ：</strong></p>
											<p>'.htmlspecialchars($_POST["emailMessage"], 3).'</p>
											<input type="hidden" id="message" name="emailMessage" value="'.htmlspecialchars($_POST["emailMessage"], 3).'"></textarea>
											<br />
											<div class="g-recaptcha" data-sitekey="6LdRC6EUAAAAAOzr8_LWDA4Tw50u98VDhIfYUpnh"></div>
											<input type="hidden" name="flag" value="'.$flagSwitch.'" />
											<input type="submit" value="送信する" />
										</form>
										<p>※このフォームを使ったお問い合わせはsodacs.jpのメールアドレスに届きます。その後、私のプライベートメールアドレスにも転送されます。できるだけ早く返事しますが、遅れる場合があります。ライブチャットなど他の方法で連絡したい方は、まずはメールでご相談下さい。</p>
										';
									}
								}
								elseif($flag == 2){
									mb_language("Japanese");
									mb_internal_encoding("UTF-8");
									$to = 'info@sodacs.jp';
									$from = "From: ".htmlspecialchars($_POST["emailAddress"], 3)."\r\n"."Return-Path: ".htmlspecialchars($_POST["emailAddress"], 3);
									$title = htmlspecialchars($_POST["emailSubject"], 3);
									$content = "送信者："+htmlspecialchars($_POST["myouji"], 3)+"　"+htmlspecialchars($_POST["namae"], 3)+"　（"+htmlspecialchars($_POST["myoujiKatakana"], 3)+"　"+htmlspecialchars($_POST["namaeKatakana"], 3)+"）\r\n\r\n"+htmlspecialchars($_POST["emailMessage"], 3);
									$sent = mb_send_mail($to, $title, $content, $from);
									if($sent){
										print'<h1>お問い合わせが送信されました</h1>
										<div id="sent" style="margin-top: 30%; margin-bottom: 30%;">
										<h3>ありがとうございます！お問い合わせが送信されましたので、すぐに受信完了の通知があなたのメールアドレスに届くはずです。この通知は自動的に送られ、私自身からの返事ではありません。もし数時間がたってもこの通知が届かない場合は、お手数ですが、もう一度同じお問い合わせを送信して下さい。</h3>
										</div>
										<p>※このフォームを使ったお問い合わせはsodacs.jpのメールアドレスに届きます。その後、私の個人用のメールアドレスにも転送されます。できるだけ早く返事しますが、遅れる場合があります。ライブチャットなど他の方法で連絡したい方は、まずはメールでご相談下さい。</p>
										';
									}
									else{
										print'<h1>お問い合わせの送信が失敗しました。</h1>
										<div id="sent" style="margin-top: 30%; margin-bottom: 30%;">
										<h3>申し訳ありません。送信できなかったようです。お手数ですが、ページを更新させたり、1ページ戻したりして、再送信してみて下さい。</h3>
										</div>
										<p>※このフォームを使ったお問い合わせはsodacs.jpのメールアドレスに届きます。その後、私の個人用のメールアドレスにも転送されます。できるだけ早く返事しますが、遅れる場合があります。ライブチャットなど他の方法で連絡したい方は、まずはメールでご相談下さい。</p>
										';
									}
								}
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