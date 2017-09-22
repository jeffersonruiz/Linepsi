<?php

namespace frontend\modules\servicio\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\servicio\models\HistoriaClinica;

use yii\db\Expression;

/**
 * HistoriaClinicaSearch represents the model behind the search form about `frontend\modules\servicio\models\HistoriaClinica`.
 */
class HistoriaClinicaSearch extends HistoriaClinica
{
    public $NombrePaciente;
    public $NumeroDocumento;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdHistoriaClinica', 'IdPersonaSolicita', 'IdDocente', 'IdSolicitudCita', 'IdConcepto'], 'integer'],
            [['Fecha', 'ObservacionesGeneral','NombrePaciente','NumeroDocumento'], 'safe'],
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
        $query = HistoriaClinica::find();

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
            'IdHistoriaClinica' => $this->IdHistoriaClinica,
            'IdPersonaSolicita' => $this->IdPersonaSolicita,
            'Fecha' => $this->Fecha,
            'IdDocente' => $this->IdDocente,
            'IdSolicitudCita' => $this->IdSolicitudCita,
            'IdConcepto' => $this->IdConcepto,
        ]);

        $query->andFilterWhere(['like', 'ObservacionesGeneral', $this->ObservacionesGeneral]);

        return $dataProvider;
    }
    
    public function searchHistoriaClinica($params)
    {
        $query = HistoriaClinica::find()->select(['per.NumeroDocumento','hc.IdPersonaSolicita',
                                        new Expression("CONCAT_WS(' ',per.PrimerNombre, "
                                                        . "per.SegundoNombre, "
                                                        . "per.PrimerApellido, "
                                                        . "per.SegundoApellido) AS NombrePaciente"
                                                ),'per.IdGenero', 'gen.NombreGenero', 'per.IdEstadoRegistro',
                                        new Expression("(CASE per.IdEstadoRegistro "
                                            . " WHEN 0 THEN 'Activo'"
                                            . " WHEN 1 THEN 'Inactivo'"
                                            . " END) AS Estado"    
                                            )])
                                    ->from('historiaclinica hc')
                                    ->join('INNER JOIN ', 'persona per','hc.IdPersonaSolicita = per.IdPersona')
                                    ->join('INNER JOIN ', 'genero gen', 'per.IdGenero = gen.IdGenero')
                                    ->groupBy('hc.IdPersonaSolicita');

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
            'hc.IdPersonaSolicita' => $this->IdPersonaSolicita,
            'per.NumeroDocumento' => $this->NumeroDocumento,
        ]);

        $query->andWhere('per.PrimerNombre LIKE "%' . $this->NombrePaciente . '%" ' .
                'OR per.SegundoNombre LIKE "%' . $this->NombrePaciente . '%"' .
                'OR per.PrimerApellido LIKE "%' . $this->NombrePaciente . '%"' .
                'OR per.SegundoApellido LIKE "%' . $this->NombrePaciente . '%"' 
            );

        return $dataProvider;
    }
    
}
