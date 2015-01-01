<?
	$page = "contact";
	$pageTitle = "Contact";
	$pageDesc = "";
	$pageKeywords = "";
	require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>

<div class="wrapper style2">
	<section id="main" class="container special">
		<header class="major">
			<?
			if(isset($_POST['email'])) {
				$msgTo="harris@harrischristiansen.com";
				$msgSubject="Website Contact Submission From ".$nameFrom;
				$nameFrom = $_POST['name'];
				$contactEmail = $_POST['email'];
				$userMsg = $_POST['message'];
				
				function clean_string($string) {
					$bad = array("content-type","bcc:","to:","cc:","href");
					return str_replace($bad,"",$string);
				}
				
				if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
					echo "<h2>Contact Submission Failed</h2><header>";
			    	echo "<p>Invalid Email Address</p>";
			    	return;
				}
				
				$mailMsg="";
				$mailMsg .= "Name: ".clean_string($nameFrom)."\n";
				$mailMsg .= "Email: ".clean_string($contactEmail)."\n";
				$mailMsg .= "Message: ".clean_string($userMsg)."\n";
				
				$headers = "From: contact@harrischristiansen.com"."\n";
				$headers .= "Reply-to: ".clean_string($contactEmail);
				mail($msgTo,$msgSubject,$mailMsg,$headers);
				
				echo "<h2>Success - Message Sent</h2></header>";
			    echo "<p>I try to reply to all messages within 12 hours.</p>";
			}
			?>
			<a href="/" class="button special">Return To Home</a>
	</section>
</div>

<?
	require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>