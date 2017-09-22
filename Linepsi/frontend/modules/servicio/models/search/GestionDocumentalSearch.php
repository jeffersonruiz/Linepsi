<?php

namespace frontend\modules\servicio\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\servicio\models\GestionDocumental;

/**
 * GestionDocumentalSearch represents the model behind the search form about `frontend\modules\servicio\models\GestionDocumental`.
 */
class GestionDocumentalSearch extends GestionDocumental
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdGestionDocumental', 'IdHistoriaClinica', 'IdTipoDocumento','IdTipoPruebaPsicologica'], 'integer'],
            [['RutaDocumento', 'NombreDocumento', 'ObservacionesDocumento'], 'safe'],
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
    public function search($params,$idPrueba, $historia)
    {
        $query = GestionDocumental::find();

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
            'IdGestionDocumental' => $this->IdGestionDocumental,
            'IdHistoriaClinica' => $historia,
            'IdTipoDocumento' => $this->IdTipoDocumento,
            'IdTipoPruebaPsicologica' => $idPrueba,
        ]);

        $query->andFilterWhere(['like', 'RutaDocumento', $this->RutaDocumento])
            ->andFilterWhere(['like', 'NombreDocumento', $this->NombreDocumento])
            ->andFilterWhere(['like', 'ObservacionesDocumento', $this->ObservacionesDocumento]);

        return $dataProvider;
    }
    
    
    
}
