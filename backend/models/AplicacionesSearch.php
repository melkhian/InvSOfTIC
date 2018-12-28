<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Aplicaciones;

/**
 * AplicacionesSearch represents the model behind the search form of `backend\models\Aplicaciones`.
 */
class AplicacionesSearch extends Aplicaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppId', 'TiposId_fk1', 'TiposId_fk2', 'TiposId_fk3', 'EDDesId_fk', 'TiposId_fk4', 'TiposId_fk5', 'ESopId_fk', 'TiposId_fk6', 'TiposId_fk7'], 'integer'],
            [['AppNomb', 'AppDesc', 'AppVers', 'AppNumeLice', 'AppInteApp', 'AppVersBD', 'AppBaseDato'], 'safe'],
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
        $query = Aplicaciones::find();

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
            'AppId' => $this->AppId,
            'TiposId_fk1' => $this->TiposId_fk1,
            'TiposId_fk2' => $this->TiposId_fk2,
            'TiposId_fk3' => $this->TiposId_fk3,
            'EDDesId_fk' => $this->EDDesId_fk,
            'TiposId_fk4' => $this->TiposId_fk4,
            'TiposId_fk5' => $this->TiposId_fk5,
            'ESopId_fk' => $this->ESopId_fk,
            'TiposId_fk6' => $this->TiposId_fk6,
            'TiposId_fk7' => $this->TiposId_fk7,
        ]);

        $query->andFilterWhere(['like', 'AppNomb', $this->AppNomb])
            ->andFilterWhere(['like', 'AppDesc', $this->AppDesc])
            ->andFilterWhere(['like', 'AppVers', $this->AppVers])
            ->andFilterWhere(['like', 'AppNumeLice', $this->AppNumeLice])
            ->andFilterWhere(['like', 'AppInteApp', $this->AppInteApp])
            ->andFilterWhere(['like', 'AppVersBD', $this->AppVersBD])
            ->andFilterWhere(['like', 'AppBaseDato', $this->AppBaseDato]);

        return $dataProvider;
    }
}
