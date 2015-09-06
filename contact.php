<?php /*

Contact Form
by Jacob Hume

*/

// Include the site template
require_once 'lib/template.php';


// Settings
define('MAIL_TO',		'jacob@fragdev.com');
//define(MAIL_TO,		'test@battlehillbrewing.com');
define('MAIL_FROM',		'DONOTREPLY@battlehillbrewing.com');
define('MAIL_SUBJECT',	'Message from the Battle Hill website');
define('PAGE_TITLE',	'Contact Battle Hill Brewing');

// Allow form data to be thrown
class FormException extends exception {
	public $data;
}


// Simple router; decide what to do/display
if(FormSubmitted()) {
	try {

		// Process form data, and store data in an array
		$data = ProcessForm();

		// Compile the message
		$message = 'From: '.$data['sender']."\n";

		if(!empty($data['sender'])) {
			$message .= 'Name: '.$data['sender']."\n";
		}

		if(!empty($data['email'])) {
			$message .= 'Email: '.$data['email']."\n";
		}

		if(!empty($data['contact'])) {
			$message .= 'Phone: '.$data['contact']."\n";
		}

		$message .= "\n\n".$data['message'];

		// Send the message
		mail(MAIL_TO, MAIL_SUBJECT, $message, 'From: '.MAIL_FROM);

		DisplaySuccess();
	}
	catch(FormException $error) {

		DisplayForm($error);
	}
}
else {
	DisplayForm();
}


// Display the contact form
function DisplayForm($error = false) {

	Top(PAGE_TITLE);

	if($error) {

		$data = $error->data;
	}
	else {
		$data = false;
	}
?>
	<h1 class="content-title"><?php echo PAGE_TITLE; ?></h1>
<?php
	if($error) {

		echo '<p>', $error->getMessage(), '</p>';
	}
?>
	<p>
		If you have any questions or comments, please feel free to send us a message.
	</p>
	<p>
		<em>Note:</em> Any field marked with a * is required.
	</p>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<p>
			<label for="sender">
				Name:*
				<input type="text" name="sender" id="sender" size="50" required<?php PreviousFieldValue('sender', $data);?>>
			</label>
		</p>
		<p>
			<label for="email">
				Email:
				<input type="email" name="email" id="email" size="50" <?php PreviousFieldValue('email', $data);?>>
			</label>
		</p>
		<p>
			<label for="contact">
				Phone:
				<input type="tel" name="contact" id="contact" size="50" <?php PreviousFieldValue('contact', $data);?>>
			</label>
		</p>
		<p>
			<label for="message">
				Message:*
				<textarea name="message" id="message" required><?php
	if($data && !empty($data['message'])) {

		echo htmlspecialchars($data['message'], ENT_COMPAT, 'UTF-8');

	}?></textarea>
			</label>
			<input type="hidden" name="submitted" value="y">
		</p>
		<p class="form-submit">
			<input type="submit" value="Send message">
		</p>
	</form>
<?php
	
	Bottom();
}


// Display a success message
function DisplaySuccess() {

	Top(PAGE_TITLE);
?>
	<h1 class="content-title">Message sent successfully</h1>
	<p>
		Your message was sent.
	</p>
<?php

	Bottom();
}


// Check to see if a form was submitted
function FormSubmitted() {

	return (!empty($_POST['submitted']) && $_POST['submitted'] === 'y');
}


// Process the form that has been submitted
function ProcessForm() {

	$error = false;
	$data = [];
	$fields = ['sender', 'contact', 'email', 'message'];

	// Validate form data
	foreach($fields as $index) {

		if(empty($_POST[$index])) {
			if($index === 'sender' ||
			$index === 'message') {
				$error = true;
			}
			else {
				$data[$index] = false;
			}
		}
		else {
			$data[$index] = filter_input(INPUT_POST, $index,
				FILTER_SANITIZE_STRING);
		}
	}

	// Error handling
	if($error) {

		$error = new FormException('There was a problem processing the form.');

		$error->data = $data;

		throw $error;
	}

	return $data;
}


function PreviousFieldValue($index, $data = false) {

	if($data && !empty($data[$index])) {

		echo ' value="', htmlspecialchars($data[$index], ENT_COMPAT, 'UTF-8'), '"';

	}
}
?>
