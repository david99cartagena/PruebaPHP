<!DOCTYPE html>
<html>

<body>

    <?php
    //echo "Logged out successfully";
    session_start();
    session_destroy();
    header("Location: index.php");
    //header("Location: index.php");
    ?>

</body>

</html>