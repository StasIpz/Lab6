<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <form action='lab6.php' method='post'>
        <input type='text' name="firstName"/><span>Ім'я</span><br />
        <input type='text' name="lastName"/><span>Фамілія</span><br />
        <input type='text' name="address"/><span>Адреса</span><br />
        <input type='text' name="email"/><span>Електронна пошта</span><br />
        <input type='submit'>
    </form>
	<?php 
        // Функція, що визначає найменше значення серед заданих чисел
        function printMax($array)
		{
            print(max($array));
        }

        printMax([6, 4, 9, 11, 7, 5, 1]);
    ?>
</body>
</html>