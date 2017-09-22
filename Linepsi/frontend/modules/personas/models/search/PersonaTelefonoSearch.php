<?php

namespace frontend\modules\personas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\personas\models\PersonaTelefono;

/**
 * PersonaTelefonoSearch represents the model behind the search form about `frontend\modules\personas\models\PersonaTelefono`.
 */
class PersonaTelefonoSearch extends PersonaTelefono
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersonaTelefono', 'IdPersona', 'NumeroTelefono', 'EsPrincipal', 'IdTipoTelefono', 'IdOperadorTelefonia', 'IdCiudad', 'IdPais', 'IdIndicativoTelefono'], 'integer'],
            [['NombreCiudadExtranjero'], 'safe'],
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
        $query = PersonaTelefono::find();

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
            'IdPersonaTelefono' => $this->IdPersonaTelefono,
            'IdPersona' => $this->IdPersona,
            'NumeroTelefono' => $this->NumeroTelefono,
            'EsPrincipal' => $this->EsPrincipal,
            'IdTipoTelefono' => $this->IdTipoTelefono,
            'IdOperadorTelefonia' => $this->IdOperadorTelefonia,
            'IdCiudad' => $this->IdCiudad,
            'IdPais' => $this->IdPais,
            'IdIndicativoTelefono' => $this->IdIndicativoTelefono,
        ]);

        $query->andFilterWhere(['like', 'NombreCiudadExtranjero', $this->NombreCiudadExtranjero]);

        return $dataProvider;
    }
}
