<?php 
class topMenu{
    private $pageName = '';
    private $pageDepth = 0;
    private $logo = 0;
    private $dir = '';
    private $logoStyle = 'style="display: none;"';
    
    public function __construct(string $pageName, int $pageDepth, int $logo){
        $this->pageName = $pageName;
        $this->pageDepth = $pageDepth;
        $this->logo = $logo;
        
        for($i = 0;$i < $pageDepth;$i++){
            $this->dir .= '../';
        }
        
        if($this->logo == 1){
            $this->logoStyle = 'style="display: block;"';
        }
    }
    
    public function getMenu(){     
        print '<div id="menuIconWrapper">
                <a class="trigger" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                ';
            if($this->logo == 1){
                print '<img id="logoS1" src="'.$this->dir.'img/logoS.png" alt="ロゴ画像-小"/>
                    <div id ="pageName1">'.$this->pageName.'</div>';
            }
        print '</div>
            <nav>
                <div id="menuWrapper">';
                if($this->logo == 1){
                    print '<img id="logoS2" src="'.$this->dir.'img/logoS.png" alt="ロゴ画像-小"/>
                        <div id ="pageName2">'.$this->pageName.'</div>';
                }
	            print '<ul>
	               	    <li><a href="'.$this->dir.'index.php">トップへ戻る</a></li>	
	               	    <li class="dropdownMenu">
                			<a href="'.$this->dir.'projects.php" class="dropdownButton">プロジェクト</a>	
                			<div class="dropdownContent">';
                                $db_cred_array = parse_ini_file($this->dir.'../../private/config.ini');
                                $server = 'mysql14.onamae.ne.jp';
                                $user = $db_cred_array['username'];
                                $pass = $db_cred_array['password'];
                                $dbname = $db_cred_array['db'];
                                $link = mysqli_connect($server, $user, $pass, $dbname) or die("Can't connect");
                                if (mysqli_connect_errno()) {
                                    printf("Connect failed: %s\n", mysqli_connect_error());
                                    exit();
                                }
                                $sql = "SELECT project_id, project_name, date FROM project ORDER BY project_id DESC LIMIT 3";
                                $result = mysqli_query($link, $sql);                   
                                if($result){
                                    while($row = mysqli_fetch_row($result)){
                                	    print'<a href="'.$this->dir.'projects/project_details.php?project_id='.$row[0].'">→　'.$row[1].' <small>('.$row[2].')</small></a>'; 
                                    }
                                }
                                else{
                                    echo "error while executing mysql: " . mysqli_error($link);
                                }
                                mysqli_close($link);
                                print '<a href="'.$this->dir.'archive.php">→　アーカイブ</a>
                			</div>
                		</li>
                		<li><a href="'.$this->dir.'about.php">Sodacsとは</a></li>	
                		<li><a href="'.$this->dir.'contact.php">お問い合わせ</a></li>
                	</ul>
                </div>
            </nav>';
    }
}
?>