<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Articlecard */

$this->title = Yii::t('app', 'Create Articlecard');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articlecards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articlecard-create">



    <?= $this->render('_form', [
        'model' => $model,
        'modelsTypecon'=>$modelsTypecon,
    ]) ?>

</div>
