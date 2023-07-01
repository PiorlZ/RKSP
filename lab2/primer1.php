<h2> Форма для регистрации студентов </h2>
<form action="primer2.php" method="POST">
Имя <br><input type=text name="first_name"
value="Введите имя"><br>
Фамилия <br><input type=text name="last_name"
value="Введите фамилию"><br>
E-mail <br><input type=text name="email"
value="Введите e-mail"><br>
<p> Выберите курс, который хотите посетить:<br>
<input type=checkbox name='kurs[]' value='PHP'>PHP<br>
<input type=checkbox name='kurs[]' value='Lisp'>Lisp<br>
<input type=checkbox name='kurs[]' value='Perl'>Perl<br>
<input type=checkbox name='kurs[]' value='Unix'>Unix<br>
<p> Что вы хотите, чтобы мы знали о вас? <br>
<textarea name = "comment" cols=32 rows=5></textarea><br><br>
<input type=submit value="Отправить">
<input type=submit value="Отменить">
</form>
<br>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>