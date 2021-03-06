<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Controllist */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Controllist',
]) . $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Controllists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="controllist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
