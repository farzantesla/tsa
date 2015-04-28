<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LotSaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lot Sales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lot-sale-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
      <?php // Html::a('Create Lot Sale', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vehicle_users_id',
            'vehicle_id',
            'lot_number',
            'lot_price',
            // 'ending_date',
            // 'status',
            // 'sales_status',

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
