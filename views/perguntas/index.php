<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Dimensao;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerguntasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perguntas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p style="margin-bottom: 50px">
        <?= Html::a('+ Criar Pergunta', ['create'], ['class' => 'btn btn-primary', 'style'=> 'float: right']) ?>
        <?= Html::a('Dimensões', ['dimensao/index'], ['class' => 'btn btn-secondary', 'style'=> 'float: right; margin-right: 20px; background-color: #c7c7c7; color: #000000']) ?>

    </p>

    <?php Pjax::begin(); ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn',
                'checkboxOptions' => function($model, $key, $index, $column) {
       if($model->id > 1)
          $class = 'ticked';
       else
          $class = 'unticked';
       return ['class' => $class];

    },
            ],
            [
                'class' => DataColumn::className(),
                'header' => 'Dimensão',
                'value' => function ($model) {
                    $grupo = Dimensao::findOne(['id' => $model->id_dimensao]);
                    return $grupo->nome;
                },
            ],
            'texto:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Ações',
                'template' => '{update} {delete}',
                'headerOptions' =>['style' => 'color: #3c8dbc; width:170px'],
                'buttons' => [
                    'update' => function ($url, $model) { return Html::a('Editar', $url, ['class' => 'btn btn-info', 'title' => Yii::t('yii', 'Editar'),]);},
                    'delete' => function ($url, $model) {return Html::a('Excluir', $url, ['class' => 'btn btn-danger', 'title' => Yii::t('yii', 'Excluir'), 'data' => ['confirm' => Yii::t('yii', 'Tem certesa que deseja excluir este item?'),'method' => 'post'],]);

                    },                    ]
            ],

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
<script>
    $(document).on('pjax:complete', function(data){
        var datas = $('#print-sticker-keren').attr('data-print');
        $('.ticked').attr("checked",true);
    });
</script>