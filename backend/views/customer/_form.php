<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="col-xs-6">
    <?= $form->field($model, 'CustomerName')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-6">
    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-12">
    <?= $form->field($model, 'Contact')->textInput(['maxlength' => true]) ?>
    </div>
    
    
    
    <div class="form-group">  
        
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
   
    </div>

    <?php ActiveForm::end(); ?>

</div>
