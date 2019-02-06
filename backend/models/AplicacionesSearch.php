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
            [['AppId', 'ESopId1', 'ESopId2', 'UsuId_fk'], 'integer'],
            [['AppNomb', 'AppDesc', 'AppSigl', 'AppVers', 'AppUrl', 'TiposId_fk1', 'TiposId_fk2', 'AppNumeDocuAdqu', 'AppValoAdqu', 'AppFechAdqu', 'TiposId_fk3', 'AppNombProc', 'AppEnti', 'TiposId_fk4', 'AppAcueNiveServ', 'TiposId_fk5', 'AppFechPues', 'AppServPues', 'TiposId_fk6', 'TiposId_fk7', 'TiposId_fk8', 'AppOtroCual8', 'TiposId_fk9', 'AppOtroCual9', 'TiposId_fk10', 'AppOtroCual10', 'TiposId_fk11', 'TiposId_fk12', 'AppOtroCual12', 'TiposId_fk13', 'TiposId_fk14', 'AppOtroCual14', 'TiposId_fk15', 'TiposId_fk16', 'AppOtroCual16', 'TiposId_fk17', 'TiposId_fk18', 'AppOtroCual18', 'TiposId_fk19', 'AppOtroCual19', 'TiposId_fk20', 'AppDondUbic', 'AppTipoLice', 'AppNumeLice', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'AppVersDist', 'TiposId_fk24', 'AppLengServ', 'AppVersApli', 'AppBibl', 'AppObse1', 'AppMane', 'AppVersBD', 'AppPuer1', 'AppObse2', 'AppTipoHard', 'AppProc', 'AppMemo', 'AppEspaDisc', 'AppObse3', 'AppDirec1', 'AppNombArch', 'AppVari', 'AppNombVari', 'AppDescPara', 'AppObse4', 'AppUrlFuen', 'AppServ', 'AppPuer2', 'AppDirec2', 'AppNombServBd', 'AppUsua', 'AppNombBd', 'AppRuta', 'AppEspaActu', 'AppProy', 'TiposId_fk25', 'AppOtroCual25', 'AppPoliBack', 'TiposId_fk26', 'TiposId_fk27', 'AppOtroCual27', 'TiposId_fk28', 'AppOtroCual28', 'AppCantLice', 'TiposId_fk29', 'TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44', 'TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'AppUbic', 'TiposId_fk55', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7', 'AppFuncApru'], 'safe'],
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
            'ESopId1' => $this->ESopId1,
            'AppFechAdqu' => $this->AppFechAdqu,
            'ESopId2' => $this->ESopId2,
            'UsuId_fk' => $this->UsuId_fk,
            'AppFechPues' => $this->AppFechPues,
        ]);

        $query->andFilterWhere(['like', 'AppNomb', $this->AppNomb])
            ->andFilterWhere(['like', 'AppDesc', $this->AppDesc])
            ->andFilterWhere(['like', 'AppSigl', $this->AppSigl])
            ->andFilterWhere(['like', 'AppVers', $this->AppVers])
            ->andFilterWhere(['like', 'AppUrl', $this->AppUrl])
            ->andFilterWhere(['like', 'TiposId_fk1', $this->TiposId_fk1])
            ->andFilterWhere(['like', 'TiposId_fk2', $this->TiposId_fk2])
            ->andFilterWhere(['like', 'AppNumeDocuAdqu', $this->AppNumeDocuAdqu])
            ->andFilterWhere(['like', 'AppValoAdqu', $this->AppValoAdqu])
            ->andFilterWhere(['like', 'TiposId_fk3', $this->TiposId_fk3])
            ->andFilterWhere(['like', 'AppNombProc', $this->AppNombProc])
            ->andFilterWhere(['like', 'AppEnti', $this->AppEnti])
            ->andFilterWhere(['like', 'TiposId_fk4', $this->TiposId_fk4])
            ->andFilterWhere(['like', 'AppAcueNiveServ', $this->AppAcueNiveServ])
            ->andFilterWhere(['like', 'TiposId_fk5', $this->TiposId_fk5])
            ->andFilterWhere(['like', 'AppServPues', $this->AppServPues])
            ->andFilterWhere(['like', 'TiposId_fk6', $this->TiposId_fk6])
            ->andFilterWhere(['like', 'TiposId_fk7', $this->TiposId_fk7])
            ->andFilterWhere(['like', 'TiposId_fk8', $this->TiposId_fk8])
            ->andFilterWhere(['like', 'AppOtroCual8', $this->AppOtroCual8])
            ->andFilterWhere(['like', 'TiposId_fk9', $this->TiposId_fk9])
            ->andFilterWhere(['like', 'AppOtroCual9', $this->AppOtroCual9])
            ->andFilterWhere(['like', 'TiposId_fk10', $this->TiposId_fk10])
            ->andFilterWhere(['like', 'AppOtroCual10', $this->AppOtroCual10])
            ->andFilterWhere(['like', 'TiposId_fk11', $this->TiposId_fk11])
            ->andFilterWhere(['like', 'TiposId_fk12', $this->TiposId_fk12])
            ->andFilterWhere(['like', 'AppOtroCual12', $this->AppOtroCual12])
            ->andFilterWhere(['like', 'TiposId_fk13', $this->TiposId_fk13])
            ->andFilterWhere(['like', 'TiposId_fk14', $this->TiposId_fk14])
            ->andFilterWhere(['like', 'AppOtroCual14', $this->AppOtroCual14])
            ->andFilterWhere(['like', 'TiposId_fk15', $this->TiposId_fk15])
            ->andFilterWhere(['like', 'TiposId_fk16', $this->TiposId_fk16])
            ->andFilterWhere(['like', 'AppOtroCual16', $this->AppOtroCual16])
            ->andFilterWhere(['like', 'TiposId_fk17', $this->TiposId_fk17])
            ->andFilterWhere(['like', 'TiposId_fk18', $this->TiposId_fk18])
            ->andFilterWhere(['like', 'AppOtroCual18', $this->AppOtroCual18])
            ->andFilterWhere(['like', 'TiposId_fk19', $this->TiposId_fk19])
            ->andFilterWhere(['like', 'AppOtroCual19', $this->AppOtroCual19])
            ->andFilterWhere(['like', 'TiposId_fk20', $this->TiposId_fk20])
            ->andFilterWhere(['like', 'AppDondUbic', $this->AppDondUbic])
            ->andFilterWhere(['like', 'AppTipoLice', $this->AppTipoLice])
            ->andFilterWhere(['like', 'AppNumeLice', $this->AppNumeLice])
            ->andFilterWhere(['like', 'TiposId_fk21', $this->TiposId_fk21])
            ->andFilterWhere(['like', 'TiposId_fk22', $this->TiposId_fk22])
            ->andFilterWhere(['like', 'TiposId_fk23', $this->TiposId_fk23])
            ->andFilterWhere(['like', 'AppVersDist', $this->AppVersDist])
            ->andFilterWhere(['like', 'TiposId_fk24', $this->TiposId_fk24])
            ->andFilterWhere(['like', 'AppLengServ', $this->AppLengServ])
            ->andFilterWhere(['like', 'AppVersApli', $this->AppVersApli])
            ->andFilterWhere(['like', 'AppBibl', $this->AppBibl])
            ->andFilterWhere(['like', 'AppObse1', $this->AppObse1])
            ->andFilterWhere(['like', 'AppMane', $this->AppMane])
            ->andFilterWhere(['like', 'AppVersBD', $this->AppVersBD])
            ->andFilterWhere(['like', 'AppPuer1', $this->AppPuer1])
            ->andFilterWhere(['like', 'AppObse2', $this->AppObse2])
            ->andFilterWhere(['like', 'AppTipoHard', $this->AppTipoHard])
            ->andFilterWhere(['like', 'AppProc', $this->AppProc])
            ->andFilterWhere(['like', 'AppMemo', $this->AppMemo])
            ->andFilterWhere(['like', 'AppEspaDisc', $this->AppEspaDisc])
            ->andFilterWhere(['like', 'AppObse3', $this->AppObse3])
            ->andFilterWhere(['like', 'AppDirec1', $this->AppDirec1])
            ->andFilterWhere(['like', 'AppNombArch', $this->AppNombArch])
            ->andFilterWhere(['like', 'AppVari', $this->AppVari])
            ->andFilterWhere(['like', 'AppNombVari', $this->AppNombVari])
            ->andFilterWhere(['like', 'AppDescPara', $this->AppDescPara])
            ->andFilterWhere(['like', 'AppObse4', $this->AppObse4])
            ->andFilterWhere(['like', 'AppUrlFuen', $this->AppUrlFuen])
            ->andFilterWhere(['like', 'AppServ', $this->AppServ])
            ->andFilterWhere(['like', 'AppPuer2', $this->AppPuer2])
            ->andFilterWhere(['like', 'AppDirec2', $this->AppDirec2])
            ->andFilterWhere(['like', 'AppNombServBd', $this->AppNombServBd])
            ->andFilterWhere(['like', 'AppUsua', $this->AppUsua])
            ->andFilterWhere(['like', 'AppNombBd', $this->AppNombBd])
            ->andFilterWhere(['like', 'AppRuta', $this->AppRuta])
            ->andFilterWhere(['like', 'AppEspaActu', $this->AppEspaActu])
            ->andFilterWhere(['like', 'AppProy', $this->AppProy])
            ->andFilterWhere(['like', 'TiposId_fk25', $this->TiposId_fk25])
            ->andFilterWhere(['like', 'AppOtroCual25', $this->AppOtroCual25])
            ->andFilterWhere(['like', 'AppPoliBack', $this->AppPoliBack])
            ->andFilterWhere(['like', 'TiposId_fk26', $this->TiposId_fk26])
            ->andFilterWhere(['like', 'TiposId_fk27', $this->TiposId_fk27])
            ->andFilterWhere(['like', 'AppOtroCual27', $this->AppOtroCual27])
            ->andFilterWhere(['like', 'TiposId_fk28', $this->TiposId_fk28])
            ->andFilterWhere(['like', 'AppOtroCual28', $this->AppOtroCual28])
            ->andFilterWhere(['like', 'AppCantLice', $this->AppCantLice])
            ->andFilterWhere(['like', 'TiposId_fk29', $this->TiposId_fk29])
            ->andFilterWhere(['like', 'TiposId_fk30', $this->TiposId_fk30])
            ->andFilterWhere(['like', 'TiposId_fk31', $this->TiposId_fk31])
            ->andFilterWhere(['like', 'TiposId_fk32', $this->TiposId_fk32])
            ->andFilterWhere(['like', 'TiposId_fk33', $this->TiposId_fk33])
            ->andFilterWhere(['like', 'TiposId_fk34', $this->TiposId_fk34])
            ->andFilterWhere(['like', 'TiposId_fk35', $this->TiposId_fk35])
            ->andFilterWhere(['like', 'TiposId_fk36', $this->TiposId_fk36])
            ->andFilterWhere(['like', 'TiposId_fk37', $this->TiposId_fk37])
            ->andFilterWhere(['like', 'TiposId_fk38', $this->TiposId_fk38])
            ->andFilterWhere(['like', 'TiposId_fk39', $this->TiposId_fk39])
            ->andFilterWhere(['like', 'TiposId_fk40', $this->TiposId_fk40])
            ->andFilterWhere(['like', 'TiposId_fk41', $this->TiposId_fk41])
            ->andFilterWhere(['like', 'TiposId_fk42', $this->TiposId_fk42])
            ->andFilterWhere(['like', 'TiposId_fk43', $this->TiposId_fk43])
            ->andFilterWhere(['like', 'TiposId_fk44', $this->TiposId_fk44])
            ->andFilterWhere(['like', 'TiposId_fk45', $this->TiposId_fk45])
            ->andFilterWhere(['like', 'TiposId_fk46', $this->TiposId_fk46])
            ->andFilterWhere(['like', 'TiposId_fk47', $this->TiposId_fk47])
            ->andFilterWhere(['like', 'TiposId_fk48', $this->TiposId_fk48])
            ->andFilterWhere(['like', 'TiposId_fk49', $this->TiposId_fk49])
            ->andFilterWhere(['like', 'TiposId_fk50', $this->TiposId_fk50])
            ->andFilterWhere(['like', 'TiposId_fk51', $this->TiposId_fk51])
            ->andFilterWhere(['like', 'TiposId_fk52', $this->TiposId_fk52])
            ->andFilterWhere(['like', 'TiposId_fk53', $this->TiposId_fk53])
            ->andFilterWhere(['like', 'TiposId_fk54', $this->TiposId_fk54])
            ->andFilterWhere(['like', 'AppUbic', $this->AppUbic])
            ->andFilterWhere(['like', 'TiposId_fk55', $this->TiposId_fk55])
            ->andFilterWhere(['like', 'AppUbicDocu', $this->AppUbicDocu])
            ->andFilterWhere(['like', 'AppUbicUlti', $this->AppUbicUlti])
            ->andFilterWhere(['like', 'AppObse7', $this->AppObse7])
            ->andFilterWhere(['like', 'AppFuncApru', $this->AppFuncApru]);

        return $dataProvider;
    }
}
