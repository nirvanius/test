<!DOCTYPE html>
<html lang="ru">
<?php
if (!empty($_POST['num1'])) {
    $act = $_POST['act'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $plus = $_POST['plus'];
    $minus = $_POST['minus'];
    $div = $_POST['div'];
    $mult = $_POST['mult'];

    if ($act == 'plus') {
        $result = $num1 + $num2;
        echo $num1 . '*' . $num2 . '=' . $result;
    } elseif ($act == 'minus') {
        $result = $num1 - $num2;
        echo $num1 . '-' . $num2 . '=' . $result;
    } elseif ($act == 'div') {
        $result = $num1 / $num2;
        echo $num1 . '/' . $num2 . '=' . $result;
    } elseif ($act == 'mult') {
        $result = $num1 * $num2;
        echo 'Ответ: ' . $num1 . ' * ' . $num2 . ' = ' . $result;
    }
}
?>
<form method='post' 'action=''>
<p><label for="num1">Первое число</label>
<input id="num1" type="text" name="num1"></p>
<p><label for="num2">Второе число</label>
<input id="num2" type="text" name="num2"></p>
<p><label>Выберите действие</label>
            <select name='act'>
    <option value=''>Выберите действие...</option>
    <option value='plus'>Сложение</option>
    <option value='minus'>Вычетание</option>
    <option value='div'>Деление</option>
    <option value='mult'>Умножение</option>
    </p>
<p><input type="submit" value="Выполнить!"></p>
</form>