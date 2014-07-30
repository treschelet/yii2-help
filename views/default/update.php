<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model treschelet\help\models\Help */

$this->title = 'Update Help: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Help', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="help-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>