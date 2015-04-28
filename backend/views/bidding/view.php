<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bidding */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Biddings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id, 'bidder_id' => $model->bidder_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id, 'bidder_id' => $model->bidder_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vehicle_users_id',
            'vehicle_id',
            'bidder_id',
            'user_id',
            'car_id',
            'bid_price',
            'date_time',
            'description:ntext',
            'status',
        ],
    ]) ?>
      			</div>
         </section>

        </div>
        </aside><!-- /.right-side -->
</div>
