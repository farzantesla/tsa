<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Bidding;

/**
 * BiddingSearch represents the model behind the search form about `frontend\models\Bidding`.
 */
class BiddingSearch extends Bidding
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vehicle_users_id', 'vehicle_id', 'bidder_id', 'user_id', 'car_id', 'bid_price', 'status'], 'integer'],
            [['date_time', 'description'], 'safe'],
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
        $query = Bidding::find();

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
            'vehicle_users_id' => $this->vehicle_users_id,
            'vehicle_id' => $this->vehicle_id,
            'bidder_id' => $this->bidder_id,
            'user_id' => $this->user_id,
            'car_id' => $this->car_id,
            'bid_price' => $this->bid_price,
            'date_time' => $this->date_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
