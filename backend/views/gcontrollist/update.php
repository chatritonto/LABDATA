<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gcontrollist */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Gcontrollist',
]) . $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gcontrollists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gcontrollist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
