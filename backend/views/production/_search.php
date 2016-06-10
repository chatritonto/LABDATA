<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="production-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Workno') ?>

    <?= $form->field($model, 'Line') ?>

    <?= $form->field($model, 'Shift') ?>

    <?= $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Date') ?>

    <?php // echo $form->field($model, 'Watertemp') ?>

    <?php // echo $form->field($model, 'Enddate') ?>

    <?php // echo $form->field($model, 'Modifiedon') ?>

    <?php // echo $form->field($model, 'Reference') ?>

    <?php // echo $form->field($model, 'ProductName') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
