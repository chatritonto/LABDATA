<?php

use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TypeofcontrolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ArticleCard';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typeofcontrol-index">
    <b>Control list</b><?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'Code',
            'Name',
            //'Unit',
            'NOM',
            'MIN',
            'MAX',
            'AVG',
            'Periodicity',
        ],
    ]); ?>
</div>
