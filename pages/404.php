<?
	$page = "pageNotFound";
	$pageTitle = "Page Not Found";
	$pageDesc = "";
	$pageKeywords = "";
	require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>

		<!-- Error Page -->
			<section id="errorPage">
				<div class="inner">
					<h2>Page Not Found</h2>
					<p>The Requested Page Was Not Found</p>
				</div>
			</section>
					
<?
	require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>