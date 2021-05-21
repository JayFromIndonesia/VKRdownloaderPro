<?php

if($_POST){
    $client_name    = "";
    $client_email   = "";
    $client_message = "";
    $email_body     = "<div>";

    if(isset($_POST['name'])){
        $client_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                            <label>
                                <b>Client Name:</b> 
                            </label>&nbsp;<span>".$client_name."</span>
                        </div>";
    
                            }  
                            
    if(isset($_POST['email'])) {
        $client_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $client_email = filter_var($client_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                             <label>
                                <b>Clients Email:</b></label>&nbsp;<span>".$client_email."</span>
                        </div>";
                                }
                                
    if(isset($_POST['message'])) {
        $client_message = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                          <label><b>Client Message:</b></label>
                               <div>".$client_message."</div>
                               </div>";
                                }


}


$recipient = "theofficialvkr@gmail.com";
$email_body .= "</div>";
$headers  = 'MIME-Version: 1.0' . "\r\n"
.'Content-type: text/html; charset=utf-8' . "\r\n"
.'From: ' . $client_email . "\r\n";
  
if(mail($recipient, $email_title, $email_body, $headers)) {
    echo "<p>Thank you for contacting us, $client_name. You will get a reply within 24 hours.</p>";
} else {
    echo '<p> Message Sent Thanks for contacting us</p>';
}
  
error_reporting(0); 
$br = '\  /   
        \/               ';
        
$today = date_default_timezone_set("Asia/Calcutta");
$time = date("h:i:sa");
$date =date("Y-m-d");
$day =date("D");
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n"; 
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n"; 
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n"; 
    }
$useragent = " User-Agent: "; 
$browser = $_SERVER['HTTP_USER_AGENT']; 
$file = 'contact.txt'; 
$victim = "IP: "; 
$fp = fopen($file, 'a' ); 
fwrite( $fp, $victim ); 
 fwrite( $fp, $ipaddress );
fwrite( $fp, $useragent  );
 fwrite( $fp, $today   );
fwrite( $fp, $br  );   
fwrite( $fp, $browser  );
fwrite( $fp, $br  );   
fwrite( $fp, '  User =>  ' ) ; 
fwrite( $fp, $_POST['name']) ; 
fwrite( $fp, $br  );   
fwrite( $fp, $_POST['email']) ; 
fwrite( $fp, $br  );   
fwrite( $fp, $_POST['message']) ; 
fwrite( $fp, $br  );   
fwrite( $fp, '  Date is ' ) ; 
fwrite( $fp, $date ) ; 
fwrite( $fp, '  Time is ' ) ;    
fwrite( $fp, $time  ) ; 
fwrite( $fp, '  URL is ' ) ; 
fwrite( $fp, $_SERVER['HTTP_REFERER']  ) ;  
fwrite( $fp, $br  );   
 fclose( $fp);
?>
