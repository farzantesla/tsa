<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title; ?>
	 
	  <aside class="right-side">
		<div class="row ">
        <section class="cover_photo" >
        
  			<div class="auto_cent">
<div class="col-lg-12">

    <h1><?php echo 'My Profile' ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>

 
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'full_name',
            'username',
            'company_name',
            'phone_no',
            'business_no',
            'address',
            'website',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'vat',
           // 'status',
            'payment_status',
            //'created_at',
            //'updated_at',
            //'profile_status',
        ],
    ]) ?>
      			</div>
         </section>

        </div>
        </aside><!-- /.right-side -->
   
</div>
