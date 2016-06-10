<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Customer',
]) . $model->CustomerCode;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CustomerCode, 'url' => ['view', 'id' => $model->CustomerCode]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="customer-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
