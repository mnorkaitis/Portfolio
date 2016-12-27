<!DOCTYPE HTML>
<html>
<head>
  <title>Contact - Matt Norkaitis</title>
  <?php // Include head
  include ("modules/head.php")
  ?>
</head>

<body>
<?php // Include nav
include ("modules/nav.php");
?>

<?php
// after contact-process.php, the header is redirected to index.php?page=contact&ty=thanks
if (isset($_GET["email"])) {
  // if contact-process returns ?meail=error-blank
  if ($_GET["email"] == "error-blank") {
    echo "<h1>Please Fill Out Form Completely</h1>";
  }
  // if contact-process returns ?email=error-invalid
  else if ($_GET["email"] == "error-invalid") {
    echo "<h1>Please enter valid email address</h1>";
  }
  else if ($_GET["email"] == "thanks") {
    echo "<h1>Thanks for contacting me, will talk soon!</h1>";
  }
}
else {
  ?>

  <h1>CONTACT</h1>
  <form method="post" action="/modules/contact-process.php">
    <table>
      <tbody>
      <tr>
        <th><label for="name">Name</label></th>
        <td><input type="text" id="name" name="name" /></td>
      </tr>
      <tr>
        <th><label for="email">Email</label></th>
        <td><input type="text" id="email" name="email" /></td>
      </tr>
      <tr>
        <th><label for="message">Message</label></th>
        <td><textarea id="message" name="message" ></textarea></td>
      </tr>
      <tr style="display: none">
        <?php // Honey Pot fields, hidden for bot, if filled in, exit ?>
        <th><label for="Hpot">Message</label></th>
        <td><textarea id="Hpot" name="Hpot" ></textarea></td>
      </tr>

      </tbody>
    </table>
    <input type="submit" value="send" >
  </form>

  <?php
}
?>

<?php // Include footer
include ("modules/footer.php");
?>

</body>
</html>





