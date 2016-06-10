<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-6">
     <?= $form->field($model, 'ProductCode')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-6">
    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-6">
    <?= $form->field($model, 'Colour')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-6">
    <?= $form->field($model, 'Type')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-6">
    <?= $form->field($model, 'FinishType')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-6">
    <?= $form->field($model, 'DrawingNo')->textInput(['maxlength' => true]) ?>
    </div>   
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
