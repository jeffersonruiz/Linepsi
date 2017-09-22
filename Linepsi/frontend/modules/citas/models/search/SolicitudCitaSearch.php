<?php

namespace frontend\modules\citas\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\citas\models\SolicitudCita;

/**
 * SolicitudCitaSearch represents the model behind the search form about `frontend\modules\citas\models\SolicitudCita`.
 */
class SolicitudCitaSearch extends SolicitudCita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdSolicitudCita', 'IdTipoSolicitudCita', 'IdPersona', 'IdDocente', 'IdEstadoSolicitudCita', 'NecesitaConsentimiento', 'IdInstitucion', 'IdCampoPsicologico', 'IdUsuarioGraba', 'IdUsuarioModifica'], 'integer'],
            [['FechaSolicitudRegistro', 'descripcion', 'FechaGraba', 'FechaModifica'], 'safe'],
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
        $query = SolicitudCita::find();

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
            'IdSolicitudCita' => $this->IdSolicitudCita,
            'FechaSolicitudRegistro' => $this->FechaSolicitudRegistro,
            'IdTipoSolicitudCita' => $this->IdTipoSolicitudCita,
            'IdPersona' => $this->IdPersona,
            'IdDocente' => $this->IdDocente,
            'IdEstadoSolicitudCita' => $this->IdEstadoSolicitudCita,
            'NecesitaConsentimiento' => $this->NecesitaConsentimiento,
            'IdInstitucion' => $this->IdInstitucion,
            'IdCampoPsicologico' => $this->IdCampoPsicologico,
            'IdUsuarioGraba' => $this->IdUsuarioGraba,
            'FechaGraba' => $this->FechaGraba,
            'IdUsuarioModifica' => $this->IdUsuarioModifica,
            'FechaModifica' => $this->FechaModifica,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
    
    public function searchCitasXPersonas($params,$idpersona)
    {
        $query = SolicitudCita::find();

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
            'IdSolicitudCita' => $this->IdSolicitudCita,
            'FechaSolicitudRegistro' => $this->FechaSolicitudRegistro,
            'IdTipoSolicitudCita' => $this->IdTipoSolicitudCita,
            'IdPersona' => $idpersona,
            'IdDocente' => $this->IdDocente,
            'IdEstadoSolicitudCita' => $this->IdEstadoSolicitudCita,
            'NecesitaConsentimiento' => $this->NecesitaConsentimiento,
            'IdInstitucion' => $this->IdInstitucion,
            'IdCampoPsicologico' => $this->IdCampoPsicologico,
            'IdUsuarioGraba' => $this->IdUsuarioGraba,
            'FechaGraba' => $this->FechaGraba,
            'IdUsuarioModifica' => $this->IdUsuarioModifica,
            'FechaModifica' => $this->FechaModifica,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
