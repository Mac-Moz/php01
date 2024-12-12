<?php
$name = $_POST["name"];
$shop = $_POST["choice"];
$othershop = $_POST["otherchoice"];
$time = date("Y-m-d H:i:s");
$data = $time."/".$name."/".$shop."/".$othershop."\n";
file_put_contents("kadai01_text.txt", $data, FILE_APPEND);
?>

<p>アンケート結果</p>
<?php
$readfile = fopen("kadai01_text.txt","r");

while ($line= fgets($readfile)) {
    echo "$line<br>";
}

fclose($readfile);
?>

<a href="kadai01.php">アンケートに戻る</a>