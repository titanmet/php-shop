<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h3>Ваш заказ под номером <?=$order->id?> принят</h3>
Ваш телефое: <?=$order->phone?>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd">Наименование</th>
            <th style="padding: 8px; border: 1px solid #ddd">Количество</th>
            <th style="padding: 8px; border: 1px solid #ddd">Цена</th>
            <th style="padding: 8px; border: 1px solid #ddd">Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($session['cart'] as $id=>$item) { ?>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd"><?=$item['goodQuantity']?></td>
            <td style="padding: 8px; border: 1px solid #ddd"><?=$item['price']?> рублей</td>
            <td style="padding: 8px; border: 1px solid #ddd"><?=$item['price']?> * <?=$item['goodQuantity']?> рублей</td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3">Итого:</td>
            <td><?=$session['cart.totalQuantity']?></td>
        </tr>
        <tr>
            <td colspan="3">На сумму:</td>
            <td><b><?=$session['cart.totalSum']?></b> рублей</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>