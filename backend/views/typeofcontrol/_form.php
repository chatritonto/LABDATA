<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Typeofcontrol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="typeofcontrol-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MAX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AVG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Periodicity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ref_product')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
