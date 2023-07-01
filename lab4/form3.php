<?php
session_start(); 
error_reporting(0);
$data = file_get_contents("4_3.txt");

function fill_users_array($data) : array{ 
    $res = [];
    $strs = explode(PHP_EOL, $data);
    for($i = 0; $i < sizeof($strs); $i++)
    {
        $a = explode(':', $strs[$i]);
        array_push($res, [$a[0], $a[1], $a[2]]);
    } 
    return $res; 
} 

function find_user($login, $users) : array
{ 
    foreach ($users as $usr)
    { 
        if ($usr[0] == $login) return $usr; 
    } 
    return []; 
} 

$users = fill_users_array($data);
$user = [];

if(!isset($_POST['go']))
{ 
    echo "<form method='post'>
          Login: <input type='text' name = 'login'><br>
          Password: <input type='password' name = 'passwd'>
          <input type='submit' name='go' value='Enter'>
          </form>"; 
} 
else
{ 
    $_SESSION['login'] = $_POST['login']; 
    $_SESSION['passwd'] = $_POST['passwd']; 
    $user = find_user($_SESSION['login'], $users); 
    if (sizeof($user) == 0) 
    { 
        echo "Undefined user"; 
        session_abort();
    } 
    elseif ($_SESSION['passwd'] == $user[1])
    { 
        echo "<br><h1>Успешный заход! </h1><br>";
        session_abort(); 
    }
    elseif ($_SESSION['passwd'] != $user[1] &&
            $_SESSION['login'] == $user[0])
    {
        header("Location: reset.php");
        exit;
    }
}
?>
<a href="start.php"> Вернуться назад</a>