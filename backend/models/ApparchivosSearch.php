<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Apparchivos;

/**
 * ApparchivosSearch represents the model behind the search form of `backend\models\Apparchivos`.
 */
class ApparchivosSearch extends Apparchivos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AArcId', 'AppId_fk'], 'integer'],
            [['AArcDirec', 'AArcNombArch', 'AArcVari', 'AArcNombVari', 'AArcDescPara'], 'safe'],
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
        $query = Apparchivos::find();

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
            'AArcId' => $this->AArcId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'AArcDirec', $this->AArcDirec])
            ->andFilterWhere(['like', 'AArcNombArch', $this->AArcNombArch])
            ->andFilterWhere(['like', 'AArcVari', $this->AArcVari])
            ->andFilterWhere(['like', 'AArcNombVari', $this->AArcNombVari])
            ->andFilterWhere(['like', 'AArcDescPara', $this->AArcDescPara]);

        return $dataProvider;
    }
}
