<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdBarang')->textInput() ?>

    <?= $form->field($model, 'NamaBarang')->textInput() ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <?= $form->field($model, 'Jumlah')->textInput() ?>

    <?= $form->field($model, 'Detail')->textInput() ?>

    <?= $form->field($model, 'Foto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
