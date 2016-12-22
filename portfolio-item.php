
<?php // Include header
include ("modules/header.php")
?>

<body>


            <!-- Temporary in page HTML -->
            <?php

            // This page shows sub items, so we determine if the incoming link has the ?pageId var set
            // If so we store the data on this item in $pagePortfolioItem

            if (isset($_GET["pageId"])) {
              $pageId = $_GET["pageId"];
              if (isset($portfolioArray[$pageId])){
                $pagePortfolioItem = $portfolioArray[$pageId];
              }
            }

            // For this page, we dont want to show it without an legit item ID, so if the ID is blank redirect
            if (!isset($pagePortfolioItem)) {
            header("location:index.php");
              exit;
            }

            //Set pageTitle from $pagePortfolioItem title
            $pageTitle = $pagePortfolioItem["title"];

            //Set Nav link to selected

            $pageNav = "modeling";


            ?>

<?php // Include nav
include ("modules/nav.php");
?>

            <h1>PORTFOLIO ITEM</h1>

            <div class="PORTFOLIO ITEM">
              <img src="<?php echo $pagePortfolioItem["img_src"]; ?>" alt="<?php echo $pagePortfolioItem["title"]; ?>">
            </div>
            <div class="PORTFOLIO DESCRIPTION">
              <h1><?php echo $pagePortfolioItem["title"] ?></h1>
              <ul>
                <?php
                  foreach ($pagePortfolioItem["skills_used"] as $portfolioSkillsUsed) {
                    echo "<li>$portfolioSkillsUsed</li>";
                  };
                ?>
              </ul>
            </div>


<?php // Include footer
include ("modules/footer.php");
?>

</body>
</html>