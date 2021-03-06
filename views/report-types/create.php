<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReportTypes */

$this->title = Yii::t('app', 'Create Report Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Report Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
