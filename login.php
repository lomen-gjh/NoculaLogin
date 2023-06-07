<?php
    require "header.php";

    $users=array("janko"=>"1234", "helga"=>"hell", "adam"=>"buduciucitel");

    if (isset($_POST['odosli'])){
        //echo "Ahoj, ".$_POST['user'];
        if (isset($users[$_POST['user']])){
            if ($_POST['pass']==$users[$_POST['user']]){
                $_SESSION['user']=$_POST['user'];
                header("Location: welcome.php");
            }
            else{
                echo "<p>Wrong credentials, bro</p>";
            }
        }
        else{
            echo "<p>Wrong credentials, bro</p>";
        }
    }
?>
<div id='logindiv'>
    <h2>Sign in</h2>
    <form method='post'>
        <p><input name='user' type='text'></p>
        <p><input name='pass' type='password'></p>
        <p><input name='odosli' type='submit'></p>
    </form>
</div>


<?php
    require "footer.php";
?>
