<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Dimensao;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Perguntas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perguntas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'texto')->textInput() ?>


    <?= $form->field($model, 'id_dimensao')->dropDownList(ArrayHelper::map(Dimensao::find()->all(), 'id', 'nome'), array('prompt'=>'Selecione')); ?>


    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Cancelar', ['class' => 'btn btn-outline-secondary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
