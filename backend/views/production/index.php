<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\LabdataSearch;
use kartik\mpdf\Pdf;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Productions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Production'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=GridView::widget([
	'dataProvider'=>$dataProvider,
	'filterModel'=>$searchModel,
	'columns'=>[
	[
	'class' =>'kartik\grid\ExpandRowColumn',
	'value' =>function($model,$key,$index,$column){
		return GridView::ROW_COLLAPSED;
	},

	'detail'=>function($model,$key,$index,$column){
	$searchModel=new LabdataSearch();
	$searchModel->Lab_id=$model->id;
	$dataProvider=$searchModel->search(Yii::$app->request->queryParams);
        
	return Yii::$app->controller->renderPartial('_labdata',[
	'searchModel'=>$searchModel,
	'dataProvider'=>$dataProvider,
	]);
        },
        ],

            //'id',
            'Date',
            'Line',
             'Shift',
            'Status',
            'Workno',
            // 'Watertemp',
            // 'Enddate',
            // 'Modifiedon',
            'Reference',
            'ProductName',

           
           [
               
            'class' => 'yii\grid\ActionColumn',
            'template'=>'{copy} {view} {update} {delete}',
           'buttons'=>[
           'copy' => function($url,$model,$key){
        return Html::a('<i class="glyphicon glyphicon-duplicate"></i>',$url);
     
      }
    ]
],
    
    
    
    ],
    ]); 
    
    ?>
</div>
<?php
echo Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> Privacy Statement', ['/site/mpdf-demo-1'], [
    'class'=>'btn btn-danger', 
    'target'=>'_blank', 
    'data-toggle'=>'tooltip', 
    'title'=>'Will open the generated PDF file in a new window'
]);
?>