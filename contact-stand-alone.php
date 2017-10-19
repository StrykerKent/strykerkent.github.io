<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
		<style>
			.network-name {
				text-transform: uppercase;
				font-size: 14px;
				font-weight: 400;
				letter-spacing: 2px;
			}
			.li_center {
				text-align:center;
			}
			.btn_li {
				margin-top:100px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1 style="text-align:center;">Contact</h1>
			<p class="lead" style="text-align:center;">Contact me via:</p>
			<div class="row">
				<div class="col-md-6 li_center">
					<a href="http://www.linkedin.com/in/strykers" target="_blank" class="btn btn-default btn-lg btn_li"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a><br /><br />
					<a href="http://www.twitter.com/strykers" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a><br />
				</div>
				<div class="col-md-6">
				<?php
				  //if "email" variable is filled out, send email
				  if (isset($_REQUEST['email']))  {
				  //Email information
				  $sendTo = "s@stryk3r.com";
				  $name = $_REQUEST['name'];
				  $email = $_REQUEST['email'];
				  $subject = $_REQUEST['subject'];
				  $comment = $_REQUEST['comment'];
				  //send email
				  mail($sendTo, "$subject", $comment, "From:" . $email);
				  //Email response
				  echo "Contact form submitted successfully. Thank you.";
				  }
				  //if "email" variable is not filled out, display the form
				  else  {
				?>
				 <form id="contact-form" method="post" role="form">
				 	<div class="messages"></div>
					 <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Your Name </label>
								<input name="name" type="text" class="form-control" placeholder="" required="required" data-error="Name is required." />
							</div>
						</div>
					 </div>
					 <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Email </label>
								<input name="email" type="email" class="form-control" placeholder="" required="required" data-error="Email is required." />
							</div>
						</div>
					 </div>
					 <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Subject </label>
								<input name="subject" type="text" class="form-control" placeholder="" required="required" data-error="Subject is required." />
							</div>
						</div>
					 </div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message </label>
								<textarea name="comment" rows="4" class="form-control" placeholder="" required="required" data-error="Message is required."></textarea>
							</div>
						</div>
					 </div>
					 <input type="submit" value="Submit" class="btn btn-success btn-send" />
				  </form>
				<?php
				  }
				?>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
		<script>
	$(function () {

    $('#contact-form').validate();

    /*$('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});*/
	</script>
	</body>
	
</html>