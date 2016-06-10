<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LabdataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Labdatas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labdata-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Labdata'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
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
            'Lab_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
