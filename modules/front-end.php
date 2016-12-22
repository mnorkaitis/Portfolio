<h1>Front End Development</h1>

<ul>
  <?php
  // creates a random <li> with items from selected database
  // randomize database array and return a random list of keys in an array to use in <li> items later
  $selectedCategories = return_items_from_category($portfolioArray, $pageNav);
  // list_item_with_html creates <li> items which contain item info from database
  foreach ($selectedCategories as $id) {
    echo list_items_with_html($id, $portfolioArray[$id]);
  } ?>
</ul>