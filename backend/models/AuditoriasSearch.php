<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Auditorias;
use kartik\daterange\DateRangeBehavior;
/**
 * AuditoriasSearch represents the model behind the search form of `backend\models\Auditorias`.
 */
class AuditoriasSearch extends Auditorias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AudId', 'UsuId_fk'], 'integer'],
            [['AudMod', 'AudAcci', 'AudDatoAnte', 'AudDatoDesp', 'AudIp', 'AudFechHora'], 'safe'],
        ];
    }

    public $rango_fecha,$fecha_desde ,$fecha_hasta;

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
        $query = Auditorias::find();

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
            'AudId' => $this->AudId,
            'UsuId_fk' => $this->UsuId_fk,
            'AudFechHora' => $this->AudFechHora,
        ]);
        if (isset($this->rango_fecha) && !empty($this->rango_fecha))
        {
            $lista = explode(' - ', $this->rango_fecha);
            if(count($lista) == 2)
            {
              $this->fecha_desde = $lista[0];
              $this->fecha_hasta = $lista[1];
            }
        }
        $query->andFilterWhere(['like', 'AudMod', $this->AudMod])
            ->andFilterWhere(['like', 'AudAcci', $this->AudAcci])
            ->andFilterWhere(['like', 'AudDatoAnte', $this->AudDatoAnte])
            ->andFilterWhere(['like', 'AudDatoDesp', $this->AudDatoDesp])
            ->andFilterWhere(['like', 'AudIp', $this->AudIp])
            ->andFilterWhere(['>=', 'AudFechHora', $this->fecha_desde])
            ->andFilterWhere(['<=', 'AudFechHora', $this->fecha_hasta]);
        return $dataProvider;
    }
}
