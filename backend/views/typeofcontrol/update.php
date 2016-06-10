<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Typeofcontrol */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Typeofcontrol',
]) . $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Typeofcontrols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="typeofcontrol-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
