<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AppPlugins;

/**
 * AppPluginsSearch represents the model behind the search form of `backend\models\AppPlugins`.
 */
class AppPluginsSearch extends AppPlugins
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['APluId', 'AppId_fk'], 'integer'],
            [['APluNomb', 'APluLice', 'ApluDesc'], 'safe'],
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
        $query = AppPlugins::find();

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
            'APluId' => $this->APluId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'APluNomb', $this->APluNomb])
            ->andFilterWhere(['like', 'APluLice', $this->APluLice])
            ->andFilterWhere(['like', 'ApluDesc', $this->ApluDesc]);

        return $dataProvider;
    }
}
