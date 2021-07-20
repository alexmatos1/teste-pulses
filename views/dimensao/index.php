<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DimensaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dimensão';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dimensao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p style="margin-bottom: 50px">
        <?= Html::a('+ Criar Dimensão', ['create'], ['class' => 'btn btn-primary', 'style' => 'float: right']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'nome',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Ações',
                'template' => '{update} {delete}',
                'headerOptions' =>['style' => 'color: #3c8dbc; width:170px'],
                'buttons' => [
                    'update' => function ($url, $model) { return Html::a('Editar', $url, ['class' => 'btn btn-info', 'title' => Yii::t('yii', 'Editar'),]);},
                    'delete' => function ($url, $model) {return Html::a('Excluir', $url, ['class' => 'btn btn-danger', 'title' => Yii::t('yii', 'Excluir'), 'data' => ['confirm' => Yii::t('yii', 'Tem certesa que deseja excluir este item?'),'method' => 'post'],]);
                    },
                ]
            ],

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
