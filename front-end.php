<!DOCTYPE HTML>
<html>
<head>
  <title>Front End Development - Matt Norkaitis</title>
  <?php // Include head
  include ("modules/head.php")
  ?>
</head>

<body>
<?php // Include nav
include ("modules/nav.php");
?>

<h1><?php echo $pageTitle ?></h1>

<ul>
  <?php
  // creates <li> with items from selected database
  $selectedCategories = return_items_from_category($portfolioArray, $pageNav);
  // list_item_with_html creates <li> items which contain item info from database
  foreach ($selectedCategories as $id) {
    echo list_items_with_html($id, $portfolioArray[$id]);
  } ?>
</ul>

<?php // Include footer
include ("modules/footer.php");
?>

</body>
</html>