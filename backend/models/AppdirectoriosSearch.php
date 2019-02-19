<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appdirectorios;

/**
 * AppdirectoriosSearch represents the model behind the search form of `backend\models\Appdirectorios`.
 */
class AppdirectoriosSearch extends Appdirectorios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ADirId', 'AppId_fk'], 'integer'],
            [['ADirDirec', 'ADirDesc'], 'safe'],
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
        $query = Appdirectorios::find();

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
            'ADirId' => $this->ADirId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'ADirDirec', $this->ADirDirec])
            ->andFilterWhere(['like', 'ADirDesc', $this->ADirDesc]);

        return $dataProvider;
    }
}
