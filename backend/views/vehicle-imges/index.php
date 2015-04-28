<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VehicleImgesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Imges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-imges-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
      <?php // Html::a('Create Vehicle Imges', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vehicle_users_id',
            'vehicle_id',
            'title',
            'description',
            // 'image',
            // 'car_id',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
