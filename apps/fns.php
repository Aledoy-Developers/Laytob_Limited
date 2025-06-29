<?php

function long_date($date)
{
    return date('jS M Y', strtotime($date));
}
function long_datetime($date)
{
    return date('jS M Y g:i:s', strtotime($date));
}
function short_date($date)
{
    return date('d M Y', strtotime($date));
}

function generate_tracking()
{
    $udate = date('m');
    $num2 = rand(10000,99999);
    $alpha = array('A','B','F','Q','D');
    shuffle($alpha);
    $tracking = $alpha[0].$udate.$num2;

    return $tracking;

}

function host_name()
{
    return 'aledoyhost.com';
}

function sender_name()
{
    return 'noreply@aledoyhost.com';
}

function admin_email()
{
    return 'solutions@aledoy.com';
}

function sender_email()
{
    return 'contact@notionworks.com.ng';
}



// function generate_tracking()
// {
//     $udate = date('m');
//     $num2 = rand(10000,99999);
//     $alpha = array('A','B','F','Q','D');
//     shuffle($alpha);
//     $tracking = $alpha[0].$udate.$num2;

//     return $tracking;
// }



function get_end_time($start)
{
    return date("Y-m-d: H:i:s", strtotime("+ 29 mins", strtotime($start)));
}

function get_val($tab, $col, $val, $return_val)
{
  global $db;
  $query = "select * from $tab where $col = '$val';";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);
  return $row[$return_val];
}

function get_token($name)
{
    return md5($name);
}

function organisation()
{
    return 'Aledoy';
}

function token($length = 32) {
    return bin2hex(random_bytes($length));
}


function check_extension($filename)
{
    if ($filename) {
        $file = explode('.', $filename);
        $file2 = array_reverse($file);

        $ext = strtolower($file2[0]);

        if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
            return 'valid';
        } else {
            return 'invalid';
        }
    }
}

function get_extension($filename)
{
    $file = explode('.', $filename);
    $file2 = array_reverse($file);
    $ext = strtolower($file2[0]);
    return $ext;
}


function get_category_name($token)
{
    global $db;
    $query = "select * from category where token = '$token'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    return $row['category_name'];
}

function case_study_img($token)
{
    global $db;
    $query = "select * from casestudy_images where casestudy_id = '$token'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    return $row['image_url'];
}

function get_delivery_time($token)
{
    global $db;
    $query = "select * from tracking_details where status = 'Ready for Pickup' and order_token = '$token'";
    $result = mysqli_query($db, $query);
    $num = mysqli_num_rows($result);
    if($num > 0)
    {
        $row = mysqli_fetch_array($result);
        return date('d M Y : h:i:a',strtotime($row['date_created']));
    }
    else{
        return 'No';
    }
}


function get_progress($token)
{
    global $db;
    $query = "select * from `order` where token = '$token'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    
    $status = strtolower($row['status']);

    if($status == 'pending')
    {
        return 10;
    }
    elseif($status == 'in transit')
    {
        return 50;
    }
    elseif($status == 'destination')
    {
        return 90;
    }
    elseif($status == 'ready for pickup')
    {
        return 100;
    }
    else{
        return 0;
    }
}

function short_summary($tab, $limit)
{
    global $db;
    if ($tab == 'blog') {
        $query = "select * from $tab order by id desc limit $limit,1";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);

        return strip_tags(substr($row['content'], 0, 100));
    } else {
        $query = "select * from $tab order by rand() limit $limit,1";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);

        return strip_tags(substr($row['title'], 0, 100));
    }
}

function case_study_img2($token, $limit)
{
    global $db;
    $query = "select * from casestudy_images where casestudy_id = '$token' limit $limit,1";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    $path = 'acms/' . $row['image_url'];
    if (file_exists($path)) {
        return '<img src="' . $path . '" class="img-fluid">';
    } else {
        return 'rfwer';
    }
}

function blog_date($date)
{
    $date = date('F jS, Y', strtotime($date));
    return $date;
}

