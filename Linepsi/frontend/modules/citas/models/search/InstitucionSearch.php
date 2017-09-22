<?php

namespace frontend\modules\citas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\citas\models\Institucion;

/**
 * InstitucionSearch represents the model behind the search form about `frontend\modules\citas\models\Institucion`.
 */
class InstitucionSearch extends Institucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdInstitucion'], 'integer'],
            [['NombreInstitucion'], 'safe'],
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
        $query = Institucion::find();

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
            'IdInstitucion' => $this->IdInstitucion,
        ]);

        $query->andFilterWhere(['like', 'NombreInstitucion', $this->NombreInstitucion]);

        return $dataProvider;
    }
}
