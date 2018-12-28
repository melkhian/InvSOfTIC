<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Comandos;

/**
 * ComandosSearch represents the model behind the search form of `backend\models\Comandos`.
 */
class ComandosSearch extends Comandos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ComId'], 'integer'],
            [['ComNomb', 'ComDesc'], 'safe'],
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
        $query = Comandos::find();

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
            'ComId' => $this->ComId,
        ]);

        $query->andFilterWhere(['like', 'ComNomb', $this->ComNomb])
            ->andFilterWhere(['like', 'ComDesc', $this->ComDesc]);

        return $dataProvider;
    }
}
