
<?php // Include header
include ("modules/header.php")
?>

<body>

	<?php // Include nav
	include ("modules/nav.php");
	?>


	<?php

		if (isset( $pageNav )) {
			if ( $pageNav == "home") {
				include ("modules/home.php");
			}
			else if ( $pageNav == "modeling") {
				include ("modules/modeling.php");
			}
			else if ( $pageNav == "painting") {
				include ("modules/painting.php");
			}
			else if ( $pageNav == "front-end") {
				include ("modules/front-end.php");
			}
			else if ( $pageNav == "contact") {
				include ("modules/contact.php");
			}
		}

	?>


	<?php // Include footer
	include ("modules/footer.php");
	?>

</body>
</html>