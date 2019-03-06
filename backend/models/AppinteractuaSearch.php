<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appinteractua;

/**
 * AppinteractuaSearch represents the model behind the search form of `backend\models\Appinteractua`.
 */
class AppinteractuaSearch extends Appinteractua
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AIntId', 'AppId_fk', 'AppId_fk1'], 'integer'],
            [['AIntOtroCual'], 'safe'],
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
        $query = Appinteractua::find();

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
            'AIntId' => $this->AIntId,
            'AppId_fk' => $this->AppId_fk,
            'AppId_fk1' => $this->AppId_fk1,
        ]);

        $query->andFilterWhere(['like', 'AIntOtroCual', $this->AIntOtroCual]);

        return $dataProvider;
    }
}
