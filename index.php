
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta http-equiv="refresh" content="15;URL=index.php">
<title>Coins</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js">
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
</head>

<body>
<?php
$url = "https://agile-cliffs-23967.herokuapp.com/ok";
$cekilen_veri = file_get_contents($url);
$a=explode(",",$cekilen_veri);
$count=count($a);
unset( $a[$count-1]);
?>
<table border="1">
<thead>
	<th>Coin</th>
	<th>Pings</th>
	<th>Net Vol BTC</th>
	<th>Net Vol %</th>
	<th>Recent Total Vol BTC</th>
	<th>Recent Vol %</th>
	<th>Recent Net Vol</th>
	<th>Datetime</th>
</thead>
<tbody>
<?php
for($i=0; $i<$count; $i++){
	
	$b=explode("|",$a[$i]);
	if ($b[5]>"0" AND $b[5]<"1"){
		$renk="#00bacb";
	}elseif ($b[5]>="1" AND $b[5]<"2"){
		$renk="#05cb00";
	}elseif ($b[5]>="2"){
		$renk="#ff0000";
?>
<script type="text/javascript">
window.onload = notifyMe();
function notifyMe() {
        if (!Notification) {
            alert('Lütfen Chrome, Firefox, Opera, Internet Explorer veya Spartan\'ın güncel bir versiyonunu kullanınız...');
            return;
        }
        if (Notification.permission !== "granted")
            Notification.requestPermission();
        var notification = new Notification('<?php
			$sonuc=explode('"',$b[0]);
			$scount=count($sonuc);
			if($scount==4){
				echo $sonuc[3];
			}else{
				echo $sonuc[1];
			}
		?>', {
            icon: 'http://www.karayeltasarim.com/Resim/Upload/miniworld635620976047761956.png',
            body: "Recent Vol <?php echo $b[5];?>%",
        });
        notification.onclick = function () {
            window.open("https://ayaz-coins.herokuapp.com/index.php");
        }
    }
</script>
<?php
	}
	
?>
	<tr style="background-color:<?php echo $renk;?>">
		<td>
		<?php
			$sonuc=explode('"',$b[0]);
			$scount=count($sonuc);
			if($scount==4){
				echo $sonuc[3];
			}else{
				echo $sonuc[1];
			}
		?>
		</td>
		<td><?php echo $b[1];?></td>
		<td><?php echo $b[2];?></td>
		<td><?php echo $b[3];?></td>
		<td><?php echo $b[4];?></td>
		<td><?php echo $b[5];?></td>
		<td><?php echo $b[6];?></td>
		<td><?php echo substr($b[7],0,17);?></td>
	</tr>
<?php
}
?>

</body>
</html>

