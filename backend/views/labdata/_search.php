<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LabdataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="labdata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ISCAV') ?>

    <?= $form->field($model, 'MoldNo') ?>

    <?= $form->field($model, 'Height') ?>

    <?= $form->field($model, 'Weight') ?>

    <?php // echo $form->field($model, 'Fillful') ?>

    <?php // echo $form->field($model, 'Load') ?>

    <?php // echo $form->field($model, 'Impact') ?>

    <?php // echo $form->field($model, 'Pressure') ?>

    <?php // echo $form->field($model, 'Origin') ?>

    <?php // echo $form->field($model, 'Brimful') ?>

    <?php // echo $form->field($model, 'Lab_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
