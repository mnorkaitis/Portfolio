<?php
// Use $_GET to see what page is being displayed below
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
  else if ($_GET["page"] == "architecture"){
    $pageTitle = "Architecture";
    $pageNav = "architecture";
  }
}
  else {
    $pageTitle = "Welcome";
    $pageNav = "home";
} ?>

<?php //Nav highlights the current page from $_GET  ?>
<nav>
  <ul>
    <li class="nav-link <?php if ($pageNav == "painting") {echo "nav-link-select";} ?> "><a href="/digital-painting.php/?page=painting">Digital Painting</a></li>
    <li class="nav-link <?php if ($pageNav == "front-end") {echo "nav-link-select";} ?> "><a href="/front-end.php/?page=front-end">Front End Development</a></li>
    <li class="nav-link <?php if ($pageNav == "architecture") {echo "nav-link-select";} ?> "><a href="/architecture.php/?page=architecture">Architecture</a></li>
    <li class="nav-link <?php if ($pageNav == "modeling") {echo "nav-link-select";} ?> "><a href="/modeling.php/?page=modeling">Character Modeling</a></li>
    <li class="nav-link <?php if ($pageNav == "contact") {echo "nav-link-select";} ?> "><a href="/contact.php/?page=contact">Contact</a></li>
  </ul>
</nav>
