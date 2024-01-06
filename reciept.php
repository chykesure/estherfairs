<?php
if (isset($_POST['save'])) {
    // Step 1: Retrieve the Form Data
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $borough = $_POST['borough'];
    $country = $_POST['country'];
    $date = $_POST['date'];
    $tiers = $_POST['tiers'];
    $portion = $_POST['portion'];
    $size = $_POST['size'];
    $shape = $_POST['shape'];
    $prefer = $_POST['prefer'];
    $theme = $_POST['theme'];
    $budget = $_POST['budget'];
    $zipcode= $_POST['zipcode'];
    $inscript = $_POST['inscript'];
    $info = $_POST['info'];
    $filename = $_FILES['mypic']['name'];
    $filetmpname = $_FILES['mypic']['tmp_name'];
    $folder = 'imagesuploaded/';
    move_uploaded_file($filetmpname, $folder.$filename);
    

    // Step 2: Compose the Email Message
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $to = 'support@estherfairscakes.co.uk';
    $subject = 'Cake Quotation Details';
    $message = '<html><body>';
    $message .= '<h2>Order Details</h2>';
    $message .= '<table>';
    $message .= '<tr><td>Full Name:</td><td>'.$fname.'</td></tr>';
    $message .= '<tr><td>Email:</td><td>'.$email.'</td></tr>';
    $message .= '<tr><td>Phone Number:</td><td>'.$number.'</td></tr>';
    $message .= '<tr><td>Address 1:</td><td>'.$address1.'</td></tr>';
    $message .= '<tr><td>Address 2:</td><td>'.$address2.'</td></tr>';
    $message .= '<tr><td>City:</td><td>'.$city.'</td></tr>';
    $message .= '<tr><td>Borough:</td><td>'.$borough.'</td></tr>';
    $message .= '<tr><td>Country:</td><td>'.$country.'</td></tr>';
    $message .= '<tr><td>Date:</td><td>'.$date.'</td></tr>';
    $message .= '<tr><td>Tiers:</td><td>'.$tiers.'</td></tr>';
    $message .= '<tr><td>Portion:</td><td>'.$portion.'</td></tr>';
    $message .= '<tr><td>Size:</td><td>'.$size.'</td></tr>';
    $message .= '<tr><td>Shape:</td><td>'.$shape.'</td></tr>';
    $message .= '<tr><td>Preference:</td><td>'.$prefer.'</td></tr>';
    $message .= '<tr><td>Theme:</td><td>'.$theme.'</td></tr>';
    $message .= '<tr><td>Budget:</td><td>'.$budget.'</td></tr>';
    $message .= '<tr><td>Zipcode:</td><td>'.$zipcode.'</td></tr>';
    $message .= '<tr><td>Inscription:</td><td>'.$inscript.'</td></tr>';
    $message .= '<tr><td>Additional Information:</td><td>'.$info.'</td></tr>';
    $message .= '<tr><td>Sample image:</td><td><img src="https://estherfairscakes.co.uk/imagesuploaded/'.$filename.'"></td></tr>';
    $message .= '</table>';
    $message .= '</body></html>';

    // Step 4: Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
                    alert('Your cake quotation has been sent successfully!');
                    window.location.href='cakes';
                    </script>";
    } else {
        echo "<script>
                    alert('Unable to send email. Please try again later.');
                    window.location.href='cakes';
                    </script>";
    }
    
}elseif (isset($_POST['print'])) {
    // Step 1: Retrieve the Form Data
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $borough = $_POST['borough'];
    $country = $_POST['country'];
    $date = $_POST['date'];
    $tiers = $_POST['tiers'];
    $portion = $_POST['portion'];
    $size = $_POST['size'];
    $shape = $_POST['shape'];
    $prefer = $_POST['prefer'];
    $theme = $_POST['theme'];
    $budget = $_POST['budget'];
    $zipcode= $_POST['zipcode'];
    $inscript = $_POST['inscript'];
    $info = $_POST['info'];
    $filename = $_FILES['mypic']['name'];
    $filetmpname = $_FILES['mypic']['tmp_name'];
    $folder = 'imagesuploaded/';
    move_uploaded_file($filetmpname, $folder.$filename);
    

    // Step 2: Compose the Email Message
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $to = 'support@estherfairscakes.co.uk';
    $subject = 'Cake Quotation Details';
    $message = '<html><head>
    
    </head><body>';
    
    
    $message .= '<center>';
$message .= '<table id="print_table" style="border: 1px solid black; border-collapse: collapse; width: 100%;">';
$message .= '<thead>';
$message .= '<tr>';
$message .= '<th style="border: 1px solid black; padding: 8px;">Description</th>';
$message .= '<th style="border: 1px solid black; padding: 8px;">Detail</th>';
$message .= '</tr>';
$message .= '</thead>';
$message .= '<tbody>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Full Name:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$fname.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Email:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$email.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Phone Number</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$number.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Address 1:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$address1.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Address 2:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$address2.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">City:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$city.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Borough:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$borough.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Country:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$country.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Date:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$date.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Tiers:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$tiers.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Portion:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$portion.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Size:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$size.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Shape:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$shape.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Preference:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$prefer.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Theme:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$theme.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Budget:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$budget.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Zipcode:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$zipcode.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Inscription:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$inscript.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Additional Information:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;">'.$info.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td style="border: 1px solid black; padding: 8px;">Sample image:</td>';
$message .= '<td style="border: 1px solid black; padding: 8px;"><img src="https://estherfairscakes.co.uk/imagesuploaded/'.$filename.'" width="200" height="150"></td>';
$message .= '</tr>';
$message .= '</tbody>';
$message .= '</table>';
$message .= '</center>';

    $message .= '</table>';
    $message .= '<a href="quotation" style="text-decoration: none; background-color: #28a745; color: #fff; padding: 10px 20px; margin-bottom:10px; border-radius: 5px;">Back To Home</a>';
    $message .= '</center>';
    $message .= '</body></html>';

    echo $message;
    echo '<script>window.print();</script>';
    
    
}

?>