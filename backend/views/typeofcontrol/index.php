<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TypeofcontrolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Typeofcontrols');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typeofcontrol-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Typeofcontrol'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
           // 'Code',
            'Name',
          //  'Unit',
            'NOM',
             'MIN',
            'MAX',
            'AVG',
            'Periodicity',
            'Ref_product',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
