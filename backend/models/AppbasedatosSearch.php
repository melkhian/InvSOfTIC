<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appbasedatos;

/**
 * AppbasedatosSearch represents the model behind the search form of `backend\models\Appbasedatos`.
 */
class AppbasedatosSearch extends Appbasedatos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ABasId', 'AppId_fk'], 'integer'],
            [['ABasMane', 'ABasVersBD', 'ABasPuer1', 'ABasObse2'], 'safe'],
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
        $query = Appbasedatos::find();

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
            'ABasId' => $this->ABasId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'ABasMane', $this->ABasMane])
            ->andFilterWhere(['like', 'ABasVersBD', $this->ABasVersBD])
            ->andFilterWhere(['like', 'ABasPuer1', $this->ABasPuer1])
            ->andFilterWhere(['like', 'ABasObse2', $this->ABasObse2]);

        return $dataProvider;
    }
}
