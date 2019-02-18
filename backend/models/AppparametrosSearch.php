<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appparametros;

/**
 * AppparametrosSearch represents the model behind the search form of `backend\models\Appparametros`.
 */
class AppparametrosSearch extends Appparametros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AParId', 'AppId_fk'], 'integer'],
            [['AParUrlFuen', 'AParServ', 'AParPuer', 'AParDirec'], 'safe'],
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
        $query = Appparametros::find();

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
            'AParId' => $this->AParId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'AParUrlFuen', $this->AParUrlFuen])
            ->andFilterWhere(['like', 'AParServ', $this->AParServ])
            ->andFilterWhere(['like', 'AParPuer', $this->AParPuer])
            ->andFilterWhere(['like', 'AParDirec', $this->AParDirec]);

        return $dataProvider;
    }
}
