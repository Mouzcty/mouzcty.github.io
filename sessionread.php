<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
if(isset($_SESSION["favcolor"])){
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
}else{
    //echo "favcolor havent set";
    header('Location: project/login.php');
}
// echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
// echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>