<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dimensao */

$this->title = 'Criar Dimensão';
$this->params['breadcrumbs'][] = ['label' => 'Dimensaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dimensao-create">

    <h2 style="margin-bottom: 30px"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
