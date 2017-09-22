<?php

namespace frontend\modules\personas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\personas\models\ItinerarioPersona;

/**
 * ItinerarioPersonaSearch represents the model behind the search form about `frontend\modules\personas\models\ItinerarioPersona`.
 */
class ItinerarioPersonaSearch extends ItinerarioPersona
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdItinerarioPersona', 'DiaSemana', 'IdUsuarioGraba', 'IdUsuarioModifica'], 'integer'],
            [['HoraInicio', 'HoraFin', 'FechaGraba', 'FechaModifica'], 'safe'],
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
        $query = ItinerarioPersona::find();

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
            'IdItinerarioPersona' => $this->IdItinerarioPersona,
            'DiaSemana' => $this->DiaSemana,
            'HoraInicio' => $this->HoraInicio,
            'HoraFin' => $this->HoraFin,
            'IdUsuarioGraba' => $this->IdUsuarioGraba,
            'FechaGraba' => $this->FechaGraba,
            'IdUsuarioModifica' => $this->IdUsuarioModifica,
            'FechaModifica' => $this->FechaModifica,
        ]);

        return $dataProvider;
    }
}
