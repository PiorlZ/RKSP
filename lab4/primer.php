<?php session_start();
    // создаем новую сессию или
    // восстанавливаем текущую
if (!isset($_GET['go'])){
  echo "<form>
    Login: <input type=text name=login>
    Password: <input type=password name=passwd>
    <input type=submit name=go value=Go>
  </form>";
}else {
   $_SESSION['login']=$_GET['login'];
   // регистрируем переменную login
   $_SESSION['passwd']=$_GET['passwd'];
   // регистрируем переменную passwd
// теперь логин и пароль - глобальные
// переменные для этой сессии
    if ($_GET['login']=="pit" &&
        $_GET['passwd']=="123") {
        Header("Location: TopSecret.php");

    }else echo "Неверный ввод,
                попробуйте еще раз<br>";
} print_r($_SESSION);
    // выводим все переменные сессии
?>
<br>
<a href="start.php"> Вернуться назад</a>