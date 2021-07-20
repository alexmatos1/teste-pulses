<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dimensao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dimensao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Cancelar', ['class' => 'btn btn-outline-secondary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
