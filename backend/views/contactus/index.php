<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactUsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact uses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-us-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contact Us', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sender_name',
            'email_address:email',
            'subject',
            'message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
