<?php
	// Insert into db
	$servername = "dba.paradigmspiral.com";
	$username = "dreyc";
	$password = "Mordos60";
	$dbname = "paradigmspiral_giveaways";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		$insert = false;
		//die("Connection failed: " . $conn->connect_error);
	} 
	
	if($_POST){
		$email = $_POST['email'];
		$backer = $_POST['backer'];
		$insert = false;
		$id = 0;

		$sql = "select * from ax2016 where email = '".$email."'";

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			if ($conn->query($sql)->num_rows == 0) {
				$sql = "INSERT INTO ax2016 (email, backer) VALUES ('".$email."',".$backer.")";

				if ($conn->query($sql) === TRUE) {
					$sql = "select * from ax2016 where email = '".$email."' limit 1";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						$row = mysqli_fetch_assoc($result);
						$id = $row['ID'];
						
						if($id > 0)
						{
							$insert = true;
						}
						else{
							$insert = false;
							echo "Unable to generate your giveaway code.";
						}
					}
					else {
						$insert = false;
						echo "Unable to find your email address.";
					}	
					
				} else {
					$insert = false;
					echo "Unable to insert your email address.";
				}
			} else {
				$insert = false;
				echo "You have already been entered.";
			}
		} else {
			$insert = false;
			echo "Invalid email.";
		}
			
		// Do the email
		$message = 
		'<html>
		<head>
			<title>Paradigm Spiral AX2016 Giveaway</title>
			<style>
				*
				{
					box-sizing: border-box;
					-moz-box-sizing: border-box;
					-webkit-box-sizing: border-box;
					-webkit-text-size-adjust: none;
				}
				
				html, body {
					margin: 0;
					padding: 0;
				}
			</style>
		</head>
		<body style="color: #000000; width: 100%; max-width: 800px;">
			<table cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #000000; margin: auto; text-align: left; width: 100%; max-width: 800px">
				<!-- HEADER -->
				<tr>
					<td align="center" style="background-color: #ffffff; color: #000000; font-size: 28px;"><img src="http://paradigmspiral.com/img/banner.png" border="0" style="width: 100%; max-width: 480px;" /></td>
				</tr>
				<tr>
					<td align="center" style="background-color: #ffffff; color: #000000; font-family: Verdana, Helvetica, Sans-Serif; font-size: 28px;">AX2016 Giveaway</td>
				</tr>
				<!-- HEADER END -->
				<!-- BODY -->
				<tr>
					<td style="background-color: #ffffff; padding: 20px;">
						<table>
							<!-- Intro Text -->
							<tr>
								<td style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 14px; padding: 0 0 10px;">
									Thank you for entering our giveaway! Remember to
									<a href="https://www.kickstarter.com/projects/paradigmspiral/paradigm-spiral-the-animated-series" target="_blank">support our Kickstarter</a>!
									Winners will be chosen on Sunday, July 3 starting @ 3:00PM.
								</td>
							</tr>
							<!-- Intro Text End -->
							<!-- Ticket Info -->
							<tr>
								<td align="center" style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 14px; padding: 0 0 10px;">
									<table cellpadding="0" cellspacing="0" border="0" style="width: 480px;">
										<tr>
											<td style="background-color: #000000; margin: 0; padding: 0;"><img src="http://paradigmspiral.com/img/emailbannertop.png" border="0" style="display:block; margin: 0; padding: 0; border: 0;" /></td>
										</tr>
										<tr>
											<td align="center" style="background-color: #000000; color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 14px; margin: 0; padding: 10px 0;">
												Your Giveaway Code:
											</td>
										</tr>
										<tr>
											<td align="center" style="background-color: #000000; color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 28px; margin: 0; padding: 0 0 10px;">
												'.$id.'
											</td>
										</tr>
										<tr>
											<td style="background-color: #000000; margin: 0; padding: 0;"><a href="https://www.kickstarter.com/projects/paradigmspiral/paradigm-spiral-the-animated-series" target="_blank"><img src="http://paradigmspiral.com/img/emailbannerbottom.png" border="0" style="display:block; margin: 0; padding: 0; border: 0;" /></a></td>
										</tr>
									</table>
								</td>
							</tr>
							<!-- Ticket Info End -->
						</table>
					</td>
				</tr>
				<!-- BODY END -->
				<!-- FOOTER -->
				<tr>
					<td align="center" style="background-color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 12px; padding: 0 10px;">
						<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 1px;">
							<tr>
								<td style="background-color: #000000; height: 1px;">
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="background-color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 12px; height: 50px; padding: 0 10px;">
						&copy; '.date("Y").' - Paradgim Spiral. All Rights Reserved.
					</td>
				</tr>
				<!-- FOOTER END -->
			</table>
		</body>
		</html>';

		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		//$headers .= 'To: ' . $email . "\r\n";
		//$headers .= 'From: Paradgim Spiral <paradigmspiralanime@gmail.com>' . "\r\n";
		
		//send email
		if($insert)
		{
			mail($email, "Paradigm Spiral AX2016 Giveaway Confirmation", $message, $headers);
			echo "You have been successfully entered! You should receive an email confirmation with your giveaway code shortly (please check your spam).";
		}
	} if($_GET){
		$email = $_GET['email'];
		$insert = false;
		$id = 0;

		$sql = "select * from ax2016 where email = '".$email."' limit 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$id = $row['ID'];
			
			if($id > 0)
			{
				$insert = true;
			}
			else{
				$insert = false;
				echo "Unable to generate your giveaway code.";
			}
		}
		else {
			$insert = false;
			echo "Unable to find your email address.";
		}
			
		// Do the email
		if($insert)
		{
			echo 
			'<html>
			<head>
				<title>Paradigm Spiral AX2016 Giveaway</title>
				<style>
					*
					{
						box-sizing: border-box;
						-moz-box-sizing: border-box;
						-webkit-box-sizing: border-box;
						-webkit-text-size-adjust: none;
					}
					
					html, body {
						margin: 0;
						padding: 0;
					}
				</style>
			</head>
			<body style="color: #000000; width: 100%; padding-top: 10px;">
				<table cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #000000; margin: auto; text-align: left; width: 100%; max-width: 800px">
					<!-- HEADER -->
					<tr>
						<td align="center" style="background-color: #ffffff; color: #000000; font-size: 28px;"><a href="https://www.kickstarter.com/projects/paradigmspiral/paradigm-spiral-the-animated-series" target="_blank"><img src="http://paradigmspiral.com/img/banner.png" border="0" style="width: 100%; max-width: 480px;" /></a></td>
					</tr>
					<tr>
						<td align="center" style="background-color: #ffffff; color: #000000; font-family: Verdana, Helvetica, Sans-Serif; font-size: 28px;">AX2016 Giveaway</td>
					</tr>
					<!-- HEADER END -->
					<!-- BODY -->
					<tr>
						<td style="background-color: #ffffff; padding: 20px;">
							<table>
								<!-- Intro Text -->
								<tr>
									<td style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 14px; padding: 0 0 10px;">
										Thank you for entering our giveaway! Remember to
										<a href="https://www.kickstarter.com/projects/paradigmspiral/paradigm-spiral-the-animated-series" target="_blank">support our Kickstarter</a>
										and to <a href="http://paradigmspiral.com/?p=share" target="_blank">share our campaign</a>
										with your friends! Winners will be chosen on Sunday, July 3 @ 3:00PM. Check back at our
										booth (1425) to see if you\'ve won! If you\'ve purchased additional prize tickets
										at our booth, you can check your count
										<a href="http://paradigmspiral.com/ax2016/tickets.php?email='.urlencode($email).'" target="_blank">here</a>.
									</td>
								</tr>
								<!-- Intro Text End -->
								<!-- Ticket Info -->
								<tr>
									<td align="center" style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 14px; padding: 0 0 10px;">
										<table cellpadding="0" cellspacing="0" border="0" style="width: 480px;">
											<tr>
												<td style="background-color: #000000; margin: 0; padding: 0;"><a href="http://paradigmspiral.com/?p=share" target="_blank"><img src="http://paradigmspiral.com/img/emailbannertop.png" border="0" style="display:block; margin: 0; padding: 0; border: 0;" /></a></td>
											</tr>
											<tr>
												<td align="center" style="background-color: #000000; color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 14px; margin: 0; padding: 10px 0;">
													Your Giveaway Code:
												</td>
											</tr>
											<tr>
												<td align="center" style="background-color: #000000; color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 28px; margin: 0; padding: 0 0 10px;">
													'.$id.'
												</td>
											</tr>
											<tr>
												<td style="background-color: #000000; margin: 0; padding: 0;"><a href="http://paradigmspiral.com/?p=share" target="_blank"><img src="http://paradigmspiral.com/img/emailbannerbottom.png" border="0" style="display:block; margin: 0; padding: 0; border: 0;" /></a></td>
											</tr>
										</table>
									</td>
								</tr>
								<!-- Ticket Info End -->
							</table>
						</td>
					</tr>
					<!-- BODY END -->
					<!-- FOOTER -->
					<tr>
						<td align="center" style="background-color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 12px; padding: 0 10px;">
							<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 1px;">
								<tr>
									<td style="background-color: #000000; height: 1px;">
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="background-color: #ffffff; font-family: Verdana, Helvetica, Sans-Serif; font-size: 12px; height: 50px; padding: 0 10px;">
							&copy; '.date("Y").' - Paradgim Spiral. All Rights Reserved.
						</td>
					</tr>
					<!-- FOOTER END -->
				</table>
			</body>
			</html>';
		}
	}
	
	$conn->close();
?>