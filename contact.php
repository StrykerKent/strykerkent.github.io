
				<?php
				  //if "email" variable is filled out, send email
				  if (isset($_POST['email']))  {
				  //Email information
				  $sendTo = "strykedog@yahoo.com";
				  $name = $_POST['name'];
				  $email = $_POST['email'];
				  $subject = $_POST['subject'];
				  $message = "name: " . $name . "\n email: " . $email . "\n subject: " . $subject . "\n message: " . $_POST['message'] ;
				  //send email
				  mail($sendTo, "From Contact Form at Stryk3r.com", $message, "From:" . "s@stryk3r.com");
				  //Email response
				  echo "<p>Contact form submitted successfully. Thank you.</p>";
				  }
				  //if "email" variable is not filled out, display the form
				  else  {
					echo "<p>There was an error. This page is not for humans.</p>";
				}
				?>