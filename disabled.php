<?php
setcookie("test_cookie" , "test" , time() + 3600, '/');
?>
<html>
    <body>

    <?php
    if(count($_COOKIE) > 0) {
        echo "cookies are enabled.";
    } else{
        echo "cookies are disabled like agnieszka przygodzka";
    } 
    ?>

</body>
</html>