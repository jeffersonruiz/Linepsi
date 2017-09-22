<?php

namespace frontend\modules\personas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\personas\models\Ciudad;

/**
 * CiudadSearch represents the model behind the search form about `frontend\modules\personas\models\Ciudad`.
 */
class CiudadSearch extends Ciudad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdCiudad'], 'integer'],
            [['CodigoDANE', 'NombreCiudad'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Ciudad::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'IdCiudad' => $this->IdCiudad,
        ]);

        $query->andFilterWhere(['like', 'CodigoDANE', $this->CodigoDANE])
            ->andFilterWhere(['like', 'NombreCiudad', $this->NombreCiudad]);

        return $dataProvider;
    }
}
