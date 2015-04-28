<?php

namespace backend\controllers;

use Yii;
use backend\models\Review;
use backend\models\ReviewSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReviewController implements the CRUD actions for Review model.
 */
class ReviewController extends Controller
{
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
     * Lists all Review models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReviewSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Review model.
     * @param string $id
     * @param string $users_id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return mixed
     */
    public function actionView($id, $users_id, $vehicle_users_id, $vehicle_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $users_id, $vehicle_users_id, $vehicle_id),
        ]);
    }

    /**
     * Creates a new Review model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Review();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'users_id' => $model->users_id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Review model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $users_id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return mixed
     */
    public function actionUpdate($id, $users_id, $vehicle_users_id, $vehicle_id)
    {
        $model = $this->findModel($id, $users_id, $vehicle_users_id, $vehicle_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'users_id' => $model->users_id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Review model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $users_id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return mixed
     */
    public function actionDelete($id, $users_id, $vehicle_users_id, $vehicle_id)
    {
        $this->findModel($id, $users_id, $vehicle_users_id, $vehicle_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Review model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $users_id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return Review the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $users_id, $vehicle_users_id, $vehicle_id)
    {
        if (($model = Review::findOne(['id' => $id, 'users_id' => $users_id, 'vehicle_users_id' => $vehicle_users_id, 'vehicle_id' => $vehicle_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
