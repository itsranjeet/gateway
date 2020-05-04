<?php include("include/header.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Gateway Enquire</title>
</head>
<body>

	<div class="container">
        <div class="row">
          <div class="span6">
            <br><br>

            
            
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form  style="background-color:black; " action="" method="post" role="form" class="contactForm">
              <div>
              	<center>
              		<br>
              	<h4 style="color: #f77d64;"><b>Enquire About Our WebServices</h4>
                <div  style="width: 45%;">
                  <input type="text"  name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div style="width: 45%;">
                  <input type="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div style="width: 45%;">
                  <input type="text" name="number" id="number" placeholder="Your number" data-rule="number" data-msg="Please enter a valid contact number" />
                  <div class="validation"></div>
                </div>
                
                <div style="width: 45%;">
                  
                  <select name="choose_services">
                        <option value="">choose services</option>
                        <option value="sw">Static website</option>
                        <option value="cms">Cms Website</option>
                        <option value="ew">E-commerce Website</option>
                        <option value="mw">Matrimony Website</option>
                        <option value="seo">SEO Packages</option>
                        <option value="smo">SMO Packages</option>
                        <option value="ad">Android Development</option>
                        <option value="wd">Wordpress Design</option>
		            	</select>
                  
                  <div class="validation"></div>
                </div>
                <div style="width: 45%;">
                  <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                    placeholder="Somerise Your Projects In a few Words"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme btn-medium margintop10" type="submit" name="submit">Submit</button>
                  </div>
                  <br>
                </div>
              </div>
            </form>
          
          </div>
          <div class="span6">
          	<br><br>
          	<p style="color:#f77d64; font-size: 30px; ">YOU BID AN ORDER, WE DELIVER!</p><br>
<p style="font-size: 15px;">We are an enthusiastic and growing web designing company. We excel in Website Designing, Web Application Development and Mobile Application Development.</p><br>


<p style="font-size: 15px;">Today, the entire market revolves around the internet. Small business or big organization, every business for that matter needs website. Websites without a catchy title or picture cannot be entertained. We have a unique way of tailoring and delivering the best website with perfect designs and information.</p><br>

<p style="font-size: 15px;">You choose us as you Technology partner and we would deliver the best to you.<b style="color: #f77d64;">THAT IS OUR COMMITMENT!!!</p>
          </div>
      </div>
      

</body>
</html>
<?php
$con = mysqli_connect("localhost","root","","gateway");
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $services = $_POST['choose_services'];
  $message = $_POST['message'];
  
if($name =='' || $email =='' || $number=='' || $services=='' || $message=='' ){

  echo "<script> alert ('All fields are mandetory')</script>";
  exit();
}
  else{
    $query= "insert into enquiry_us (name,email,number,services,message) VALUES ('$name','$email','$number','$services','$message')";
    $query_run = mysqli_query($con,$query);
//sms start here
        
$authKey = "177402AOXUN9vCxmbW5ea805e3P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = "$number";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "GETWAY";

//Your message to send, Add URL encoding here.
$message = urlencode("Thank you $name.
We have received your enquiry and will respond to you as soon as possible. For urgent enquiries please contact us on call back request or customer care.");

//Define route 
$route = 4;
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://sms.adityahosting.com/api/sendhttp.php?";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

//  echo $output;
//send emails
$to = "$email";
$subject = "Response from Gateway Websolutions";
$message = "This is an test email to test Sendmail. Please do not block my account.";
$headers = "From: sales@gatewaywebsolution.com";
       mail( $to, $subject, $message, $headers );
       echo "<script>alert('your request accepted')</script>";

  }
}

?>
<?php include("include/footer.php"); ?>