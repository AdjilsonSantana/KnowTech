<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;
use yii\helpers\StringHelper;
use yii\db\Expression;

/**
 * This is the model class for table "artigo".
 *
 * @property int $idartigo
 * @property string $titulo
 * @property string $texto
 * @property string $categoria_nomecategoria
 * @property resource|null $ficheiro
 * @property string $slug
 * @property string $create_at
 * @property string $update_at
 *
 * @property Categoria $categoriaNomecategoria
 * @property Comentario[] $comentarios
 * @property Revisao[] $revisaos
 */
class Artigo extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp'=>[
                'class'=> TimestampBehavior::className(),
                'createdAtAttribute' => 'create_at',
                'updatedAtAttribute' => 'update_at',
                'value' => new Expression('NOW()'),
            ],

            'sluggable'=>[
                'class' => SluggableBehavior::className(),
                'attribute' => 'titulo'
            ],

        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artigo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'texto', 'categoria_nomecategoria'], 'required'],
            [['texto'], 'string'],
            [['ficheiro'], 'file', 'skipOnEmpty'=>true],
            [['create_at','update_at'], 'safe'],
            [['titulo', 'slug'], 'string', 'max' => 100],
            [['categoria_nomecategoria'], 'string', 'max' => 60],
            [['categoria_nomecategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['categoria_nomecategoria' => 'nomecategoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idartigo' => 'Idartigo',
            'titulo' => 'Titulo (max. 100 caracteres)',
            'texto' => 'Texto',
            'categoria_nomecategoria' => 'Categoria',
            'ficheiro' => 'Imagem',
            'slug' => 'Slug',
            'create_at'=> 'D. Criação',
            'update_at'=>'D. Actualização',
        ];
    }

    public function getPreview()
    {
        $words = 11;

        if (StringHelper::countWords($this->texto) > $words)
        {
            return StringHelper::truncateWords($this->texto, $words);
        }
    }
    public function getPreviiew()
    {
        $words = 2;

        if (StringHelper::countWords($this->titulo) > $words)
        {
            return StringHelper::truncateWords($this->titulo, $words);
        }
    }

    /**
     * Gets query for [[CategoriaNomecategoria]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getCategoriaNomecategoria()
    {
        return $this->hasOne(Categoria::className(), ['nomecategoria' => 'categoria_nomecategoria']);
    }

    /**
     * Gets query for [[Comentarios]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['artigo_idartigo' => 'idartigo']);
    }

    /**
     * Gets query for [[Revisaos]].
     *
     * @return \yii\db\ActiveQuery|RevisaoQuery
     */
    public function getRevisaos()
    {
        return $this->hasMany(Revisao::className(), ['artigo_idartigo' => 'idartigo']);
    }

    /**
     * {@inheritdoc}
     * @return ArtigoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArtigoQuery(get_called_class());
    }
}
