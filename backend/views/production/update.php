<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Production */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Production',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="production-update">

   

    <?= $this->render('_form', [
        'model' => $model,
        'modelslabdata'=>$modelslabdata,
    ]) ?>

</div>
