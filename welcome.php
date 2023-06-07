<?php
    require "header.php";
    if (isset($_SESSION['user'])){
        $pictures=array("janko"=>"janko.jpg", "helga"=>"helga.jpg", "adam"=>"adam.jpg");
        echo "<h2>Welcome page</h2>";
        echo "<p>Welcome, {$_SESSION['user']}</p>";
        echo "<p>spicy content</p>";
        echo "<p><img src='images/{$pictures[$_SESSION['user']]}' alt='user_img'></p>";
        echo "<a href='logout.php'>Logout</a>";
    }
    else{
        echo "vypadni, brasko";
    }
    require "footer.php";
?>