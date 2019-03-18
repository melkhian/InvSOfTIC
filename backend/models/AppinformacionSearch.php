<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appinformacion;

/**
 * AppinformacionSearch represents the model behind the search form of `backend\models\Appinformacion`.
 */
class AppinformacionSearch extends Appinformacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AInfId', 'AppId_fk'], 'integer'],
            [['AInfNombServBd', 'AInfUsua', 'AInfNombBd', 'AInfRuta', 'AInfEspaActu', 'AInfProy', 'TiposId_fk25', 'AInfOtroCual25', 'AInfPoliBack', 'TiposId_fk26', 'TiposId_fk27', 'AInfOtroCual27', 'TiposId_fk28', 'AInfOtroCual28', 'AInfCantLice'], 'safe'],
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
        $query = Appinformacion::find();

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
            'AInfId' => $this->AInfId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'AInfNombServBd', $this->AInfNombServBd])
            ->andFilterWhere(['like', 'AInfUsua', $this->AInfUsua])
            ->andFilterWhere(['like', 'AInfNombBd', $this->AInfNombBd])
            ->andFilterWhere(['like', 'AInfRuta', $this->AInfRuta])
            ->andFilterWhere(['like', 'AInfEspaActu', $this->AInfEspaActu])
            ->andFilterWhere(['like', 'AInfProy', $this->AInfProy])
            ->andFilterWhere(['like', 'TiposId_fk25', $this->TiposId_fk25])
            ->andFilterWhere(['like', 'AInfOtroCual25', $this->AInfOtroCual25])
            ->andFilterWhere(['like', 'AInfPoliBack', $this->AInfPoliBack])
            ->andFilterWhere(['like', 'TiposId_fk26', $this->TiposId_fk26])
            ->andFilterWhere(['like', 'TiposId_fk27', $this->TiposId_fk27])
            ->andFilterWhere(['like', 'AInfOtroCual27', $this->AInfOtroCual27])
            ->andFilterWhere(['like', 'TiposId_fk28', $this->TiposId_fk28])
            ->andFilterWhere(['like', 'AInfOtroCual28', $this->AInfOtroCual28])
            ->andFilterWhere(['like', 'AInfCantLice', $this->AInfCantLice]);

        return $dataProvider;
    }
}
