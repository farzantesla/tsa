<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarmodelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carmodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carmodels-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carmodels', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'car_make_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
