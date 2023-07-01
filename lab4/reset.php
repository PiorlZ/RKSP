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

function find_user($login, $users) : array{ 
    foreach ($users as $usr)
    { 
        if ($usr[0] == $login) return $usr; 
    } 
    return []; 
} 

function update_pass($user, $users, $new_password)
{
    $str = "";
    for($i = 0; $i < sizeof($users) - 1; $i++)
    {
        for($j = 0; $j < 3; $j++)
        {
            if($user[0] == $users[$i][0] && $j == 1)
            {
                $str .= "$new_password:";
                continue;
            }

            $str .= $users[$i][$j];
            if($j != 2)
            {
                $str .= ":";
            }
        }
        $str .= PHP_EOL;
    }

    file_put_contents("data.txt", $str);
}

$users = fill_users_array($data);
$user = find_user($_SESSION['login'], $users); 

a:

if (!isset($_POST['try']))
{ 
    echo "<br>Incorrect password, enter the keyword to show password:<br>"; 
    echo "<form method='post'>
            Keyword: <input type='text' name = 'keyword'>
            <input type='submit' name='try' value='Enter'>
            </form>";
}
else
{
	$_SESSION['keyword'] = $_POST['keyword'];
	if ($_SESSION['keyword'] == $user[2])
	{ 	
		echo "<br> $user[1] - your password <br>";
        if(!isset($_POST['btn']))
        {
            echo "<form method=POST>
                  Введите новый пароль <input type=text name=change_pass>
                  <input type=submit name='btn' value='Изменить'>
                  </form>";
        }
        else
        {
            $new_password = $_POST['change_pass'];
            update_pass($user, $users, $new_password);
        }
        echo "<a href=launch3.php><br>Назад</a>";
	}
	else 
	{
        unset($_POST['try']);
        goto a;
	}
} 

?>
<a href="start.php"> Вернуться назад</a>