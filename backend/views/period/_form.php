<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Period */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="period-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="col-xs-2">
    <?= $form->field($model, 'Code')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-6">
    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>
    </div>
    <br>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
