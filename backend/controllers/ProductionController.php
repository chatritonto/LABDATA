<?php

namespace backend\controllers;

use Yii;
use app\models\Production;
use app\models\ProductionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Labdata;
use app\models\Model;
use yii\helpers\ArrayHelper;
/**
 * ProductionController implements the CRUD actions for Production model.
 */
class ProductionController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Production models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Production model.
     * @param integer $id
     * @return mixed
     */
     public function actionView($id)
    {
        $model = $this->findModel($id);
        $labdatas = $model->labdatas;

        return $this->render('view', [
            'model' => $model,
          'labdatas' =>$labdatas,
        ]);
    }
    /**
     * Creates a new Production model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
     public function actionCreate()
    {
        $model = new Production();
        $modelslabdata = [new Labdata];
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
            {    
            $modelslabdata = Model::createMultiple(Labdata::classname());
            Model::loadMultiple($modelslabdata, Yii::$app->request->post());

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelslabdata) && $valid;

            if ($valid) {
                $transaction =\Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelslabdata as $modellabdata) {
                            $modellabdata->Lab_id = $model->id;
                            if (! ($flag = $modellabdata->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
            'modelslabdata' => (empty($modelslabdata)) ? [new Labdata] : $modelslabdata
        ]);
    }

    /**
     * Updates an existing Production model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    
    public function actionUpdate($id)
{
$model = $this->findModel($id);
$modelslabdata = $model->labdatas;

if ($model->load(Yii::$app->request->post()) && $model->save())
{
$oldIDs = ArrayHelper::map($modelslabdata, 'id', 'id');
$modelslabdata = Model::createMultiple(Labdata::classname(), $modelslabdata);
Model::loadMultiple($modelslabdata, Yii::$app->request->post());
$deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelslabdata, 'id', 'id'))); 

$valid = $model->validate();
$valid = Model::validateMultiple($modelslabdata) && $valid;

if ($valid) {
$transaction = \Yii::$app->db->beginTransaction();
try {
if ($flag = $model->save(false)) {
if (! empty($deletedIDs)) {
    Labdata::deleteAll(['id' => $deletedIDs]);
}
foreach ($modelslabdata as $modellabdata) {
$modellabdata->Lab_id = $model->id;
if (! ($flag = $modellabdata->save(false))) {
$transaction->rollBack();
break;
}
}
}
if ($flag) {
$transaction->commit();
return $this->redirect(['index']);
}
} catch (Exception $e) {
$transaction->rollBack();
}
} 
} 
else {
return $this->render('update', [
'model' => $model,
'modelslabdata' => (empty($modelslabdata)) ? [new Labdata] : $modelslabdata
]);
}
}

    
    

    /**
     * Deletes an existing Production model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Production model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Production the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Production::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
