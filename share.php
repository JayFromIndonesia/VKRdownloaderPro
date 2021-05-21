 <?php
  error_reporting(0);
  $tvkr = "datube : Online Audio, Video & Photos Downloader with iframe Api which Help you to create your own website";
  $dvkr = "Online Video & Photos Downloader with iframe Api which Help you to create your own Video DOwnloader website. Also You can Download Portion of the YouTube Videos (YouTube Videos Cutter ) Download instagram Photos and Videos, Download Videos From Twitter,instagram,Pinterest,BCCI,IPL,YouTube,FaceBook,TikTok,SanckVideo,SonyLiv,Kwai,Google and more Sites";
  $domvkr = "https://$_SERVER[HTTP_HOST]";
  $lgvkr ="https://$_SERVER[HTTP_HOST]/logo.png"; 
  $year = date("Y"); 
  ?><?php 
error_reporting(0);
$urlx = $_SERVER['HTTP_REFERER'];
$lloc =urldecode($urlx); 
header("Location: https://www.addtoany.com/share/?linkurl=$lloc");
?>