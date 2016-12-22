<?php

// takes a database, takes a 'skill' passed in from the page, checks to see if the value of 'skill' from the page matches the 'skill' key in the database,
// if true is stores the keys in the array $output[], these keys are then used in the list_items_with_html function to show these items only.
function return_items_from_category($database, $databaseSkill) {
  //sets empty database
  $output = [];
  // loops through passed in database and returns everything in two variables in $id the keys are stored, in $item the item itself is stored
  foreach ($database as $id => $item) {
    // the databaseSkill is passed in from the page itself, set in the navigation, if this name matches the name in the database under 'skill' then the keys of these items are stored in $output
    if ( strtolower($databaseSkill) == strtolower($item["skill"]) ) {
      //so we want to be able to sort the array we are creating, and right now we only have the IDs in there of the matching items
      //so we also need to add ["title"] to the array as well, and we only want the titles of the IDs we have filtered
      //so here take the remaining items left in $item, and take out the titles.. as we loop through, we store these in $sort
      //we put a string of all the 'titles' in the variable $sort
      $sort = $item["title"];
      // Ok this is a strange technique.. at this point $sort is a string with 'titles' of the IDs
      // Every time it loops through, it adds the 'title' property related to the $id to the key
      // So, $output[$id] = $sort; actually means:
      // $output["M1"] = "TITLE";
      // $output["M2"] = "TITLE";
      $output[$id] =  $sort;
    }
  }
  // asort sorts the contents of the array
  asort($output);
  // after sorting, only return the keys
  return array_keys($output);
}


// list of database items in the <li> format. Passes in a database, items in the database are displayed based on their keys
function list_items_with_html($id, $databaseItem) {
  $output = "<li><a href='portfolio-item.php?pageId=" . $id . "'><img src='" . $databaseItem["img_src"] . "' alt='" . $databaseItem["title"] . "'>
      <p>" . $databaseItem["title"] . "</p></a></li>";
  return $output;
}



?>