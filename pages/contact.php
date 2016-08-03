<?
	$invalidMsgRegex = "/http:\/\/[a-zA-Z]+\.ru/";
				
	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:");
		return str_replace($bad,"",$string);
	}
	
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
				$nameFrom = htmlentities(clean_string($_POST['name']));
				$contactEmail = clean_string($_POST['email']);
				$userMsg = htmlentities(clean_string($_POST['message']));
				
				if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
					echo "<h2>Contact Submission Failed</h2><header>";
			    	echo "<p>Invalid Email Address</p>";
			    	return;
				}
				
				if ($userMsg=="" || preg_match ($invalidMsgRegex,$userMsg)) {
					echo "<h2>Contact Submission Failed</h2><header>";
			    	echo "<p>Invalid submission</p>";
			    	return;
				}
				
				$msgSubject="Website Contact Submission From ".clean_string($nameFrom);
				
				$mailMsg="";
				$mailMsg .= "Name: ".$nameFrom."\n";
				$mailMsg .= "Email: ".$contactEmail."\n";
				$mailMsg .= "\n\n".$userMsg."\n";
				
				$headers = "From: contact@harrischristiansen.com"."\n";
				$headers .= "Reply-to: ".$contactEmail;
				mail($msgTo,$msgSubject,$mailMsg,$headers);
				
				echo "<h2>Success - Message Sent</h2></header>";
			}
			?>
			<a href="/" class="button special">Return To Home</a>
	</section>
</div>

<?
	require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>