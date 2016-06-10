<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Controllist */

$this->title = Yii::t('app', 'Create Controllist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Controllists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controllist-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
