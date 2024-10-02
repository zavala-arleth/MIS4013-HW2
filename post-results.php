<?php
$pageTitle = "Post Result";
  include "header.php";
?>
    <h1>Post Result</h1>
<?php
if (isset($_POST['my-name']))   {
  ?>
  <p>The value sent is </p>
  <?php
    echo $_POST['my-name'];
} else {
  ?>
  <p>Nothing posted on this page</p>
  <?php
}
include "footer.php";
?>
