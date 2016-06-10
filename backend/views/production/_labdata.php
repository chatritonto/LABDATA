<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LabdataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productions';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labdata-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'ISCAV',
            'MoldNo',
            'Height',
            'Weight',
            'Fillful',
            'MoldNo',
            'Load',
            'MoldNo',
            'Impact',
            'MoldNo',
            'Pressure',
            'Origin',
            'Brimful',
           

         
        ],
    ]); ?>
</div>
