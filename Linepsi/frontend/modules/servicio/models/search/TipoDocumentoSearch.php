<?php

namespace frontend\modules\servicio\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\servicio\models\TipoDocumento;

/**
 * TipoDocumentoSearch represents the model behind the search form about `frontend\modules\servicio\models\TipoDocumento`.
 */
class TipoDocumentoSearch extends TipoDocumento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdTipoDocumento'], 'integer'],
            [['NombreTipoDocumento'], 'safe'],
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
        $query = TipoDocumento::find();

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
            'IdTipoDocumento' => $this->IdTipoDocumento,
        ]);

        $query->andFilterWhere(['like', 'NombreTipoDocumento', $this->NombreTipoDocumento]);

        return $dataProvider;
    }
}