function send_email($to, $name, $fromName, $subject, $message, $file)
{
    // Mail Template
    $mailcontent = '<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:500,700,400,300" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    </head>
    
    <bodystyle="font-family: Calibri;">
    <div style="width:100%; background-color:#FFF; padding:20px;">
        <div style="width:100%; margin:auto; padding:10px; background:#FFFFFF;">
             <div style="clear:both"></div>
             
                 <div id="white_area" style="background-color:#FFFFFF; ">
                <div style="font-size:16px; color:#010E42; padding-top:10px;">
                
                <div>
                <div style="margin-bottom:15px;" id="username">
                <input type="image" src="images/log.png" style="width:150px;" />
                
                    <p>Hello ' . ucwords($name) . ',</p>
    
                </div>
                </div>
                
                <div style="font-size:16px;"> <p></p>' . $message . '
                  
    
                </p>
                </div>
                <br>
               </div>
                  </div><!-- White area ends here -->
        <div style="color:#FFF; margin-top:20px; margin-bottom:20px;">
            <div style="text-align:center; font-size:36px;"></div>
        </div>
    
        <div style="clear:both;"></div>
        
        <div id="copyright" style="font-size:13px; margin-top:5px;">Copyright &copy; - ' . date('Y') . '</div>
        <div style="clear:both;"></div>
        </div>
    </div>
    </body>
    </html>';

    // More headers
    //    $headers = "MIME-Version: 1.0" . "\r\n";
    //    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    //    // More headers
    //    $headers .= "From: $fromName <".sender_email().">";
    //mail($to, $subject, $mailcontent, $headers);


    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0; // For debugging purposes; set to 0 for production
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    //sendgrid
    $mail->Username = 'contact@notionworks.com.ng';
    $mail->Password = 'notion@2024';
    $mail->Host = 'mail.notionworks.com.ng';
    $mail->SMTPSecure = 'ssl';
    $mail->setFrom(sender_email(), $fromName);
    $mail->AddAddress($to, $name);

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if ($file) {
        $mail->addAttachment($file);
    }

    $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
    $mail->Body    = $mailcontent;
    $mail->Subject = $subject;
    $mail->IsHTML(true);
    $mail->Send();

    return $mailcontent;
}

function send_order($to, $name, $fromName, $subject, $message, $file,$tracking_no,$drop_off_location,$freight,$email)
{
    // Mail Template
     $body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shipment Confirmation</title>
    </head>
    <body style="font-family: Arial, sans-serif; color: #333; margin: 0; padding: 0;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="center" style="padding: 20px 0;">
                    <table width="600" cellpadding="0" cellspacing="0" style="border: 1px solid #e0e0e0;">
                        <!-- Header -->
                        <tr>
                            <td style="background-color: #0066cc; padding: 20px; text-align: center;">
                                <h1 style="color: #ffffff; margin: 0;">Your Package Has Been Received</h1>
                            </td>
                        </tr>
                        
                        <!-- Content -->
                        <tr>
                            <td style="padding: 30px;">
                                <p style="margin: 0 0 20px 0;">Dear '.htmlspecialchars($email).',</p>
                                
                                <p style="margin: 0 0 20px 0;">Thank you for choosing HAUT LOGISTICS for your shipping needs! We\'ve successfully received your package and are preparing it for the next stage of its journey.</p>
                                
                                <div style="background-color: #f5f5f5; padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                                    <h3 style="margin-top: 0; color: #0066cc;">Shipment Details:</h3>
                                    <p style="margin: 10px 0;"><strong>Tracking Number:</strong> '.htmlspecialchars($tracking_no).'</p>
                                    <p style="margin: 10px 0;"><strong>Destination:</strong> '.htmlspecialchars($drop_off_location).'</p>
                                    <p style="margin: 10px 0;"><strong>Service:</strong> '.htmlspecialchars($freight).'</p>
                                </div>
                                
                                <p style="margin: 0 0 20px 0;">You can track your package in real-time using our <a href="http://localhost/haut_logistics/tracking-order" style="color: #0066cc; text-decoration: none; font-weight: bold;">Tracking Portal</a>.</p>
                                
                                <p style="margin: 0 0 20px 0;">We appreciate your trust in us and will ensure your shipment arrives safely and on time.</p>
                            </td>
                        </tr>
                        
                        <!-- Footer -->
                        <tr>
                            <td style="background-color: #f5f5f5; padding: 20px; text-align: center;">
                                <p style="margin: 0 0 10px 0;">Best regards,</p>
                                <p style="margin: 0 0 10px 0; font-weight: bold;">John Doe<br>HAUT LOGISTICS Team</p>
                                <p style="margin: 0;">
                                    <a href="http://localhost/haut_logistics" style="color: #0066cc; text-decoration: none;">www.haut-logistics.com</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>
    ';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'notification@nitaprivateaccess.net';
$mail->Password = 'Aledoy@2025';
$mail->Host = 'mail.nitaprivateaccess.net';
$mail->SMTPSecure = 'ssl';
$mail->From = "notification@nitaprivateaccess.net";
$mail->FromName = "Haut Logistics";
$mail->AddAddress($email);
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->send();

if(!$mail->send()) {
 echo 'Message could not be sent.';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
 exit;
}

    return $body;
}

