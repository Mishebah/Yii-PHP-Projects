<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'orderID',
           'client.clientName',
            'MSISDN',
            //'contentID',
            //'messageID',
            // 'payerNarration',
             'name',
            // 'checkoutRequestID',
            // 'recieptNumber',
             [
            'label'=>'Status',
            'format'=>'raw',
            'value' => function($model){
              $value = "Pending";
			  switch ($model->active)
			  {
				  case 1 :
				  $value ="Active";
				  break;
				  case 2:
				  $value = "Created";
				  break;
				  case 3:
				  $value ="Stopped";
				  break;
			  }
			  return $value;
            }
        ],
            // 'dateCreated',
            // 'dateModified',
            // 'insertedBy',
            // 'updatedBy',

            [
		'class' => '\kartik\grid\ActionColumn',
    'template' => '{view}   {delete}',
    'buttons' => [
        
    ],
],
        ],
    ]); ?>
</div>
