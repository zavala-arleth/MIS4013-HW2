<?php
$pageTitle = "Post Result";
  include "header.php";
?>
    <h1>Post Result</h1>
<?php
echo getDisplay();
include "footer.php";

function getDisplay() {
  if (isset($_POST['my-name']))   {
 return "<p>The value sent is :</p>" . $_POST['my-name'];
} else {
 return "<p>Nothing posted on this page.</p>";
}
}
?>
