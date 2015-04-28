<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Bidding */

$this->title = 'Create Bidding';
$this->params['breadcrumbs'][] = ['label' => 'Biddings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidding-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
