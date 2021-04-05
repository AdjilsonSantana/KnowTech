<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property int $idcomentario
 * @property string $texto
 * @property int $utilizador_idutilizador
 *
 * @property Artigo[] $artigos
 * @property Utilizador $utilizadorIdutilizador
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['texto', 'utilizador_idutilizador'], 'required'],
            [['texto'], 'string'],
            [['utilizador_idutilizador'], 'integer'],
            [['utilizador_idutilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['utilizador_idutilizador' => 'idutilizador']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcomentario' => 'Idcomentario',
            'texto' => 'Texto',
            'utilizador_idutilizador' => 'Utilizador Idutilizador',
        ];
    }

    /**
     * Gets query for [[Artigos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArtigos()
    {
        return $this->hasMany(Artigo::className(), ['comentario_idcomentario' => 'idcomentario']);
    }

    /**
     * Gets query for [[UtilizadorIdutilizador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizadorIdutilizador()
    {
        return $this->hasOne(Utilizador::className(), ['idutilizador' => 'utilizador_idutilizador']);
    }
}
