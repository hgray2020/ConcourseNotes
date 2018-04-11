
<?php
echo "<a ref='loginpage.html'></a>";
session_start();
session_destroy();
header('Location: login.php');

?>