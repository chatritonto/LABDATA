<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Articlecard */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Articlecard',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articlecards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="articlecard-update">

   
    <?= $this->render('_form', [
        'model' => $model,
       'modelsTypecon'=>$modelsTypecon,
    ]) ?>

</div>
