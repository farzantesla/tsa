<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MyFav;

/**
 * MyFavSearch represents the model behind the search form about `app\models\MyFav`.
 */
class MyFavSearch extends MyFav
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'users_id', 'vehicle_users_id', 'vehicle_id', 'user_id', 'car_id', 'status'], 'integer'],
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
        $query = MyFav::find();

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
            'users_id' => $this->users_id,
            'vehicle_users_id' => $this->vehicle_users_id,
            'vehicle_id' => $this->vehicle_id,
            'user_id' => $this->user_id,
            'car_id' => $this->car_id,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
