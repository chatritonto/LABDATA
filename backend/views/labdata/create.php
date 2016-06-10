<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Labdata */

$this->title = Yii::t('app', 'Create Labdata');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Labdatas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
