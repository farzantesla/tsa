<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'phone_no', 'business_no', 'status', 'payment_status'], 'integer'],
            [['company_name', 'full_name', 'address', 'website', 'vat', 'email', 'password_2'], 'safe'],
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
        $query = Users::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'phone_no' => $this->phone_no,
            'business_no' => $this->business_no,
            'status' => $this->status,
            'payment_status' => $this->payment_status,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'vat', $this->vat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password_2', $this->password_2]);

        return $dataProvider;
    }
}
