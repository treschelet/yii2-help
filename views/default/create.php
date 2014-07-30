<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model treschelet\help\models\Help */

$this->title = 'Create Help';
$this->params['breadcrumbs'][] = ['label' => 'Help', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>