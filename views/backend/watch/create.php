<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\watch\models\Watch */

$this->title = 'Create Watch';
$this->params['breadcrumbs'][] = ['label' => 'Watches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="watch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
