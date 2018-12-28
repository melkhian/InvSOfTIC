<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Proyectos;

/**
 * ProyectosSearch represents the model behind the search form of `backend\models\Proyectos`.
 */
class ProyectosSearch extends Proyectos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProId', 'UsuId_fk', 'Tiposid_fk1', 'TiposId_fk2'], 'integer'],
            [['ProNomb', 'ProDesc', 'ProObje', 'ProFechApro', 'ProDocu', 'ProFechInic', 'ProFechFina', 'ProFinProy'], 'safe'],
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
        $query = Proyectos::find();

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
            'ProId' => $this->ProId,
            'UsuId_fk' => $this->UsuId_fk,
            'Tiposid_fk1' => $this->Tiposid_fk1,
            'ProFechApro' => $this->ProFechApro,
            'ProFechInic' => $this->ProFechInic,
            'ProFechFina' => $this->ProFechFina,
            'TiposId_fk2' => $this->TiposId_fk2,
        ]);

        $query->andFilterWhere(['like', 'ProNomb', $this->ProNomb])
            ->andFilterWhere(['like', 'ProDesc', $this->ProDesc])
            ->andFilterWhere(['like', 'ProObje', $this->ProObje])
            ->andFilterWhere(['like', 'ProDocu', $this->ProDocu])
            ->andFilterWhere(['like', 'ProFinProy', $this->ProFinProy]);

        return $dataProvider;
    }
}
