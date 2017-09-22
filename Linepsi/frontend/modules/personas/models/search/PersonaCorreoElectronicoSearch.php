<?php

namespace frontend\modules\personas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\personas\models\PersonaCorreoElectronico;

/**
 * PersonaCorreoElectronicoSearch represents the model behind the search form about `frontend\modules\personas\models\PersonaCorreoElectronico`.
 */
class PersonaCorreoElectronicoSearch extends PersonaCorreoElectronico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersonaCorreoElectronico', 'IdPersona', 'EsPrincipal', 'IdTipoCorreoElectronico'], 'integer'],
            [['CuentaCorreoElectronico'], 'safe'],
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
        $query = PersonaCorreoElectronico::find();

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
            'IdPersonaCorreoElectronico' => $this->IdPersonaCorreoElectronico,
            'IdPersona' => $this->IdPersona,
            'EsPrincipal' => $this->EsPrincipal,
            'IdTipoCorreoElectronico' => $this->IdTipoCorreoElectronico,
        ]);

        $query->andFilterWhere(['like', 'CuentaCorreoElectronico', $this->CuentaCorreoElectronico]);

        return $dataProvider;
    }
}
