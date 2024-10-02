
<?php
$pageTitle = "Get Result";
  include "header.php";
?>
    <h1>Get Result</h1>
<?php
if (isset($_GET['my-name']))   {
  ?>
  <p>The value sent is :</p>
  <?php
    echo $_GET['my-name'];
} else {
  ?>
  <p>Nothing sent on this page.</p>
  <?php
}
include "footer.php";
?>
