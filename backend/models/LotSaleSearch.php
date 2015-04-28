<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LotSale;

/**
 * LotSaleSearch represents the model behind the search form about `app\models\LotSale`.
 */
class LotSaleSearch extends LotSale
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vehicle_users_id', 'vehicle_id', 'lot_number', 'lot_price', 'status', 'sales_status'], 'integer'],
            [['ending_date'], 'safe'],
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
        $query = LotSale::find();

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
            'lot_number' => $this->lot_number,
            'lot_price' => $this->lot_price,
            'ending_date' => $this->ending_date,
            'status' => $this->status,
            'sales_status' => $this->sales_status,
        ]);

        return $dataProvider;
    }
}
