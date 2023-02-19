<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="payok" content="payok_verification">
    <title>Document</title>
</head>

<body>
<?php

$array = array (
    $amount = 1,
    $payment = 9,
    $shop = 1886,
    $currency = 'RUB',
    $desc = 'Demo',
    $secret = 'mynewkey01521256487' 
);

$sign = md5 ( implode ( '|', $array ) );

?>
   <iframe src='https://payok.io/widget.php?merchant_id=1886&amount_type=1&amount=50&currency=RUB&desc=test&fio=0&adress=0&phone=0&button_text=Купить&sign=173febc313db4a18938d56a4e327fcd2 ' width='410' height='250' scrolling='no' frameBorder='0' style='position: relative; left: -15px;'> </iframe>
    <form action='https://payok.io/payment_link/1k1p1-9sb5b-c006w' method='POST'>

        <input type='hidden' name='amount' value="<?php echo $amount; ?>">
        <input type='hidden' name='payment' value="<?php echo $payment; ?>">
        <input type='hidden' name='shop' value="<?php echo $shop; ?>">
        <input type='hidden' name='currency' value="<?php echo $currency; ?>">
        <input type='hidden' name='desc' value="<?php echo $desc; ?>">
        <input type='hidden' name='email' value='test@payok.io'>
        <input type='hidden' name='method' value='card'>
        <input type='hidden' name='sign' value="<?php echo $sign; ?>">
        <input type='submit' value='Buy Now'>

    </form>
</body>

</html>