<?php

namespace frontend\modules\servicio\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\servicio\models\TipoPruebaPsicologica;

/**
 * TipoPruebaPsicologicaSearch represents the model behind the search form about `frontend\modules\servicio\models\TipoPruebaPsicologica`.
 */
class TipoPruebaPsicologicaSearch extends TipoPruebaPsicologica
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdTipoPruebaPsicologica', 'Orden', 'EstadoTipoPruebaPsicologica', 'IdTipoProceso'], 'integer'],
            [['NombreTipoPruebaPsicologica', 'Descripcion'], 'safe'],
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
        $query = TipoPruebaPsicologica::find();

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
            'IdTipoPruebaPsicologica' => $this->IdTipoPruebaPsicologica,
            'Orden' => $this->Orden,
            'EstadoTipoPruebaPsicologica' => $this->EstadoTipoPruebaPsicologica,
            'IdTipoProceso' => $this->IdTipoProceso,
        ]);

        $query->andFilterWhere(['like', 'NombreTipoPruebaPsicologica', $this->NombreTipoPruebaPsicologica])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion]);

        return $dataProvider;
    }
    
    public function searchHisoriaClinica($params)
    {
        $query = TipoPruebaPsicologica::find();

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
            'IdTipoPruebaPsicologica' => $this->IdTipoPruebaPsicologica,
            'Orden' => $this->Orden,
            'EstadoTipoPruebaPsicologica' => 1, //Activo
            'IdTipoProceso' => 1, // Proceso Normal
        ]);

        $query->andFilterWhere(['like', 'NombreTipoPruebaPsicologica', $this->NombreTipoPruebaPsicologica])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion]);
        
        $query->orderBy('Orden ASC');

        return $dataProvider;
    }
}
