<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perguntas".
 *
 * @property int $id
 * @property int $id_dimensao
 * @property string $texto
 */
class Perguntas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perguntas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dimensao', 'texto'], 'required'],
            [['id_dimensao'], 'integer'],
            [['texto'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_dimensao' => 'Dimensão',
            'texto' => 'Texto',
        ];
    }
}
