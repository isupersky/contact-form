<?php
   $name    = $_POST['name'];
   $email   = $_POST['email'];
   $message = $_POST['message'];

if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))

 {
       echo "
<h2>Feedback</h2>
<form method='post' action='contact.php'>
   Name: <br /><input name='name' type='text' value='$name' /><br /><br />
   EMail: <br /><input name='email' type='text' value='$email' /><br /><br />
   Message:<br />
   <textarea name='message' cols='55' rows='8'>$message</textarea><br /><br />
   <input type='submit' value='Send' />
</form>
<p>All fields are required</p>
    ";
       exit;
   }

else {

$send_to = 'aakash9868sinha@gmail.com';
mail($send_to, "Name: $name" , $message, "From:aakashsinha.com by + $email");

echo "Thank you for your feedback";
echo '<meta http-equiv="refresh" content="3;URL=index.php" />';

}

?>