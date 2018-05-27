<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\watch\models\Tarih */

$this->title = 'Create Tarih';
$this->params['breadcrumbs'][] = ['label' => 'Tarihs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarih-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
