<?php
session_start();
session_destroy();
echo '<script>
alert("You will be logged out. Press OK to proceed.");
window.location="http://localhost/edulexia/registration.html";
</script>';
?>