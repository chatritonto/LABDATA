<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\TypeofcontrolSearch;
use kartik\mpdf\Pdf;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticlecardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Articlecards');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articlecard-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>
        <?= Html::a(Yii::t('app', 'Create Articlecard'), ['create'], ['class' => 'btn btn-success']) ?>
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
	$searchModel=new TypeofcontrolSearch();
	$searchModel->Ref_product=$model->id;
	$dataProvider=$searchModel->search(Yii::$app->request->queryParams);
        
	return Yii::$app->controller->renderPartial('_typeofcontrol',[
	'searchModel'=>$searchModel,
	'dataProvider'=>$dataProvider,
	]);
        },
        ],
            'id',
            'ProductCode',
            'ProductName',
            'Colour',
            'Type',
            'FinishType',
            'DrawingNo',
            'Date',
            'Createby',
                
     
            
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



