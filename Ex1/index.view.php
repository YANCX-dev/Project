<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise</title>
</head>
<body>
<form class="input-box" action="index.php" method="post">
    <p>Введите первое число</p>
    <input type="number" name="firstNum"/>
    <p>Введите второе число</p>
    <input type="number" name="secondNum"/>
    <p>Выберите знак</p>
    <select name="sign[]" id="inputSign">
        <option value="-">"-"</option>
        <option value="/">"/"</option>
        <option value="*">"*"</option>
        <option value="+">"+"</option>
    </select>
    <input type="submit" name="submit">
    <p><?php echo $result?></p>
</form>
</body>
</html>