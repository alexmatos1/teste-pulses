<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perguntas */

$this->title = 'Criar Pergunta';
$this->params['breadcrumbs'][] = ['label' => 'Perguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntas-create">

    <h2 style="margin-bottom: 30px"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
