<?php

namespace backend\controllers;

use Yii;
use app\models\Articlecard;
use app\models\ArticlecardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Typeofcontrol;
use app\models\Model;
use kartik\mpdf\Pdf;
use yii\helpers\ArrayHelper;

/**
 * ArticlecardController implements the CRUD actions for Articlecard model.
 */
class ArticlecardController extends Controller
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
     * Lists all Articlecard models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticlecardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Articlecard model.
     * @param integer $id
     * @return mixed
     */
    
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $typeofcontrols = $model->typeofcontrols;

        return $this->render('view', [
            'model' => $model,
          'typeofcontrols' =>$typeofcontrols,
        ]);
    }


    /**
     * Creates a new Articlecard model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
     public function actionCreate()
    {
        $model = new Articlecard;
        $modelsTypecon = [new Typeofcontrol];
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
            {    
            $modelsTypecon = Model::createMultiple(Typeofcontrol::classname());
            Model::loadMultiple($modelsTypecon, Yii::$app->request->post());

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsTypecon) && $valid;

            if ($valid) {
                $transaction =\Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsTypecon as $modelTypecon) {
                            $modelTypecon->Ref_product = $model->id;
                            if (! ($flag = $modelTypecon->save(false))) {
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
            'modelsTypecon' => (empty($modelsTypecon)) ? [new Typeofcontrol] : $modelsTypecon
        ]);
    }

    /**
     * Updates an existing Articlecard model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    
    public function actionUpdate($id)
{
$model = $this->findModel($id);
$modelsTypecon = $model->typeofcontrols;

if ($model->load(Yii::$app->request->post()) && $model->save())
{
$oldIDs = ArrayHelper::map($modelsTypecon, 'id', 'id');
$modelsTypecon = Model::createMultiple(Typeofcontrol::classname(), $modelsTypecon);
Model::loadMultiple($modelsTypecon, Yii::$app->request->post());
$deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsTypecon, 'id', 'id'))); 

$valid = $model->validate();
$valid = Model::validateMultiple($modelsTypecon) && $valid;

if ($valid) {
$transaction = \Yii::$app->db->beginTransaction();
try {
if ($flag = $model->save(false)) {
if (! empty($deletedIDs)) {
    Typeofcontrol::deleteAll(['id' => $deletedIDs]);
}
foreach ($modelsTypecon as $modelTypecon) {
$modelTypecon->Ref_product = $model->id;
if (! ($flag = $modelTypecon->save(false))) {
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
'modelsTypecon' => (empty($modelsTypecon)) ? [new Typeofcontrol] : $modelsTypecon
]);
}
}

    
    
    
   public function actionReport()
{
    //get your html raw content without layouts
   // $content = $this->renderPartial('view');
    //set up the kartik\mpdf\Pdf component
    $pdf = new Pdf([
        'content'=>$this->renderPartial('_reportView'),
        'mode'=> Pdf::MODE_UTF8,
        'format'=> Pdf::FORMAT_A4,
        'orientation'=>Pdf::ORIENT_POTRAIT,
        'destination'=> Pdf::DEST_BROWSER,
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        'cssInline'=> '.kv-heading-1{font-size:18px}',
        'options'=> ['title'=> 'Article Card Reports'],
        'methods'=> [
               'setHeader'=>['Generated on: '.date("r")],
               'setFooter'=>['|page {PAGENO}|'],
                ]
        ]);
    return $pdf->render();
}
    /**
     * Deletes an existing Articlecard model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
   

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $ProductName = $model->ProductName;

        if ($model->delete()) {
            Yii::$app->session->setFlash('success', 'Record  <strong>"' . $ProductName . '"</strong> deleted successfully.');
        }

        return $this->redirect(['index']);
    }
    /**
     * Finds the Articlecard model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Articlecard the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articlecard::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
