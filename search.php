<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("?sdl=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocfirst = urlencode($video_id);
$llocf = urlencode($video_id);
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<div id="vTitlet"/>
  <title>VKRdownloaderPro : Download Any Videos From Any Sites </title>
  <meta content="VKRdownloaderPro: Videos Downloader From more than 1000+ Sites , All in one Videos Downloader Online , YouTube Videos Downloader, facebook Videos Downloader" name="description">
  <meta content="VKRdownloaderPro: Videos Downloader From more than 1000+ Sites , All in one Videos Downloader Online , YouTube Videos Downloader, facebook Videos Downloader" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  
</head>
<style type="text/css">
  .url {
  display: block;
  width: 100%;
  padding: .375rem .75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 2.5;
  color: #212529;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: .25rem;
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/index.php">VKRdownloaderPro</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Follow us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://instagram.com/theofficialvkr">Instagram</a></li>
              <li class="dropdown"><a href="#"><span>Other Link</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="https://pinterest.com/theofficialvkr">Pinterest</a></li>
                  <li><a href="https://in.linkedin.com/theofficialvkr">Linkedin</a></li>
                  <li><a href="https://www.google.com/search?client=firefox-b-d&q=theofficialvkr">Google</a></li>
                  <li><a href="https://theofficialvkr.blogspot.com/">Blog</a></li>
                  <li><a href="mailto:contactvkr@yahoo.com">mail Us </a></li>
                </ul>
              </li>
              <li><a href="https://twitter.com/theofficialvkr">Twitter</a></li>
              <li><a href="https://facebook.com/theofficialvkr">Facebook</a></li>
              <li><a href="https://paypal.me/theofficialvkr">PayPal</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="/terms.php">Terms</a></li>
          <li><a class="nav-link scrollto" href="/privacy.php">Privacy</a></li>
          <li><a class="nav-link scrollto" href="/disclaimer.php">Disclaimer</a></li>
          <li><a class="getstarted scrollto" href="/share.php">share</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
          <center><h2> Search Or Paste URL to Download </h2></center>
<form method="get" action="/searchf.php">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        
          <input type="text" name="url" class="url" id="url" placeholder="Name or URL" required="">

        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn-get-started scrollto"> Get Now! </a>
      </div>
</form>

      
  <center><h2> Search Reasult for - <?php echo $lloc; ?></h1></center>
            
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="https://getsdlv.herokuapp.com/server/search.js"></script>


<div style="clear:both;"/>

<center> <form> reload if it take long time to get download link 

<input type="button" onClick="history.go(0)" value="Reload page">
</form>

<center>  
<div id="x"><h3> We are getting Download Link Please Wait .. </h3>   
<img src="/img/loading.gif"  width="90%"><br>

<div id="dllink"/>
<div id="vTitlet"/>

</center>
      
      
      
      
      
      
      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href=""> Fast </a></h4>
            <p class="description">Search or Download any videos Easily & Quickly </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href=""> No ads</a></h4>
            <p class="description"> Now ads on the site so you don't get frustrated </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href=""> Supported sites</a></h4>
            <p class="description"> VKRdownloaderPro Support More than 1000 of Sites so you don't need different site to download different sites videos</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href=""> Security </a></h4>
            <p class="description"> We Never Ask For Any Kind of email or Password or any kind of personal information to download videos</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p> VKRdownloaderPro : Best free all in one videos downloader</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             Search & Download Videos From YouTube , Facebook , Twitter , Vimeo , Daulymotion , IPL , TikTok , And Thousands Of Other sites Too. 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Fast Videos and Audios Downloader Online</li>
              <li><i class="ri-check-double-line"></i> Supporting More than thousands of sites</li>
              <li><i class="ri-check-double-line"></i> Secure site : We never ask any personal detail</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              No ads on On this site so you don't get frustrated. Easily and quickly converting MP3 and MP4.
              Share with your friends
            </p>
            <a href="/share.php" class="btn-learn-more">Share</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="6785" data-purecounter-duration="2" class="purecounter"></span>
              <p>Happy Users</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="42385" data-purecounter-duration="2" class="purecounter"></span>
              <p>Downloads</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="2" class="purecounter"></span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
              <p>Failed</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Video Section ======= -->
    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about-video.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3> VKRdownloaderPro : All in One Videos Downloader Online</h3>
            <p class="fst-italic">
              Download Videos From any Sites Easily .
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Fast </li>
              <li><i class="bx bx-check-double"></i> Easy </li>
              <li><i class="bx bx-check-double"></i> Safe </li>
              <li><i class="bx bx-check-double"></i> No ads</li>
            </ul>
         
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>Support</h3>
          <p> VKRdownloaderPro is free but i need to maintain backend server which allow to fetch download link.  so that it keep working  </p>
          <a class="cta-btn" href="https://paypal.me/theofficialvkr">PayPal Profile</a>
        </div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Most Asked Question by users on Our site</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Can i Download YouTube Videos and Audios <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                 YES! Just Search or Paste URL in Input Box And Submit. Download Page is Open With All Download Link in all available Videos and Audios format and quality. just click on download button and DOWNLOAD get started.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How Many Sites VKRDownloaderPro Support<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Many Sites Like YouTube , facebook , Twitter , Vimeo and many Other sites too. Just Started Count <br>    1tv: Первый канал
    <br>1up.com
    <br>20min
    <br>220.ro
    <br>23video
    <br>24video
    <br>3qsdn: 3Q SDN
    <br>3sat
    <br>4tube
    <br>56.com
    <br>5min
    <br>6play
    <br>7plus
    <br>8tracks
    <br>91porn
    <br>9c9media
    <br>9gag
    <br>9now.com.au
    <br>abc.net.au
    <br>abc.net.au:iview
    <br>abcnews
    <br>abcnews:video
    <br>abcotvs: ABC Owned Television Stations
    <br>abcotvs:clips
    <br>AcademicEarth:Course
    <br>acast
    <br>acast:channel
    <br>AddAnime
    <br>ADN: Anime Digital Network
    <br>AdobeConnect
    <br>AdobeTV
    <br>AdobeTVChannel
    <br>AdobeTVShow
    <br>AdobeTVVideo
    <br>AdultSwim
    <br>aenetworks: A+E Networks: A&E, Lifetime, History.com, FYI Network and History Vault
    <br>afreecatv: afreecatv.com
    <br>AirMozilla
    <br>AliExpressLive
    <br>AlJazeera
    <br>Allocine
    <br>AlphaPorno
    <br>AMCNetworks
    <br>AmericasTestKitchen
    <br>anderetijden: npo.nl, ntr.nl, omroepwnl.nl, zapp.nl and npo3.nl
    <br>AnimeOnDemand
    <br>Anvato
    <br>aol.com
    <br>APA
    <br>Aparat
    <br>AppleConnect
    <br>AppleDaily: 臺灣蘋果日報
    <br>appletrailers
    <br>appletrailers:section
    <br>archive.org: archive.org videos
    <br>ARD
    <br>ARD:mediathek
    <br>ARDBetaMediathek
    <br>Arkena
    <br>arte.tv:+7
    <br>arte.tv:embed
    <br>arte.tv:playlist
    <br>AsianCrush
    <br>AsianCrushPlaylist
    <br>AtresPlayer
    <br>ATTTechChannel
    <br>ATVAt
    <br>AudiMedia
    <br>AudioBoom
    <br>audiomack
    <br>audiomack:album
    <br>AWAAN
    <br>awaan:live
    <br>awaan:season
    <br>awaan:video
    <br>AZMedien: AZ Medien videos
    <br>BaiduVideo: 百度视频
    <br>bambuser
    <br>bambuser:channel
    <br>Bandcamp
    <br>Bandcamp:album
    <br>Bandcamp:weekly
    <br>bangumi.bilibili.com: BiliBili番剧
    <br>bbc: BBC
    <br>bbc.co.uk: BBC iPlayer
    <br>bbc.co.uk:article: BBC articles
    <br>bbc.co.uk:iplayer:playlist
    <br>bbc.co.uk:playlist
    <br>BBVTV
    <br>Beatport
    <br>Beeg
    <br>BehindKink
    <br>Bellator
    <br>BellMedia
    <br>Bet
    <br>bfi:player
    <br>Bigflix
    <br>Bild: Bild.de
    <br>BiliBili
    <br>BioBioChileTV
    <br>BIQLE
    <br>BitChute
    <br>BitChuteChannel
    <br>BleacherReport
    <br>BleacherReportCMS
    <br>blinkx
    <br>Bloomberg
    <br>BokeCC
    <br>BostonGlobe
    <br>Bpb: Bundeszentrale für politische Bildung
    <br>BR: Bayerischer Rundfunk
    <br>BravoTV
    <br>Break
    <br>brightcove:legacy
    <br>brightcove:new
    <br>BRMediathek: Bayerischer Rundfunk Mediathek
    <br>bt:article: Bergens Tidende Articles
    <br>bt:vestlendingen: Bergens Tidende - Vestlendingen
    <br>BusinessInsider
    <br>BuzzFeed
    <br>BYUtv
    <br>Camdemy
    <br>CamdemyFolder
    <br>CamModels
    <br>CamTube
    <br>CamWithHer
    <br>canalc2.tv
    <br>Canalplus: mycanal.fr and piwiplus.fr
    <br>Canvas
    <br>CanvasEen: canvas.be and een.be
    <br>CarambaTV
    <br>CarambaTVPage
    <br>CartoonNetwork
    <br>cbc.ca
    <br>cbc.ca:olympics
    <br>cbc.ca:player
    <br>cbc.ca:watch
    <br>cbc.ca⌚️video
    <br>CBS
    <br>CBSInteractive
    <br>CBSLocal
    <br>cbsnews: CBS News
    <br>cbsnews:embed
    <br>cbsnews:livevideo: CBS News Live Videos
    <br>CBSSports
    <br>CCMA
    <br>CCTV: 央视网
    <br>CDA
    <br>CeskaTelevize
    <br>CeskaTelevizePorady
    <br>channel9: Channel 9
    <br>CharlieRose
    <br>Chaturbate
    <br>Chilloutzone
    <br>chirbit
    <br>chirbit:profile
    <br>Cinchcast
    <br>Cinemax
    <br>CiscoLiveSearch
    <br>CiscoLiveSession
    <br>CJSW
    <br>cliphunter
    <br>Clippit
    <br>ClipRs
    <br>Clipsyndicate
    <br>CloserToTruth
    <br>CloudflareStream
    <br>Cloudy
    <br>Clubic
    <br>Clyp
    <br>cmt.com
    <br>CNBC
    <br>CNBCVideo
    <br>CNN
    <br>CNNArticle
    <br>CNNBlogs
    <br>ComCarCoff
    <br>ComedyCentral
    <br>ComedyCentralFullEpisodes
    <br>ComedyCentralShortname
    <br>ComedyCentralTV
    <br>CondeNast: Condé Nast media group: Allure, Architectural Digest, Ars Technica, Bon Appétit, Brides, Condé Nast, Condé Nast Traveler, Details, Epicurious, GQ, Glamour, Golf Digest, SELF, Teen Vogue, The New Yorker, Vanity Fair, Vogue, W Magazine, WIRED
    <br>Corus
    <br>Coub
    <br>Cracked
    <br>Crackle
    <br>CrooksAndLiars
    <br>crunchyroll
    <br>crunchyroll:playlist
    <br>CSNNE
    <br>CSpan: C-SPAN
    <br>CtsNews: 華視新聞
    <br>CTVNews
    <br>cu.ntv.co.jp: Nippon Television Network
    <br>Culturebox
    <br>CultureUnplugged
    <br>curiositystream
    <br>curiositystream:collection
    <br>CWTV
    <br>DailyMail
    <br>dailymotion
    <br>dailymotion:playlist
    <br>dailymotion:user
    <br>DaisukiMotto
    <br>DaisukiMottoPlaylist
    <br>daum.net
    <br>daum.net:clip
    <br>daum.net:playlist
    <br>daum.net:user
    <br>DBTV
    <br>DctpTv
    <br>DeezerPlaylist
    <br>defense.gouv.fr
    <br>democracynow
    <br>DHM: Filmarchiv - Deutsches Historisches Museum
    <br>Digg
    <br>DigitallySpeaking
    <br>Digiteka
    <br>Discovery
    <br>DiscoveryGo
    <br>DiscoveryGoPlaylist
    <br>DiscoveryNetworksDe
    <br>DiscoveryVR
    <br>Disney
    <br>dlive:stream
    <br>dlive:vod
    <br>Dotsub
    <br>DouyuShow
    <br>DouyuTV: 斗鱼
    <br>DPlay
    <br>DPlayIt
    <br>DRBonanza
    <br>Dropbox
    <br>DrTuber
    <br>drtv
    <br>drtv:live
    <br>DTube
    <br>Dumpert
    <br>dvtv: http://video.aktualne.cz/
    <br>dw
    <br>dw:article
    <br>EaglePlatform
    <br>EbaumsWorld
    <br>EchoMsk
    <br>egghead:course: egghead.io course
    <br>egghead:lesson: egghead.io lesson
    <br>ehftv
    <br>eHow
    <br>EinsUndEinsTV
    <br>Einthusan
    <br>eitb.tv
    <br>EllenTube
    <br>EllenTubePlaylist
    <br>EllenTubeVideo
    <br>ElPais: El País
    <br>Embedly
    <br>EMPFlix
    <br>Engadget
    <br>Eporner
    <br>EroProfile
    <br>Escapist
    <br>ESPN
    <br>ESPNArticle
    <br>EsriVideo
    <br>Europa
    <br>EveryonesMixtape
    <br>EWETV
    <br>ExpoTV
    <br>Expressen
    <br>ExtremeTube
    <br>EyedoTV
    <br>facebook
    <br>FacebookPluginsVideo
    <br>faz.net
    <br>fc2
    <br>fc2:embed
    <br>Fczenit
    <br>filmon
    <br>filmon:channel
    <br>Filmweb
    <br>FiveThirtyEight
    <br>FiveTV
    <br>Flickr
    <br>Flipagram
    <br>Folketinget: Folketinget (ft.dk; Danish parliament)
    <br>FootyRoom
    <br>Formula1
    <br>FOX
    <br>FOX9
    <br>Foxgay
    <br>foxnews: Fox News and Fox Business Video
    <br>foxnews:article
    <br>FoxSports
    <br>france2.fr:generation-what
    <br>FranceCulture
    <br>FranceInter
    <br>FranceTV
    <br>FranceTVEmbed
    <br>francetvinfo.fr
    <br>FranceTVJeunesse
    <br>FranceTVSite
    <br>Freesound
    <br>freespeech.org
    <br>FreshLive
    <br>FrontendMasters
    <br>FrontendMastersCourse
    <br>FrontendMastersLesson
    <br>Funimation
    <br>Funk
    <br>Fusion
    <br>Fux
    <br>FXNetworks
    <br>Gaia
    <br>GameInformer
    <br>GameOne
    <br>gameone:playlist
    <br>GameSpot
    <br>GameStar
    <br>Gaskrank
    <br>Gazeta
    <br>GDCVault
    <br>generic: Generic downloader that works on some sites
    <br>Gfycat
    <br>GiantBomb
    <br>Giga
    <br>GlattvisionTV
    <br>Glide: Glide mobile video messages (glide.me)
    <br>Globo
    <br>GloboArticle
    <br>Go
    <br>Go90
    <br>GodTube
    <br>Golem
    <br>GoogleDrive
    <br>Goshgay
    <br>GPUTechConf
    <br>Groupon
    <br>Hark
    <br>hbo
    <br>HearThisAt
    <br>Heise
    <br>HellPorno
    <br>Helsinki: helsinki.fi
    <br>HentaiStigma
    <br>hetklokhuis
    <br>hgtv.com:show
    <br>HiDive
    <br>HistoricFilms
    <br>history:topic: History.com Topic
    <br>hitbox
    <br>hitbox:live
    <br>HitRecord
    <br>hketv: 香港教育局教育電視 (HKETV) Educational Television, Hong Kong Educational Bureau
    <br>HornBunny
    <br>HotNewHipHop
    <br>hotstar
    <br>hotstar:playlist
    <br>Howcast
    <br>HowStuffWorks
    <br>HRTi
    <br>HRTiPlaylist
    <br>Huajiao: 花椒直播
    <br>HuffPost: Huffington Post
    <br>Hungama
    <br>HungamaSong
    <br>Hypem
    <br>Iconosquare
    <br>ign.com
    <br>imdb: Internet Movie Database trailers
    <br>imdb:list: Internet Movie Database lists
    <br>Imgur
    <br>imgur:album
    <br>imgur:gallery
    <br>Ina
    <br>Inc
    <br>IndavideoEmbed
    <br>InfoQ
    <br>Instagram
    <br>instagram:tag: Instagram hashtag search
    <br>instagram:user: Instagram user profile
    <br>Internazionale
    <br>InternetVideoArchive
    <br>IPrima
    <br>iqiyi: 爱奇艺
    <br>Ir90Tv
    <br>ITTF
    <br>ITV
    <br>ITVBTCC
    <br>ivi: ivi.ru
    <br>ivi:compilation: ivi.ru compilations
    <br>ivideon: Ivideon TV
    <br>Iwara
    <br>Izlesene
    <br>Jamendo
    <br>JamendoAlbum
    <br>JeuxVideo
    <br>Joj
    <br>Jove
    <br>jpopsuki.tv
    <br>JWPlatform
    <br>Kakao
    <br>Kaltura
    <br>KanalPlay: Kanal 5/9/11 Play
    <br>Kankan
    <br>Karaoketv
    <br>KarriereVideos
    <br>keek
    <br>KeezMovies
    <br>Ketnet
    <br>KhanAcademy
    <br>KickStarter
    <br>KinoPoisk
    <br>KonserthusetPlay
    <br>kontrtube: KontrTube.ru - Труба зовёт
    <br>KrasView: Красвью
    <br>Ku6
    <br>KUSI
    <br>kuwo:album: 酷我音乐 - 专辑
    <br>kuwo:category: 酷我音乐 - 分类
    <br>kuwo:chart: 酷我音乐 - 排行榜
    <br>kuwo:mv: 酷我音乐 - MV
    <br>kuwo:singer: 酷我音乐 - 歌手
    <br>kuwo:song: 酷我音乐
    <br>la7.it
    <br>laola1tv
    <br>laola1tv:embed
    <br>LCI
    <br>Lcp
    <br>LcpPlay
    <br>Le: 乐视网
    <br>Learnr
    <br>Lecture2Go
    <br>Lecturio
    <br>LecturioCourse
    <br>LecturioDeCourse
    <br>LEGO
    <br>Lemonde
    <br>Lenta
    <br>LePlaylist
    <br>LetvCloud: 乐视云
    <br>Libsyn
    <br>life: Life.ru
    <br>life:embed
    <br>limelight
    <br>limelight:channel
    <br>limelight:channel_list
    <br>LineTV
    <br>linkedin:learning
    <br>linkedin:learning:course
    <br>LinuxAcademy
    <br>LiTV
    <br>LiveJournal
    <br>LiveLeak
    <br>LiveLeakEmbed
    <br>livestream
    <br>livestream:original
    <br>LnkGo
    <br>loc: Library of Congress
    <br>LocalNews8
    <br>LoveHomePorn
    <br>lrt.lt
    <br>lynda: lynda.com videos
    <br>lynda:course: lynda.com online courses
    <br>m6
    <br>macgamestore: MacGameStore trailers
    <br>mailru: Видео@Mail.Ru
    <br>mailru:music: Музыка@Mail.Ru
    <br>mailru:music:search: Музыка@Mail.Ru
    <br>MakerTV
    <br>MallTV
    <br>mangomolo:live
    <br>mangomolo:video
    <br>ManyVids
    <br>Markiza
    <br>MarkizaPage
    <br>massengeschmack.tv
    <br>MatchTV
    <br>MDR: MDR.DE and KiKA
    <br>media.ccc.de
    <br>media.ccc.de:lists
    <br>Medialaan
    <br>Mediaset
    <br>Mediasite
    <br>MediasiteCatalog
    <br>MediasiteNamedCatalog
    <br>Medici
    <br>megaphone.fm: megaphone.fm embedded players
    <br>Meipai: 美拍
    <br>MelonVOD
    <br>META
    <br>metacafe
    <br>Metacritic
    <br>Mgoon
    <br>MGTV: 芒果TV
    <br>MiaoPai
    <br>Minhateca
    <br>MinistryGrid
    <br>Minoto
    <br>miomio.tv
    <br>MiTele: mitele.es
    <br>mixcloud
    <br>mixcloud:playlist
    <br>mixcloud:stream
    <br>mixcloud:user
    <br>Mixer:live
    <br>Mixer:vod
    <br>MLB
    <br>Mnet
    <br>MNetTV
    <br>MoeVideo: LetitBit video services: moevideo.net, playreplay.net and videochart.net
    <br>Mofosex
    <br>Mojvideo
    <br>Morningstar: morningstar.com
    <br>Motherless
    <br>MotherlessGroup
    <br>Motorsport: motorsport.com
    <br>MovieClips
    <br>MovieFap
    <br>Moviezine
    <br>MovingImage
    <br>MSN
    <br>mtg: MTG services
    <br>mtv
    <br>mtv.de
    <br>mtv81
    <br>mtv:video
    <br>mtvservices:embedded
    <br>MuenchenTV: münchen.tv
    <br>MusicPlayOn
    <br>mva: Microsoft Virtual Academy videos
    <br>mva:course: Microsoft Virtual Academy courses
    <br>Mwave
    <br>MwaveMeetGreet
    <br>MyChannels
    <br>MySpace
    <br>MySpace:album
    <br>MySpass
    <br>Myvi
    <br>MyVidster
    <br>MyviEmbed
    <br>MyVisionTV
    <br>n-tv.de
    <br>natgeo:video
    <br>NationalGeographicTV
    <br>Naver
    <br>NBA
    <br>NBC
    <br>NBCNews
    <br>nbcolympics
    <br>nbcolympics:stream
    <br>NBCSports
    <br>NBCSportsStream
    <br>NBCSportsVPlayer
    <br>ndr: NDR.de - Norddeutscher Rundfunk
    <br>ndr:embed
    <br>ndr:embed:base
    <br>NDTV
    <br>NerdCubedFeed
    <br>netease:album: 网易云音乐 - 专辑
    <br>netease:djradio: 网易云音乐 - 电台
    <br>netease:mv: 网易云音乐 - MV
    <br>netease:playlist: 网易云音乐 - 歌单
    <br>netease:program: 网易云音乐 - 电台节目
    <br>netease:singer: 网易云音乐 - 歌手
    <br>netease:song: 网易云音乐
    <br>NetPlus
    <br>Netzkino
    <br>Newgrounds
    <br>NewgroundsPlaylist
    <br>Newstube
    <br>NextMedia: 蘋果日報
    <br>NextMediaActionNews: 蘋果日報 - 動新聞
    <br>NextTV: 壹電視
    <br>Nexx
    <br>NexxEmbed
    <br>nfl.com
    <br>NhkVod
    <br>nhl.com
    <br>nick.com
    <br>nick.de
    <br>nickelodeon:br
    <br>nickelodeonru
    <br>nicknight
    <br>niconico: ニコニコ動画
    <br>NiconicoPlaylist
    <br>Nintendo
    <br>njoy: N-JOY
    <br>njoy:embed
    <br>NJPWWorld: 新日本プロレスワールド
    <br>NobelPrize
    <br>Noco
    <br>NonkTube
    <br>Noovo
    <br>Normalboots
    <br>NosVideo
    <br>Nova: TN.cz, Prásk.tv, Nova.cz, Novaplus.cz, FANDA.tv, Krásná.cz and Doma.cz
    <br>NovaEmbed
    <br>nowness
    <br>nowness:playlist
    <br>nowness:series
    <br>Noz
    <br>npo: npo.nl, ntr.nl, omroepwnl.nl, zapp.nl and npo3.nl
    <br>npo.nl:live
    <br>npo.nl:radio
    <br>npo.nl📻fragment
    <br>Npr
    <br>NRK
    <br>NRKPlaylist
    <br>NRKSkole: NRK Skole
    <br>NRKTV: NRK TV and NRK Radio
    <br>NRKTVDirekte: NRK TV Direkte and NRK Radio Direkte
    <br>NRKTVEpisode
    <br>NRKTVEpisodes
    <br>NRKTVSeason
    <br>NRKTVSeries
    <br>NRLTV
    <br>ntv.ru
    <br>Nuvid
    <br>NYTimes
    <br>NYTimesArticle
    <br>NZZ
    <br>ocw.mit.edu
    <br>OdaTV
    <br>Odnoklassniki
    <br>OktoberfestTV
    <br>OnDemandKorea
    <br>onet.pl
    <br>onet.tv
    <br>onet.tv:channel
    <br>OnetMVP
    <br>OnionStudios
    <br>Ooyala
    <br>OoyalaExternal
    <br>Openload
    <br>OraTV
    <br>orf:fm4: radio FM4
    <br>orf:fm4:story: fm4.orf.at stories
    <br>orf:iptv: iptv.ORF.at
    <br>orf:oe1: Radio Österreich 1
    <br>orf:tvthek: ORF TVthek
    <br>OsnatelTV
    <br>OutsideTV
    <br>PacktPub
    <br>PacktPubCourse
    <br>PandaTV: 熊猫TV
    <br>pandora.tv: 판도라TV
    <br>ParamountNetwork
    <br>parliamentlive.tv: UK parliament videos
    <br>Patreon
    <br>pbs: Public Broadcasting Service (PBS) and member stations: PBS: Public Broadcasting Service, APT - Alabama Public Television (WBIQ), GPB/Georgia Public Broadcasting (WGTV), Mississippi Public Broadcasting (WMPN), Nashville Public Television (WNPT), WFSU-TV (WFSU), WSRE (WSRE), WTCI (WTCI), WPBA/Channel 30 (WPBA), Alaska Public Media (KAKM), Arizona PBS (KAET), KNME-TV/Channel 5 (KNME), Vegas PBS (KLVX), AETN/ARKANSAS ETV NETWORK (KETS), KET (WKLE), WKNO/Channel 10 (WKNO), LPB/LOUISIANA PUBLIC BROADCASTING (WLPB), OETA (KETA), Ozarks Public Television (KOZK), WSIU Public Broadcasting (WSIU), KEET TV (KEET), KIXE/Channel 9 (KIXE), KPBS San Diego (KPBS), KQED (KQED), KVIE Public Television (KVIE), PBS SoCal/KOCE (KOCE), ValleyPBS (KVPT), CONNECTICUT PUBLIC TELEVISION (WEDH), KNPB Channel 5 (KNPB), SOPTV (KSYS), Rocky Mountain PBS (KRMA), KENW-TV3 (KENW), KUED Channel 7 (KUED), Wyoming PBS (KCWC), Colorado Public Television / KBDI 12 (KBDI), KBYU-TV (KBYU), Thirteen/WNET New York (WNET), WGBH/Channel 2 (WGBH), WGBY (WGBY), NJTV Public Media NJ (WNJT), WLIW21 (WLIW), mpt/Maryland Public Television (WMPB), WETA Television and Radio (WETA), WHYY (WHYY), PBS 39 (WLVT), WVPT - Your Source for PBS and More! (WVPT), Howard University Television (WHUT), WEDU PBS (WEDU), WGCU Public Media (WGCU), WPBT2 (WPBT), WUCF TV (WUCF), WUFT/Channel 5 (WUFT), WXEL/Channel 42 (WXEL), WLRN/Channel 17 (WLRN), WUSF Public Broadcasting (WUSF), ETV (WRLK), UNC-TV (WUNC), PBS Hawaii - Oceanic Cable Channel 10 (KHET), Idaho Public Television (KAID), KSPS (KSPS), OPB (KOPB), KWSU/Channel 10 & KTNW/Channel 31 (KWSU), WILL-TV (WILL), Network Knowledge - WSEC/Springfield (WSEC), WTTW11 (WTTW), Iowa Public Television/IPTV (KDIN), Nine Network (KETC), PBS39 Fort Wayne (WFWA), WFYI Indianapolis (WFYI), Milwaukee Public Television (WMVS), WNIN (WNIN), WNIT Public Television (WNIT), WPT (WPNE), WVUT/Channel 22 (WVUT), WEIU/Channel 51 (WEIU), WQPT-TV (WQPT), WYCC PBS Chicago (WYCC), WIPB-TV (WIPB), WTIU (WTIU), CET (WCET), ThinkTVNetwork (WPTD), WBGU-TV (WBGU), WGVU TV (WGVU), NET1 (KUON), Pioneer Public Television (KWCM), SDPB Television (KUSD), TPT (KTCA), KSMQ (KSMQ), KPTS/Channel 8 (KPTS), KTWU/Channel 11 (KTWU), East Tennessee PBS (WSJK), WCTE-TV (WCTE), WLJT, Channel 11 (WLJT), WOSU TV (WOSU), WOUB/WOUC (WOUB), WVPB (WVPB), WKYU-PBS (WKYU), KERA 13 (KERA), MPBN (WCBB), Mountain Lake PBS (WCFE), NHPTV (WENH), Vermont PBS (WETK), witf (WITF), WQED Multimedia (WQED), WMHT Educational Telecommunications (WMHT), Q-TV (WDCQ), WTVS Detroit Public TV (WTVS), CMU Public Television (WCMU), WKAR-TV (WKAR), WNMU-TV Public TV 13 (WNMU), WDSE - WRPT (WDSE), WGTE TV (WGTE), Lakeland Public Television (KAWE), KMOS-TV - Channels 6.1, 6.2 and 6.3 (KMOS), MontanaPBS (KUSM), KRWG/Channel 22 (KRWG), KACV (KACV), KCOS/Channel 13 (KCOS), WCNY/Channel 24 (WCNY), WNED (WNED), WPBS (WPBS), WSKG Public TV (WSKG), WXXI (WXXI), WPSU (WPSU), WVIA Public Media Studios (WVIA), WTVI (WTVI), Western Reserve PBS (WNEO), WVIZ/PBS ideastream (WVIZ), KCTS 9 (KCTS), Basin PBS (KPBT), KUHT / Channel 8 (KUHT), KLRN (KLRN), KLRU (KLRU), WTJX Channel 12 (WTJX), WCVE PBS (WCVE), KBTC Public Television (KBTC)
    <br>pcmag
    <br>PearVideo
    <br>PeerTube
    <br>People
    <br>PerformGroup
    <br>periscope: Periscope
    <br>periscope:user: Periscope user videos
    <br>PhilharmonieDeParis: Philharmonie de Paris
    <br>phoenix.de
    <br>Photobucket
    <br>Picarto
    <br>PicartoVod
    <br>Piksel
    <br>Pinkbike
    <br>Pladform
    <br>Platzi
    <br>PlatziCourse
    <br>play.fm
    <br>PlayPlusTV
    <br>PlaysTV
    <br>Playtvak: Playtvak.cz, iDNES.cz and Lidovky.cz
    <br>Playvid
    <br>Playwire
    <br>pluralsight
    <br>pluralsight:course
    <br>plus.google: Google Plus
    <br>podomatic
    <br>Pokemon
    <br>PolskieRadio
    <br>PolskieRadioCategory
    <br>PopcornTV
    <br>PornCom
    <br>PornerBros
    <br>PornHd
    <br>PornHub: PornHub and Thumbzilla
    <br>PornHubPagedVideoList
    <br>PornHubUser
    <br>PornHubUserVideosUpload
    <br>Pornotube
    <br>PornoVoisines
    <br>PornoXO
    <br>PornTube
    <br>PressTV
    <br>PromptFile
    <br>prosiebensat1: ProSiebenSat.1 Digital
    <br>puhutv
    <br>puhutv:serie
    <br>Puls4
    <br>Pyvideo
    <br>qqmusic: QQ音乐
    <br>qqmusic:album: QQ音乐 - 专辑
    <br>qqmusic:playlist: QQ音乐 - 歌单
    <br>qqmusic:singer: QQ音乐 - 歌手
    <br>qqmusic:toplist: QQ音乐 - 排行榜
    <br>QuantumTV
    <br>Quickline
    <br>QuicklineLive
    <br>R7
    <br>R7Article
    <br>radio.de
    <br>radiobremen
    <br>radiocanada
    <br>radiocanada:audiovideo
    <br>radiofrance
    <br>RadioJavan
    <br>Rai
    <br>RaiPlay
    <br>RaiPlayLive
    <br>RaiPlayPlaylist
    <br>RayWenderlich
    <br>RayWenderlichCourse
    <br>RBMARadio
    <br>RDS: RDS.ca
    <br>RedBullTV
    <br>RedBullTVRrnContent
    <br>Reddit
    <br>RedditR
    <br>RedTube
    <br>RegioTV
    <br>RENTV
    <br>RENTVArticle
    <br>Restudy
    <br>Reuters
    <br>ReverbNation
    <br>revision
    <br>revision3:embed
    <br>RICE
    <br>RMCDecouverte
    <br>RockstarGames
    <br>RoosterTeeth
    <br>RottenTomatoes
    <br>Roxwel
    <br>Rozhlas
    <br>RTBF
    <br>rte: Raidió Teilifís Éireann TV
    <br>rte:radio: Raidió Teilifís Éireann radio
    <br>rtl.nl: rtl.nl and rtlxl.nl
    <br>rtl2
    <br>rtl2:you
    <br>rtl2:you:series
    <br>RTP
    <br>RTS: RTS.ch
    <br>rtve.es:alacarta: RTVE a la carta
    <br>rtve.es:infantil: RTVE infantil
    <br>rtve.es:live: RTVE.es live streams
    <br>rtve.es:television
    <br>RTVNH
    <br>RTVS
    <br>RUHD
    <br>rutube: Rutube videos
    <br>rutube:channel: Rutube channels
    <br>rutube:embed: Rutube embedded videos
    <br>rutube:movie: Rutube movies
    <br>rutube:person: Rutube person videos
    <br>rutube:playlist: Rutube playlists
    <br>RUTV: RUTV.RU
    <br>Ruutu
    <br>Ruv
    <br>safari: safaribooksonline.com online video
    <br>safari:api
    <br>safari:course: safaribooksonline.com online courses
    <br>SAKTV
    <br>SaltTV
    <br>Sapo: SAPO Vídeos
    <br>savefrom.net
    <br>SBS: sbs.com.au
    <br>schooltv
    <br>screen.yahoo:search: Yahoo screen search
    <br>Screencast
    <br>ScreencastOMatic
    <br>scrippsnetworks:watch
    <br>Seeker
    <br>SenateISVP
    <br>SendtoNews
    <br>ServingSys
    <br>Servus
    <br>Sexu
    <br>SeznamZpravy
    <br>SeznamZpravyArticle
    <br>Shahid
    <br>ShahidShow
    <br>Shared: shared.sx
    <br>ShowRoomLive
    <br>Sina
    <br>SkylineWebcams
    <br>SkyNews
    <br>skynewsarabia:article
    <br>skynewsarabia:video
    <br>SkySports
    <br>Slideshare
    <br>SlidesLive
    <br>Slutload
    <br>smotri: Smotri.com
    <br>smotri:broadcast: Smotri.com broadcasts
    <br>smotri:community: Smotri.com community videos
    <br>smotri:user: Smotri.com user videos
    <br>Snotr
    <br>Sohu
    <br>SonyLIV
    <br>soundcloud
    <br>soundcloud:playlist
    <br>soundcloud:search: Soundcloud search
    <br>soundcloud:set
    <br>soundcloud:trackstation
    <br>soundcloud:user
    <br>soundgasm
    <br>soundgasm:profile
    <br>southpark.cc.com
    <br>southpark.cc.com:español
    <br>southpark.de
    <br>southpark.nl
    <br>southparkstudios.dk
    <br>SpankBang
    <br>SpankBangPlaylist
    <br>Spankwire
    <br>Spiegel
    <br>Spiegel:Article: Articles on spiegel.de
    <br>Spiegeltv
    <br>sport.francetvinfo.fr
    <br>Sport5
    <br>SportBox
    <br>SportDeutschland
    <br>SpringboardPlatform
    <br>Sprout
    <br>sr:mediathek: Saarländischer Rundfunk
    <br>SRGSSR
    <br>SRGSSRPlay: srf.ch, rts.ch, rsi.ch, rtr.ch and swissinfo.ch play sites
    <br>stanfordoc: Stanford Open ClassRoom
    <br>Steam
    <br>Stitcher
    <br>Streamable
    <br>Streamango
    <br>streamcloud.eu
    <br>StreamCZ
    <br>StreetVoice
    <br>StretchInternet
    <br>stv:player
    <br>SunPorno
    <br>sverigesradio:episode
    <br>sverigesradio:publication
    <br>SVT
    <br>SVTPage
    <br>SVTPlay: SVT Play and Öppet arkiv
    <br>SVTSeries
    <br>SWRMediathek
    <br>Syfy
    <br>SztvHu
    <br>t-online.de
    <br>Tagesschau
    <br>tagesschau:player
    <br>Tass
    <br>TastyTrade
    <br>TBS
    <br>TDSLifeway
    <br>Teachable
    <br>TeachableCourse
    <br>teachertube: teachertube.com videos
    <br>teachertube:user:collection: teachertube.com user and collection videos
    <br>TeachingChannel
    <br>Teamcoco
    <br>TeamTreeHouse
    <br>TechTalks
    <br>techtv.mit.edu
    <br>ted
    <br>Tele13
    <br>Tele5
    <br>TeleBruxelles
    <br>Telecinco: telecinco.es, cuatro.com and mediaset.es
    <br>Telegraaf
    <br>TeleMB
    <br>TeleQuebec
    <br>TeleQuebecEmission
    <br>TeleQuebecLive
    <br>TeleTask
    <br>Telewebion
    <br>TennisTV
    <br>TF1
    <br>TFO
    <br>TheIntercept
    <br>ThePlatform
    <br>ThePlatformFeed
    <br>TheScene
    <br>TheStar
    <br>TheSun
    <br>TheWeatherChannel
    <br>ThisAmericanLife
    <br>ThisAV
    <br>ThisOldHouse
    <br>TikTok
    <br>TikTokUser
    <br>tinypic: tinypic.com videos
    <br>TMZ
    <br>TMZArticle
    <br>TNAFlix
    <br>TNAFlixNetworkEmbed
    <br>toggle
    <br>ToonGoggles
    <br>Tosh: Tosh.0
    <br>tou.tv
    <br>Toypics: Toypics video
    <br>ToypicsUser: Toypics user profile
    <br>TrailerAddict (Currently broken)
    <br>Trilulilu
    <br>TruNews
    <br>TruTV
    <br>Tube8
    <br>TubiTv
    <br>Tumblr
    <br>tunein:clip
    <br>tunein:program
    <br>tunein:station
    <br>tunein:topic
    <br>TunePk
    <br>Turbo
    <br>Tutv
    <br>tv.dfb.de
    <br>TV2
    <br>tv2.hu
    <br>TV2Article
    <br>TV4: tv4.se and tv4play.se
    <br>TV5MondePlus: TV5MONDE+
    <br>TVA
    <br>TVANouvelles
    <br>TVANouvellesArticle
    <br>TVC
    <br>TVCArticle
    <br>tvigle: Интернет-телевидение Tvigle.ru
    <br>tvland.com
    <br>TVN24
    <br>TVNet
    <br>TVNoe
    <br>TVNow
    <br>TVNowAnnual
    <br>TVNowNew
    <br>TVNowSeason
    <br>TVNowShow
    <br>tvp: Telewizja Polska
    <br>tvp:embed: Telewizja Polska
    <br>tvp:series
    <br>TVPlayer
    <br>TVPlayHome
    <br>Tweakers
    <br>TwitCasting
    <br>twitch:chapter
    <br>twitch:clips
    <br>twitch:profile
    <br>twitch:stream
    <br>twitch:video
    <br>twitch:videos:all
    <br>twitch:videos:highlights
    <br>twitch:videos:past-broadcasts
    <br>twitch:videos:uploads
    <br>twitch:vod
    <br>twitter
    <br>twitter:amplify
    <br>twitter:card
    <br>udemy
    <br>udemy:course
    <br>UDNEmbed: 聯合影音
    <br>UFCTV
    <br>UKTVPlay
    <br>umg:de: Universal Music Deutschland
    <br>Unistra
    <br>Unity
    <br>uol.com.br
    <br>uplynk
    <br>uplynk:preplay
    <br>Urort: NRK P3 Urørt
    <br>URPlay
    <br>USANetwork
    <br>USAToday
    <br>ustream
    <br>ustream:channel
    <br>ustudio
    <br>ustudio:embed
    <br>Varzesh3
    <br>Vbox7
    <br>VeeHD
    <br>Veoh
    <br>verystream
    <br>Vessel
    <br>Vesti: Вести.Ru
    <br>Vevo
    <br>VevoPlaylist
    <br>VGTV: VGTV, BTTV, FTV, Aftenposten and Aftonbladet
    <br>vh1.com
    <br>vhx:embed
    <br>Viafree
    <br>vice
    <br>vice:article
    <br>vice:show
    <br>Vidbit
    <br>Viddler
    <br>Videa
    <br>video.google:search: Google Video search
    <br>video.mit.edu
    <br>VideoDetective
    <br>videofy.me
    <br>videomore
    <br>videomore:season
    <br>videomore:video
    <br>VideoPremium
    <br>VideoPress
    <br>Vidio
    <br>VidLii
    <br>vidme
    <br>vidme:user
    <br>vidme:user:likes
    <br>Vidzi
    <br>vier: vier.be and vijf.be
    <br>vier:videos
    <br>ViewLift
    <br>ViewLiftEmbed
    <br>Viewster
    <br>Viidea
    <br>viki
    <br>viki:channel
    <br>vimeo
    <br>vimeo:album
    <br>vimeo:channel
    <br>vimeo:group
    <br>vimeo:likes: Vimeo user likes
    <br>vimeo:ondemand
    <br>vimeo:review: Review pages on vimeo
    <br>vimeo:user
    <br>Vimple: Vimple - one-click video hosting
    <br>Vine
    <br>vine:user
    <br>Viqeo
    <br>Viu
    <br>viu:ott
    <br>viu:playlist
    <br>Vivo: vivo.sx
    <br>vk: VK
    <br>vk:uservideos: VK - User's Videos
    <br>vk:wallpost
    <br>vlive
    <br>vlive:channel
    <br>vlive:playlist
    <br>Vodlocker
    <br>VODPl
    <br>VODPlatform
    <br>VoiceRepublic
    <br>Voot
    <br>VoxMedia
    <br>VoxMediaVolume
    <br>vpro: npo.nl, ntr.nl, omroepwnl.nl, zapp.nl and npo3.nl
    <br>Vrak
    <br>VRT: VRT NWS, Flanders News, Flandern Info and Sporza
    <br>VrtNU: VrtNU.be
    <br>vrv
    <br>vrv:series
    <br>VShare
    <br>VTXTV
    <br>vube: Vube.com
    <br>VuClip
    <br>VVVVID
    <br>VyboryMos
    <br>Vzaar
    <br>Wakanim
    <br>Walla
    <br>WalyTV
    <br>washingtonpost
    <br>washingtonpost:article
    <br>wat.tv
    <br>WatchBox
    <br>WatchIndianPorn: Watch Indian Porn
    <br>WDR
    <br>wdr:mobile
    <br>WDRElefant
    <br>WDRPage
    <br>Webcaster
    <br>WebcasterFeed
    <br>WebOfStories
    <br>WebOfStoriesPlaylist
    <br>Weibo
    <br>WeiboMobile
    <br>WeiqiTV: WQTV
    <br>Wimp
    <br>Wistia
    <br>wnl: npo.nl, ntr.nl, omroepwnl.nl, zapp.nl and npo3.nl
    <br>WorldStarHipHop
    <br>WSJ: Wall Street Journal
    <br>WSJArticle
    <br>WWE
    <br>XBef
    <br>XboxClips
    <br>XFileShare: XFileShare based sites: DaClips, FileHoot, GorillaVid, MovPod, PowerWatch, Rapidvideo.ws, TheVideoBee, Vidto, Streamin.To, XVIDSTAGE, Vid ABC, VidBom, vidlo, RapidVideo.TV, FastVideo.me
    <br>XHamster
    <br>XHamsterEmbed
    <br>XHamsterUser
    <br>xiami:album: 虾米音乐 - 专辑
    <br>xiami:artist: 虾米音乐 - 歌手
    <br>xiami:collection: 虾米音乐 - 精选集
    <br>xiami:song: 虾米音乐
    <br>ximalaya: 喜马拉雅FM
    <br>ximalaya:album: 喜马拉雅FM 专辑
    <br>XMinus
    <br>XNXX
    <br>Xstream
    <br>XTube
    <br>XTubeUser: XTube user profile
    <br>Xuite: 隨意窩Xuite影音
    <br>XVideos
    <br>XXXYMovies
    <br>Yahoo: Yahoo screen and movies
    <br>yahoo:gyao
    <br>yahoo:gyao:player
    <br>yahoo:japannews: Yahoo! Japan News
    <br>YandexDisk
    <br>yandexmusic:album: Яндекс.Музыка - Альбом
    <br>yandexmusic:playlist: Яндекс.Музыка - Плейлист
    <br>yandexmusic:track: Яндекс.Музыка - Трек
    <br>YandexVideo
    <br>YapFiles
    <br>YesJapan
    <br>yinyuetai:video: 音悦Tai
    <br>Ynet
    <br>YouJizz
    <br>youku: 优酷
    <br>youku:show
    <br>YouNowChannel
    <br>YouNowLive
    <br>YouNowMoment
    <br>YouPorn
    <br>YourPorn
    <br>YourUpload
    <br>youtube: YouTube.com
    <br>youtube:channel: YouTube.com channels
    <br>youtube:live: YouTube.com live streams
    <br>youtube:playlist: YouTube.com playlists
    <br>youtube:playlists: YouTube.com user/channel playlists
    <br>youtube:search: YouTube.com searches
    <br>youtube:search:date: YouTube.com searches, newest videos first
    <br>youtube:search_url: YouTube.com search URLs
    <br>youtube:show: YouTube.com (multi-season) shows
    <br>youtube:user: YouTube.com user videos (URL or "ytuser" keyword)
    <br>Zapiks
    <br>Zaq1
    <br>Zattoo
    <br>ZattooLive
    <br>ZDF
    <br>ZDFChannel
    <br>zingmp3: mp3.zing.vn
    <br>Zype


                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">can i download audio?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yes. We convert Videos into audio [MP3 , M4A] too in different quality like 128Kbps , 320Kbps and more
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Can i download 4K or 8K Videos<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                 YES. We convert Videos and get all quality including 360P , 480P , 720P , 1080P , 4K , 8K and More
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"> Whats your Paypal Email <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                Email -> Contactvkr@yahoo.com <br>
                UPI   -> theofficialvkr@oksbi
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>For any Query or Suggestion Please Contact Me</p>
        </div>

        <div>
          <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Adiyogi%20statue&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}</style><a href="https://www.embedgooglemap.net">show google maps on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div></div>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>India</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contactvkr@yahoo.com</p>
              </div>


            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
          
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>VKRdownloaderPro</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/VKRdownloaderPro-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://instagram.com/theofficialvkr">Vijay Kumar</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/theofficialvkr" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://facebook.com/theofficialvkr" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/theofficialvkr" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://paypal.me/theofficialvkr" class="google-plus"><i class="bx bxl-paypal"></i></a>
        <a href="https://in.linkedin.com/theofficialvkr" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
