<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\watch\models\Tarih */

$this->title = 'Update Tarih: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tarihs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarih-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
