<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BiddingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Biddings';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo Html::a('Create Bidding', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vehicle_users_id',
            'vehicle_id',
            'bidder_id',
            'user_id',
            // 'car_id',
            // 'bid_price',
            // 'date_time',
            // 'description:ntext',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
 </section>

        </div>
        </aside><!-- /.right-side -->
</div>
            
<script>
    $(document).ready(function(){    
    
    $('a[data-method="post"]').hide();
    $('a[title="Update"]').hide();
    });
    
</script>
            
            
            
