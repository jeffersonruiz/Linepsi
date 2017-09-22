<?php

namespace frontend\modules\personas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\personas\models\PersonaDireccion;

/**
 * PersonaDireccionSearch represents the model behind the search form about `frontend\modules\personas\models\PersonaDireccion`.
 */
class PersonaDireccionSearch extends PersonaDireccion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersonaDireccion', 'IdPersona', 'IdTipoDireccion', 'EsPrincipal', 'IdCiudad', 'IdPais'], 'integer'],
            [['Direccion', 'NombreCiudadExtranjero'], 'safe'],
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
        $query = PersonaDireccion::find();

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
            'IdPersonaDireccion' => $this->IdPersonaDireccion,
            'IdPersona' => $this->IdPersona,
            'IdTipoDireccion' => $this->IdTipoDireccion,
            'EsPrincipal' => $this->EsPrincipal,
            'IdCiudad' => $this->IdCiudad,
            'IdPais' => $this->IdPais,
        ]);

        $query->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'NombreCiudadExtranjero', $this->NombreCiudadExtranjero]);

        return $dataProvider;
    }
}
