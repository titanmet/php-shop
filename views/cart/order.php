<?php
use yii\widgets\ActiveForm;
?>

<h1>Оформление заказа</h1>
<?php $form = ActiveForm::begin() ?>

<?=$form->field($order, 'name') ?>
<?=$form->field($order, 'email') ?>
<?=$form->field($order, 'phone') ?>
<?=$form->field($order, 'address') ?>
<button class="btn btn-success">Оформить заказ</button>

<?php ActiveForm::end() ?>
