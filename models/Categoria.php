<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property string $nomecategoria
 *
 * @property Artigo[] $artigos
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomecategoria'], 'required'],
            [['nomecategoria'], 'string', 'max' => 60],
            [['nomecategoria'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nomecategoria' => 'Nomecategoria',
        ];
    }

    /**
     * Gets query for [[Artigos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArtigos()
    {
        return $this->hasMany(Artigo::className(), ['categoria_nomecategoria' => 'nomecategoria']);
    }
}
