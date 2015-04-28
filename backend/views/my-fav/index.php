<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MyFavSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Favs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-fav-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
     <?php // Html::a('Create My Fav', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'users_id',
            'vehicle_users_id',
            'vehicle_id',
            'user_id',
            // 'car_id',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
<script>
    $(document).ready(function(){    
    
    $('a[data-method="post"]').hide();
    $('a[title="Update"]').hide();
    });
    
</script>