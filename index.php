<?php
require "header.php";   // If missing → fatal error
?>

<p>This is the main content of the website displayed between header and footer.</p>

<?php
include "footer.php";   // If missing → only warning; script continues
?>
