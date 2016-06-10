<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gcontrollist */

$this->title = Yii::t('app', 'Create Gcontrollist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gcontrollists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gcontrollist-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
