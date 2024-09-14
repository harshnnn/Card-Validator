<?php
session_abort();
echo "User has been logged out!";
header("location:LoginIndex.html");
exit();
?>