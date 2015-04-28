<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TermsAndConditionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Terms And Conditions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terms-and-conditions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Terms And Conditions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'subject',
            'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
