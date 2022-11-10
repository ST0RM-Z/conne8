<?php
    require_once("functions.inc.php");
    redirect();
    $error=[];
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["email"])){
            $errors[]="<h3>Please enter a valid email</h3>";
        }
        else  if(empty($_POST["password"])){
            $errors[]="<h3>Please enter a valid password</h3>";
        }
        else
        {
            if(login($_POST["email"],$_POST["password"]))
            {
                $errors[]="<h3>LoginSuccessfull</h3>";
            }
            else{
                $errors[]="<h3>Login Fail</h3>";
            }
        }
    }

?>
<!doctype html>
<html>
    <body>
        <h1>Login</h1>
        <form>
            <input type="text" name="email" placeholder="email" />
             <input type="password" name="password" placeholder="password" />
             
            <input type="submit" value="submit" />
        </form>
        <?php
        if(isset($errors)){
            foreach($errors as $error)
                echo $error;
            
        }
        var_dump($_SESSION);
        ?>
    </body>
</html>



