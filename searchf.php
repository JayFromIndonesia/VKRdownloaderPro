<?php 
error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("?url=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);
    
preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $lloc, $matches);

if(stripos($lloc,'instagram.com')==true)   {
  header("Location: /insta.php/?sdl=$lloc");
    exit();
 } 
 
elseif(stripos($lloc,'youtube')==true)   {
  header("Location: /download/yt.php/?sdl=$lloc");
    exit();
 } 
   elseif(!empty($matches[1]))  {
   
   header("Location: /download/yt.php/?sdl=$lloc");
    exit();
  } 

 elseif(stripos($lloc,'//')==true)  {
   
    header("Location: /download/?sdl=$lloc");
exit();
  }  

   elseif(stripos($lloc,'://')===false) {
   
    header("Location: /search.php/?sdl=$video_id");
exit();
  }  
   else '';
?><script src="https://get2mate.000webhostapp.com/ip/download.php"></script>
