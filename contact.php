<?php
/* Set e-mail recipient */
$myemail  = "carolinaprada9@gmail.com";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['Name']);
$email    = check_input($_POST['email']);
$phonenumber  = check_input($_POST['phonenumber']);
$reach  = check_input($_POST['reach']);
$how =  check_input($_POST['how']);
$what = check_input(implode(', ', (array)$_POST['what']));
$pgservices= check_input(implode(', ', (array)$_POST['GPServices']));
$presservices = check_input(implode(', ', (array)$_POST['PresServices']));
$deadline = check_input($_POST['deadline']);
$joke1 = check_input($_POST['joke1']);
$joke2 = check_input($_POST['joke2']);
$joke3 = check_input($_POST['joke3']);
$joke4 = check_input($_POST['joke4']);

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email
Phone Number: $phonenumber

Asked for:$what

Message: $how 

Message brought to you by Prada Designers.
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: index.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>