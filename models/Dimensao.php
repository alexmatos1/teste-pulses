<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dimensao".
 *
 * @property int $id
 * @property string $nome
 */
class Dimensao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dimensao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome da Dimensão',
        ];
    }
}
