<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use app\models\Labdata;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use app\models\Articlecard;
use kartik\select2\Select2;


$status = [
    "Waiting" => "Waiting",
    "Running" => "Running",
    "Finished" => "Finished"
];

$Line = [
    "11"=>"11"
    
    
];
$Shift=[
    "Morning"=>"Morning",
    "Evening"=>"Evening",
    "Night"=>"Night"
    
];

$IS=[
    "1F"=>"1F",
    "1R"=>"1R",
    "2F"=>"2F",
    "2R"=>"2R",
    "3F"=>"3F",
    "3R"=>"3R",
    "4F"=>"4F",
    "4R"=>"4R",
    "5F"=>"5F",
    "5R"=>"5R",
    "6F"=>"6F",
    "6R"=>"6R",
    "7F"=>"7F",
    "7R"=>"7R",
    "8F"=>"8F",
    "8R"=>"8R",
    "9F"=>"9F",
    "9R"=>"9R",
    "10F"=>"10F",
    "10R"=>"10R",
    "11F"=>"11F",
    "11R"=>"11R",
    "12F"=>"12F",
    "12R"=>"12R",
    
];

$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Lab data: " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Lab data: " + (index + 1))
    });
});
';

$this->registerJs($js);

/* @var $this yii\web\View */
/* @var $model app\models\Production */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="production-form">
    
    <?php $form = ActiveForm::begin(['id' =>'dynamic-form']); ?>
    <div class="row">
         <div class="col-lg-4">
         <?= $form->field($model, 'Date')->widget(DateTimePicker::classname(), [
    'model' => $model,
   // 'attribute' => 'Date',
    'options'=>['placeholder'=>'Select Date','style'=>'width:250px;','Date'=>'Date'],
    'language' => 'en',
    'pluginOptions' => [
     'format' => 'yyyy-mm-dd hh:ii'
     ],
    ]); ?>
    
     </div>
        <div class="col-lg-2">
         
           <?=$form->field($model, 'Shift')->widget(Select2::classname(), [
             'data' => $Shift,
             'options' => ['placeholder' => 'Select Shift'],
             'pluginOptions' => [
             'allowClear' => true
               ],
            ]);
            ?>
   
     </div>
        <div class="col-lg-2">
           <?=$form->field($model, 'Line')->widget(Select2::classname(), [
             'data' => $Line,
             'options' => ['placeholder' => 'Select Status'],
             'pluginOptions' => [
             'allowClear' => true
               ],
            ]);
            ?>
   
    
     </div>
        <div class="col-lg-2">
           <?= $form->field($model, 'Watertemp')->textInput()  ?>  
        </div>
   
    </div>
    <div class="row">
        <div class="col-lg-2">
    <?= $form->field($model, 'Workno')->textInput() ?>
    </div>
     
        
     <div class="col-lg-2">
         
           <?=$form->field($model, 'Status')->widget(Select2::classname(), [
             'data' => $status,
             'options' => ['placeholder' => 'Select Status'],
             'pluginOptions' => [
             'allowClear' => true
               ],
            ]);
            ?>
   
     </div>
        <div class="col-lg-2">
         <?= $form->field($model,'Reference')->widget(Select2::classname(),[
        'data'=>ArrayHelper::map(Articlecard::find()->all(),'ProductCode','ProductCode'),
        'language'=>'en',
        'options'=>['placeholder'=>'Selects ProductCode','id'=>'ProductCode'],
        'pluginOptions'=>[
        'allowClear'=>true
        ],
        ]);?>      
   
     </div>
        <div class="col-lg-4">
    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>
     </div>
        
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
                'model' => $modelslabdata[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                   'ISCAV',
                    'MoldNo',
                    'Height',
                    'Weight',
                    'Fillful',
                    'Load',
                    'Impact',
                    'Pressure',
                    'Origin',
                    'Brimful',
               
    ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
                
            <?php foreach ($modelslabdata as $i => $modellabdata): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                  
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left"><b>Phisical Lab Data Collecting</b></h3>
                        
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                
                    
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modellabdata->isNewRecord) {
                                echo Html::activeHiddenInput($modellabdata, "[{$i}]id");
                            }
                        ?>
                       
                        <div class="row">
                             <div class="col-sm-2">
                               
                               <?=$form->field($modellabdata, "[{$i}]ISCAV")
                                 ->dropDownList($IS,['prompt'=>'Select IS']);
                                 ?>        
                             </div>
                            <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]MoldNo")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]Height")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-1">
                                
                              <?= $form->field($modellabdata, "[{$i}]Weight")->textInput(['maxlength' => true]) ?>
                               
                            </div>   
                        
                            <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]Fillful")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]Load")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]Impact")->textInput(['maxlength' => true]) ?>
                            </div>
                             <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]Pressure")->textInput(['maxlength' => true]) ?>
                            </div>
                               <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]Origin")->textInput(['maxlength' => true]) ?>
                            </div>
                         <div class="col-sm-1">
                                <?= $form->field($modellabdata, "[{$i}]Brimful")->textInput(['maxlength' => true]) ?>
                            </div>
                         
                </div>
            <?php endforeach; ?>
            </div>
                    </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>
         
        
    <div class="form-group">
        <?= Html::submitButton($modellabdata->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

</div>
<?php
$script = <<< JS
// here you right all your javascript stuff
$('#ProductCode').change(function(){
	var productId=$(this).val();
	$.get('index.php?r=products/get-product-code',{ productId:productId},function(data){
	var data =$.parseJSON(data);
        $('#articlecard-productcode').attr('value',data.ProductCode);
        $('#production-productname').attr('value',data.ProductName);
       
});
});
JS;
$this->registerJs($script);
?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   