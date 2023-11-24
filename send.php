<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><center>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
phone :<input type="text" value="+254112163919" name="phone"><br /><br />
message:<textarea name="message"></textarea><br />
<button name="submit">submit</button>
</form></center>
<?php 
use AfricasTalking\SDK\AfricasTalking;
if(isset($_POST['submit'])){
$phone=$_POST['phone'];
$message=$_POST['message'];

 // Be sure to include the file you've just downloaded
    require_once('../AfricasTalkingGateway.php');
    require 'vendor/autoload.php';

    // Specify your login credentials
    $username   = "devjimin";
    $apikey     = "b4ca255b39c517b2c0f278ec887e1a1e43d290cfc638974e24fd9dd4a6668a71";
    // NOTE: If connecting to the sandbox, please use your sandbox login credentials
    // Specify the numbers that you want to send to in a comma-separated list
    // Please ensure you include the country code (+254 for Kenya in this case)

    
    $recipients = $phone;
    //$recipients = +254797143440;

    // And of course we want our recipients to know what we really do
    $message    = $message;
    //$message    = "kim its finally working";
    // Create a new instance of our awesome gateway class
    $gateway    = new AfricasTalkingGateway($username, $apikey);
    // NOTE: If connecting to the sandbox, please add the sandbox flag to the constructor:
    /*************************************************************************************
                 ****SANDBOX****
    $gateway    = new AfricasTalkingGateway($username, $apiKey, "sandbox");
    **************************************************************************************/
    // Any gateway error will be captured by our custom Exception class below, 
    // so wrap the call in a try-catch block
    try 
    { 
      // Thats it, hit send and we'll take care of the rest. 
      $results = $gateway->sendMessage($recipients, $message);
                
      foreach($results as $result) {
        // status is either "Success" or "error message" 

       
      }
    }
    catch ( AfricasTalkingGatewayException $e )
    {
      echo "Encountered an error while sending: ".$e->getMessage();
    }

                

  }              

?>



</body>
</html>