function update_order($to, $name, $fromName, $subject, $message, $file, $tracking_no,$status, $current_location, $email, $description)
{
    // Mail Template
    $body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shipment Confirmation</title>
    </head>
    <body style="font-family: Arial, sans-serif; color: #333; margin: 0; padding: 0;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="center" style="padding: 20px 0;">
                    <table width="600" cellpadding="0" cellspacing="0" style="border: 1px solid #e0e0e0;">
                        <!-- Header -->
                        <tr>
                            <td style="background-color: #0066cc; padding: 20px; text-align: center;">
                                <h1 style="color: #ffffff; margin: 0;">Your Package Update</h1>
                            </td>
                        </tr>
                        
                        <!-- Content -->
                        <tr>
                            <td style="padding: 30px;">
                                <p style="margin: 0 0 20px 0;">Dear '.htmlspecialchars($email).',</p>
                                
                                <p style="margin: 0 0 20px 0;">This are the current updates for where your package is.</p>
                                
                                <div style="background-color: #f5f5f5; padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                                    <h3 style="margin-top: 0; color: #0066cc;">Shipment Details:</h3>
                                    <p style="margin: 10px 0;"><strong>Tracking Number:</strong> '.htmlspecialchars($tracking_no).'</p>
                                    <p style="margin: 10px 0;"><strong>Status:</strong> '.htmlspecialchars($status).'</p>
                                    <p style="margin: 10px 0;"><strong>Current Location:</strong> '.htmlspecialchars($current_location).'</p>
                                    <p style="margin: 10px 0;"><strong>Description:</strong> '.htmlspecialchars($description).'</p>
                                </div>
                                
                                <p style="margin: 0 0 20px 0;">You can track your package in real-time using our <a href="http://localhost/haut_logistics/tracking-order" style="color: #0066cc; text-decoration: none; font-weight: bold;">Tracking Portal</a>.</p>
                                
                                <p style="margin: 0 0 20px 0;">We appreciate your trust in us and will ensure your shipment arrives safely and on time.</p>
                            </td>
                        </tr>
                        
                        <!-- Footer -->
                        <tr>
                            <td style="background-color: #f5f5f5; padding: 20px; text-align: center;">
                                <p style="margin: 0 0 10px 0;">Best regards,</p>
                                <p style="margin: 0 0 10px 0; font-weight: bold;">John Doe<br>HAUT LOGISTICS Team</p>
                                <p style="margin: 0;">
                                    <a href="http://localhost/haut_logistics" style="color: #0066cc; text-decoration: none;">www.haut-logistics.com</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'notification@nitaprivateaccess.net';
$mail->Password = 'Aledoy@2025';
$mail->Host = 'mail.nitaprivateaccess.net';
$mail->SMTPSecure = 'ssl';
$mail->From = "notification@nitaprivateaccess.net";
$mail->FromName = "Haut Logistics";
$mail->AddAddress($email);
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->send();

if(!$mail->send()) {
 echo 'Message could not be sent.';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
 exit;
}

    return $body;
}

function send_quote($to, $name, $fromName, $subject, $message, $file, $fullname,$number,$email, $pick_up, $service_types,  $drop_off,  $weight, $dimensions,  $freight_class, $length, $notes, $date)
{
    // Mail Template
    $Subject = "Quote Request from $fullname";


 $body = "
    <html>
    <head>
        <title>Complaint Form Submission</title>
    </head>
    <body style='font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px;'>
        <div style='max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 8px;'>
            <img src='https://merchantminds.ng/sample/haut-logistics/dist/images/logo.png' alt='FOY Global Investments' style='width: 150px; margin-bottom: 20px;'>
            <h2 style='color: #333;'>Complaint Form Submission</h2>
            <p><strong>Full Name:</strong>  $fullname</p>
        <p><strong>Phone:</strong> $number</p>
        <p><strong>Email Address:</strong> $email</p>
        <p><strong>Pick up Location:</strong> $pick_up</p>
        <p><strong>Service Required:</strong> $service_types</p>
        <p><strong>Dropcoff Location:</strong> $drop_off</p>
        <p><strong>Weight:</strong> $weight</p>
        <p><strong>Dimensions:</strong> $dimensions</p>
        <p><strong>freight class:</strong> $freight_class</p>
        <p><strong>Length:</strong> $length</p>
        <p><strong>Note:</strong> $notes</p>
        <p><strong>Pickup Date:</strong><br>$date</p>
    </div>
    </body>
    </html>
    ";


   
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'notification@nitaprivateaccess.net';
$mail->Password = 'Aledoy@2025';
$mail->Host = 'mail.nitaprivateaccess.net';
$mail->SMTPSecure = 'ssl';
$mail->From = "notification@nitaprivateaccess.net";
$mail->FromName = "Haut Logistics";
$mail->AddAddress('oladimejig16@gmail.com');
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->send();


if(!$mail->send()) {
 echo 'Message could not be sent.';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
 exit;
}

    return $body;
}