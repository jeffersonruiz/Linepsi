<?php

namespace frontend\modules\citas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\citas\models\TipoDocumentoIdentificacion;

/**
 * TipoDocumentoIdentificacionSearch represents the model behind the search form about `frontend\modules\citas\models\TipoDocumentoIdentificacion`.
 */
class TipoDocumentoIdentificacionSearch extends TipoDocumentoIdentificacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdTipoDocumentoIdentificacion'], 'integer'],
            [['NombreTipoDocumentoIdentificacion'], 'safe'],
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
        $query = TipoDocumentoIdentificacion::find();

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
            'IdTipoDocumentoIdentificacion' => $this->IdTipoDocumentoIdentificacion,
        ]);

        $query->andFilterWhere(['like', 'NombreTipoDocumentoIdentificacion', $this->NombreTipoDocumentoIdentificacion]);

        return $dataProvider;
    }
}
