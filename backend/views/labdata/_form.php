<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Labdata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="labdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ISCAV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MoldNo')->textInput() ?>

    <?= $form->field($model, 'Height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fillful')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Load')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Impact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pressure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Origin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Brimful')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lab_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
