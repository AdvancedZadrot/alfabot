<?PHP
//�������

function http($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_URL, $url);
$status = curl_exec($curl);
curl_close($curl);
$status = json_decode($status, true);
return $status;
}
function word($word){
$f = file_get_contents("base.txt");
$f = explode("/",$f);
for($i=0;$i <= count($f);$i++){
if($f[$i] == $word){
$t = $f[$i+1];}}
return iconv('cp1251','UTF-8', "$t");
}


//���������� ���������

$get = http("https://api.telegram.org/bot484226037:AAHI3AnWGUdPX0kpUc5iSwpA5HsnB0nfw3s/getUpdates");.$l = iconv('cp1251','UTF-8', "��������� ���������:");
//echo "$l <b>".$get[result][count($get[result])-1][message][text]."</b> writed by <b>".$get[result][count($get[result])-1][message][chat][username];
//if (preg_match('/����/', iconv('UTF-8', 'cp1251', $get[result][count($get[result])-1][message][text]), $a)){}
http("https://api.telegram.org/bot484226037:AAHI3AnWGUdPX0kpUc5iSwpA5HsnB0nfw3s/sendMessage?//disable_web_page_preview=true&chat_id=461970458&text=".word(iconv('UTF-8', 'cp1251', $get[result][count($get[result])-1][message][text])));

?>