<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form of `backend\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USUID', 'USUESTA', 'DEPID'], 'integer'],
            [['USUNOMB1', 'USUNOMB2', 'USUAPEL1', 'USUAPEL2', 'USUIDEN', 'USUCARG', 'USUCORR', 'USUTELEPERS', 'USUTELEOFIC', 'USUCONT', 'AUTHKEY', 'ACCESSTOKEN'], 'safe'],
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
        $query = Usuarios::find();

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
            'USUID' => $this->USUID,
            'USUESTA' => $this->USUESTA,
            'DEPID' => $this->DEPID,
        ]);

        $query->andFilterWhere(['like', 'USUNOMB1', $this->USUNOMB1])
            ->andFilterWhere(['like', 'USUNOMB2', $this->USUNOMB2])
            ->andFilterWhere(['like', 'USUAPEL1', $this->USUAPEL1])
            ->andFilterWhere(['like', 'USUAPEL2', $this->USUAPEL2])
            ->andFilterWhere(['like', 'USUIDEN', $this->USUIDEN])
            ->andFilterWhere(['like', 'USUCARG', $this->USUCARG])
            ->andFilterWhere(['like', 'USUCORR', $this->USUCORR])
            ->andFilterWhere(['like', 'USUTELEPERS', $this->USUTELEPERS])
            ->andFilterWhere(['like', 'USUTELEOFIC', $this->USUTELEOFIC])
            ->andFilterWhere(['like', 'USUCONT', $this->USUCONT])
            ->andFilterWhere(['like', 'AUTHKEY', $this->AUTHKEY])
            ->andFilterWhere(['like', 'ACCESSTOKEN', $this->ACCESSTOKEN]);

        return $dataProvider;
    }
}
