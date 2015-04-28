<?php

namespace backend\controllers;

use Yii;
use backend\models\Bidding;
use backend\models\BiddingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BiddingController implements the CRUD actions for Bidding model.
 */
class BiddingController extends Controller
{
    
    //public $layout = 'dashboard';
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Bidding models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BiddingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bidding model.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @param string $bidder_id
     * @return mixed
     */
    public function actionView($id, $vehicle_users_id, $vehicle_id, $bidder_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $vehicle_users_id, $vehicle_id, $bidder_id),
        ]);
    }

    /**
     * Creates a new Bidding model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bidding();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id, 'bidder_id' => $model->bidder_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Bidding model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @param string $bidder_id
     * @return mixed
     */
    public function actionUpdate($id, $vehicle_users_id, $vehicle_id, $bidder_id)
    {
        $model = $this->findModel($id, $vehicle_users_id, $vehicle_id, $bidder_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id, 'bidder_id' => $model->bidder_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Bidding model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @param string $bidder_id
     * @return mixed
     */
    public function actionDelete($id, $vehicle_users_id, $vehicle_id, $bidder_id)
    {
        $this->findModel($id, $vehicle_users_id, $vehicle_id, $bidder_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bidding model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @param string $bidder_id
     * @return Bidding the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $vehicle_users_id, $vehicle_id, $bidder_id)
    {
        if (($model = Bidding::findOne(['id' => $id, 'vehicle_users_id' => $vehicle_users_id, 'vehicle_id' => $vehicle_id, 'bidder_id' => $bidder_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
