<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Vehicle;
use frontend\models\VehicleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use backend\models\Carmodels;


/**
 * VehicleController implements the CRUD actions for Vehicle model.
 */
class VehicleController extends Controller
{
    
    public $layout = 'dashboard';
    
    
    public function init()
    {
        parent::init();
             if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }


    }
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
     * Lists all Vehicle models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(array('site/index'));
        }
       //  echo Yii::$app->user->id;
//        $session = Yii::$app->session;
//        $user_id = $session->get('user_id');
//             echo $user_id;
        $searchModel = new VehicleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vehicle model.
     * @param string $id
     * @param string $users_id
     * @return mixed
     */
    public function actionView($id, $users_id)
    {
        return $this->render('view', ['model' => $this->findModel($id, $users_id),
        ]);
    }

    /**
     * Creates a new Vehicle model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //echo 'asdasd'; exit
        $model = new Vehicle();

         if ($model->load(Yii::$app->request->post())) {
            $model->users_id=Yii::$app->user->id;
            //$model->date_reg=date('Y-m-d h:i:s');
            $model->save();
           return $this->redirect(['view', 'id' => $model->id, 'users_id' => Yii::$app->user->id]);
        }  else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Vehicle model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $users_id
     * @return mixed
     */
    public function actionUpdate($id, $users_id)
    {
        $model = $this->findModel($id, $users_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'users_id' => $model->users_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Vehicle model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $users_id
     * @return mixed
     */
     public function actionMygarage()
    {
         //error_reporting(0);
      return $this->render('mygarage');
    }
    
    public function actionDetail()
    {
         //error_reporting(0);
      return $this->render('detail');
    }
    
    public function actionMessages()
    {
         //error_reporting(0);
      return $this->render('messages');
    }
    
     public function actionNotification()
    {
         //error_reporting(0);
      return $this->render('notification');
    }
    
    public function actionPurchased()
    {
         //error_reporting(0);
      return $this->render('purchased');
    }
    
    public function actionSoldvehicle()
    {
         //error_reporting(0);
      return $this->render('soldvehicle');
    }
    
    
    
    public function actionDelete($id, $users_id)
    {
        $this->findModel($id, $users_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vehicle model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $users_id
     * @return Vehicle the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $users_id)
    {
        if (($model = Vehicle::findOne(['id' => $id, 'users_id' => $users_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
    public function actionCar_model()
    {
      
 $mid =$_POST['id'];
     
       $cmodels = Carmodels::find()->where(['id' => $mid])->all();
    //   return $cmodel;
 
       echo '<label class="control-label" for="vehicle-model">Model</label><select Vehicle[model]  id="vehicle-model" class="form-control">';
       foreach($cmodels as $cmodel){
           echo '<option value = "'.$cmodel['id'].'" >'.$cmodel['title'].'</option>';
       }
       echo '</select>';
 
           
    }
    
    
    
    
}
