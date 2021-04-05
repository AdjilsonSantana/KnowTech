<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Artigo;

/**
 * ArtigoSearch represents the model behind the search form of `app\models\Artigo`.
 */
class ArtigoSearch extends Artigo
{
    /**
     * {@inheritdoc}
     */
    public $procurar_artigo;
    public function rules()
    {
        return [
            [['idartigo'], 'integer'],
            [['titulo','procurar_artigo', 'datapublicacao', 'texto', 'categoria_nomecategoria'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Artigo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->orFilterWhere(['like', 'titulo', $this->procurar_artigo])
            ->orFilterWhere(['like', 'texto', $this->procurar_artigo])
            ->orFilterWhere(['like', 'datapublicacao', $this->procurar_artigo])
            ->orFilterWhere(['like', 'categoria_nomecategoria', $this->procurar_artigo]);

        return $dataProvider;
    }
}
