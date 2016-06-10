<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Period */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Period',
]) . $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Periods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="period-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
