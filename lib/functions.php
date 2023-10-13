<?php
//TODO 1: require db.php
require(__DIR__ . "/db.php");
//require safer_echo.php
require(__DIR__ . "/safer_echo.php");
//TODO 2: filter helpers

//TODO 3: User helpers

//TODO 4: Flash Message Helpers
if(!$hasError)
{
    #Generated Hashes do not match, very unlikely
    $hash = password_hash($password,PASSWORD_BCRYPT);
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Users(email,password) VALUES (:email. :password)");
    try{
        $r = $stmt->execute([":email" => $email, ":password"=> $hash]);
        echo "Successfully Register!";
    }
    catch(Exception $e)
    {
        echo "There was an error registering<br>";
        echo "<pre>" . var_export($e,true) . "<pre>";
    }
}
?>