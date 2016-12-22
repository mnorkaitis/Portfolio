<?php

// Get main Category based ?page var

if (isset($_GET["page"])) {
  if ($_GET["page"] == "modeling"){
    $pageTitle = "3d Modeling";
    $pageNav = "modeling";
  }
  else if ($_GET["page"] == "painting"){
    $pageTitle = "Digital Painting";
    $pageNav = "painting";
  }
  else if ($_GET["page"] == "front-end"){
    $pageTitle = "Front End Development";
    $pageNav = "front-end";
  }
  else if ($_GET["page"] == "contact"){
    $pageTitle = "Contact";
    $pageNav = "contact";
  }
}
  else {
    $pageTitle = "Welcome";
    $pageNav = "home";
}
?>


<nav>
  <ul>
    <li class="nav-link <?php if ($pageNav == "modeling") {echo "nav-link-select";} ?> "><a href="/?page=modeling">Computer Modeling</a></li>
    <li class="nav-link <?php if ($pageNav == "painting") {echo "nav-link-select";} ?> "><a href="/?page=painting">Digital Painting</a></li>
    <li class="nav-link <?php if ($pageNav == "front-end") {echo "nav-link-select";} ?> "><a href="/?page=front-end">Front End Development</a></li>
    <li class="nav-link <?php if ($pageNav == "contact") {echo "nav-link-select";} ?> "><a href="/?page=contact">Contact</a></li>
  </ul>
</nav>