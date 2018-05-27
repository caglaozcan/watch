<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\watch\models\Tarih */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarih-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tarihsaat')->textInput() ?>

    <?= $form->field($model, 'yer')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
