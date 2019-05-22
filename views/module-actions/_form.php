<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModuleActions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="module-actions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'moduleID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entityActionID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'insertedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateCreated')->textInput() ?>

    <?= $form->field($model, 'updatedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateModified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
