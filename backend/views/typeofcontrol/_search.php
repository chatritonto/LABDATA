<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TypeofcontrolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="typeofcontrol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>
    <?= $form->field($model, 'Name') ?>
    <?= $form->field($model, 'NOM') ?>

    <?php // echo $form->field($model, 'MIN') ?>

    <?php // echo $form->field($model, 'MAX') ?>

    <?php // echo $form->field($model, 'AVG') ?>

    <?php // echo $form->field($model, 'Periodicity') ?>

    <?php // echo $form->field($model, 'Ref_product') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
