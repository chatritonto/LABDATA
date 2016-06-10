<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Products;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\date\DatePicker;
use app\models\User;
use app\models\Period;
use app\models\Controllist;




/* @var $this yii\web\View */
/* @var $modelCustomer app\modules\yii2extensions\models\Customer */
/* @var $modelsAddress app\modules\yii2extensions\models\Address */

$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Controllist: " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Controllist: " + (index + 1))
    });
});
';

$this->registerJs($js);

/* @var $this yii\web\View */
/* @var $model app\models\Articlecard */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="articlecard-form">

    <?php $form = ActiveForm::begin(['id' =>'dynamic-form']); ?>
<div class="col-xs-6">
       <?= $form->field($model,'ProductCode')->widget(Select2::classname(),[
        'data'=>ArrayHelper::map(Products::find()->all(),'ProductCode','ProductCode'),
        'language'=>'en',
        'options'=>['placeholder'=>'Selects ProductCode','id'=>'ProductCode'],
        'pluginOptions'=>[
        'allowClear'=>true
        ],
        ]);?>
</div>
    <div class="col-xs-6">
    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-6">
    <?= $form->field($model, 'Colour')->textInput(['maxlength' => true]) ?>
        </div>
    <div class="col-xs-6">
    <?= $form->field($model, 'Type')->textInput(['maxlength' => true]) ?>
        </div>
    <div class="col-xs-6">
    <?= $form->field($model, 'FinishType')->textInput(['maxlength' => true]) ?>
        </div>
     <div class="col-xs-6">
    <?= $form->field($model, 'DrawingNo')->textInput(['maxlength' => true]) ?>
         </div>
     <div class="col-xs-6">
         
         <?= $form->field($model, 'Date')->widget(DatePicker::classname(), [
    'model' => $model,
   // 'attribute' => 'Date',
    'options'=>['placeholder'=>'Select Date','style'=>'width:250px;','Date'=>'Date'],
    'language' => 'en',
    'pluginOptions' => [
     'format' => 'yyyy-mm-dd'
     ],
    ]); ?>
         </div>
     <div class="col-xs-6">
         <?=$form->field($model,'Createby')->dropDownList(
            ArrayHelper::map(User::find()->all(),'username','username'),
            ['prompt'=>'Select User']
            )?>
     </div>
    
 <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> </h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 999, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsTypecon[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                   'Code',
                    'Name',
                    'Unit',
                    'NOM',
                    'MIN',
                    'MAX',
                    'AVG',
                    'Periodicity',
    ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsTypecon as $i => $modelTypecon): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left"><b>Control list </b></h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelTypecon->isNewRecord) {
                                echo Html::activeHiddenInput($modelTypecon, "[{$i}]id");
                                
                            }
                        ?>
                      
                        <div class="row">
                             <div class="col-sm-3">
                                 
                                 
                                 <?=$form->field($modelTypecon,"[{$i}]Name")->dropDownList(
                                 ArrayHelper::map(Controllist::find()->all(),'Name','Name','Code'),
                                  ['prompt'=>'Select Code']
                                  
                                         
                                         
                                 )?>
                               
                              
                             </div>
                            
                            <div class="col-sm-3">
                                
                               <?=$form->field($modelTypecon, "[{$i}]Periodicity")->dropDownList(
                                 ArrayHelper::map(Period::find()->all(),'Name','Name'),
                                ['prompt'=>'Select Periodicity']
                                 )?> 
                               
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-sm-3">
                                <?= $form->field($modelTypecon, "[{$i}]NOM")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-3">
                                <?= $form->field($modelTypecon, "[{$i}]MIN")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-3">
                                <?= $form->field($modelTypecon, "[{$i}]MAX")->textInput(['maxlength' => true]) ?>
                            </div>
                             <div class="col-sm-3">
                                <?= $form->field($modelTypecon, "[{$i}]AVG")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                         
                </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($modelTypecon->isNewRecord ?'Create' : 'Update',['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php
$script = <<< JS
// here you right all your javascript stuff
$('#ProductCode').change(function(){
	var productId=$(this).val();
	$.get('index.php?r=products/get-product-code',{ productId:productId},function(data){
	var data =$.parseJSON(data);
        $('#articlecard-productcode').attr('value',data.ProductCode);
        $('#articlecard-productname').attr('value',data.ProductName);
        $('#articlecard-colour').attr('value',data.Colour);
        $('#articlecard-type').attr('value',data.Type);
        $('#articlecard-finishtype').attr('value',data.FinishType);
        $('#articlecard-drawingno').attr('value',data.DrawingNo);
});
});
JS;
$this->registerJs($script);
?>
