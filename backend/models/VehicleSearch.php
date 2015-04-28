<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Vehicle;

/**
 * VehicleSearch represents the model behind the search form about `app\models\Vehicle`.
 */
class VehicleSearch extends Vehicle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'users_id', 'lot_id'], 'integer'],
            [['make', 'model', 'year_2', 'transmission', 'series', 'edition', 'conditions', 'mileage', 'areo', 'ac_front', 'cruise_control', 'navigation_sys', 'power_lock', 'power_steer', 'remote_key', 'tv', 'air_bag_driver', 'air_bag_passenger', 'air_bag_side', 'alarm', 'lock_brake', 'fog_light', 'transaction_cont', 'power_windows', 'rear_windows_def', 'rear_window_wiper', 'tint_glass', 'alloy_wheels', 'sun_roof', 'third_row_seats', 'tow_package', 'bidding_price', 'garage_id', 'time_start', 'time_left', 'sale_status', 'status', 'reg_no', 'user_id', 'color', 'manufacture', 'type_2', 'date_reg', 'trim_color', 'doors', 'last_owner', 'engine_size', 'vin', 'mot_exp_date', 'v5_preset', 'green_slip', 'imported', 'service_history', 'fuel', 'description', 'location'], 'safe'],
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
        $query = Vehicle::find();

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
            'year_2' => $this->year_2,
            'date_reg' => $this->date_reg,
            'mot_exp_date' => $this->mot_exp_date,
            'lot_id' => $this->lot_id,
        ]);

        $query->andFilterWhere(['like', 'make', $this->make])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'transmission', $this->transmission])
            ->andFilterWhere(['like', 'series', $this->series])
            ->andFilterWhere(['like', 'edition', $this->edition])
            ->andFilterWhere(['like', 'conditions', $this->conditions])
            ->andFilterWhere(['like', 'mileage', $this->mileage])
            ->andFilterWhere(['like', 'areo', $this->areo])
            ->andFilterWhere(['like', 'ac_front', $this->ac_front])
            ->andFilterWhere(['like', 'cruise_control', $this->cruise_control])
            ->andFilterWhere(['like', 'navigation_sys', $this->navigation_sys])
            ->andFilterWhere(['like', 'power_lock', $this->power_lock])
            ->andFilterWhere(['like', 'power_steer', $this->power_steer])
            ->andFilterWhere(['like', 'remote_key', $this->remote_key])
            ->andFilterWhere(['like', 'tv', $this->tv])
            ->andFilterWhere(['like', 'air_bag_driver', $this->air_bag_driver])
            ->andFilterWhere(['like', 'air_bag_passenger', $this->air_bag_passenger])
            ->andFilterWhere(['like', 'air_bag_side', $this->air_bag_side])
            ->andFilterWhere(['like', 'alarm', $this->alarm])
            ->andFilterWhere(['like', 'lock_brake', $this->lock_brake])
            ->andFilterWhere(['like', 'fog_light', $this->fog_light])
            ->andFilterWhere(['like', 'transaction_cont', $this->transaction_cont])
            ->andFilterWhere(['like', 'power_windows', $this->power_windows])
            ->andFilterWhere(['like', 'rear_windows_def', $this->rear_windows_def])
            ->andFilterWhere(['like', 'rear_window_wiper', $this->rear_window_wiper])
            ->andFilterWhere(['like', 'tint_glass', $this->tint_glass])
            ->andFilterWhere(['like', 'alloy_wheels', $this->alloy_wheels])
            ->andFilterWhere(['like', 'sun_roof', $this->sun_roof])
            ->andFilterWhere(['like', 'third_row_seats', $this->third_row_seats])
            ->andFilterWhere(['like', 'tow_package', $this->tow_package])
            ->andFilterWhere(['like', 'bidding_price', $this->bidding_price])
            ->andFilterWhere(['like', 'garage_id', $this->garage_id])
            ->andFilterWhere(['like', 'time_left', $this->time_start])
            ->andFilterWhere(['like', 'time_left', $this->time_left])
            ->andFilterWhere(['like', 'sale_status', $this->sale_status])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'reg_no', $this->reg_no])
            ->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'manufacture', $this->manufacture])
            ->andFilterWhere(['like', 'type_2', $this->type_2])
            ->andFilterWhere(['like', 'trim_color', $this->trim_color])
            ->andFilterWhere(['like', 'doors', $this->doors])
            ->andFilterWhere(['like', 'last_owner', $this->last_owner])
            ->andFilterWhere(['like', 'engine_size', $this->engine_size])
            ->andFilterWhere(['like', 'vin', $this->vin])
            ->andFilterWhere(['like', 'v5_preset', $this->v5_preset])
            ->andFilterWhere(['like', 'green_slip', $this->green_slip])
            ->andFilterWhere(['like', 'imported', $this->imported])
            ->andFilterWhere(['like', 'service_history', $this->service_history])
            ->andFilterWhere(['like', 'fuel', $this->fuel])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
