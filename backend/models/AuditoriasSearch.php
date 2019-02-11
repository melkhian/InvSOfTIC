<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Auditorias;

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
            [['AudAcci', 'AudDatoAnte', 'AudDatoDesp', 'AudIp', 'AudFechHora'], 'safe'],
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

        $query->andFilterWhere(['like', 'AudAcci', $this->AudAcci])
            ->andFilterWhere(['like', 'AudDatoAnte', $this->AudDatoAnte])
            ->andFilterWhere(['like', 'AudDatoDesp', $this->AudDatoDesp])
            ->andFilterWhere(['like', 'AudIp', $this->AudIp]);

        return $dataProvider;
    }
}
