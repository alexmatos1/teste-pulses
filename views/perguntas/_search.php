<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Dimensao;

/* @var $this yii\web\View */
/* @var $model app\models\PerguntasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perguntas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_dimensao')->dropDownList(ArrayHelper::map(Dimensao::find()->all(), 'id', 'nome'), array('prompt'=>'Selecione')); ?>


    <div class="form-group">
        <?= Html::submitButton('Filtrar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
