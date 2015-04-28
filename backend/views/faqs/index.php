<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FaqsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faqs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faqs-index">
<a href="?r=content%2findex"><button type="button" class="btn-sm btn-primary">FAQ</button></a>
    <a href="?r=termsandconditions%2findex"><button type="button" class="btn-sm btn-primary">Terms and Conditions</button></a>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Faqs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'question',
            'answer',
            'status',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
