<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appusuarios;

/**
 * AppusuariosSearch represents the model behind the search form of `backend\models\Appusuarios`.
 */
class AppusuariosSearch extends Appusuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AUsuId', 'AppId_fk'], 'integer'],
            [['AUsuUsua', 'AUsuDesc'], 'safe'],
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
        $query = Appusuarios::find();

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
            'AUsuId' => $this->AUsuId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'AUsuUsua', $this->AUsuUsua])
            ->andFilterWhere(['like', 'AUsuDesc', $this->AUsuDesc]);

        return $dataProvider;
    }
}
