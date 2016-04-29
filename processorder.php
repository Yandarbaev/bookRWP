<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Автозапчасти от Вована - Результаты заказа</title>
</head>
<body>
    <h1>Автозапчасти от Вована</h1>
    <h2>Результаты заказа</h2>
    <?php

        //создание коротких имен переменных
        $tireqty=$_POST['tireqty'];
        $oilqty=$_POST['oilqty'];
        $sparkqty=$_POST['sparkqty'];

        $totalqty = 0;
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "Заказано товаров: ".$totalqty."<br />";
        $totalamount = 0.00;

        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

        $totalamount = $tireqty * TIREPRICE
                     + $oilqty * OILPRICE
                     + $sparkqty * SPARKPRICE;

        echo "Итого: $".number_format($totalamount,2)."<br />";

        $taxrate = 0.01;  // /местный налог с продаж составляет 10%
        $totalamount = $totalamount * (1 + $taxrate);
        echo "Всего, включая налог с продаж: $".number_format($totalamount,2)."<br />";
    ?>
</body>
</html>