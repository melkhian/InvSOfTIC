<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appmodulos;

/**
 * AppmodulosSearch represents the model behind the search form of `backend\models\Appmodulos`.
 */
class AppmodulosSearch extends Appmodulos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AModId', 'AppId_fk', 'TiposId_fk'], 'integer'],
            [['AModNomb', 'AModDesc', 'AModObse'], 'safe'],
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
        $query = Appmodulos::find();

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
            'AModId' => $this->AModId,
            'AppId_fk' => $this->AppId_fk,
            'TiposId_fk' => $this->TiposId_fk,
        ]);

        $query->andFilterWhere(['like', 'AModNomb', $this->AModNomb])
            ->andFilterWhere(['like', 'AModDesc', $this->AModDesc])
            ->andFilterWhere(['like', 'AModObse', $this->AModObse]);

        return $dataProvider;
    }
}
