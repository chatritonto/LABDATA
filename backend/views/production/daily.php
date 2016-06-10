<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Production */

$this->title = Yii::t('app', 'Create Production');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-daily">

    

    <?= $this->render('_form', [
        'model' => $model,
        'modelslabdata'=>$modelslabdata,
    ]) ?>

</div>
