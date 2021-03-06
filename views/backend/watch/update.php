<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\watch\models\Watch */

$this->title = 'Update Watch: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Watches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="watch-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
