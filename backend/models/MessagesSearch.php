<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Messages;

/**
 * MessagesSearch represents the model behind the search form about `app\models\Messages`.
 */
class MessagesSearch extends Messages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'users_id'], 'integer'],
            [['tiltle', 'message', 'status', 'sender', 'receiver', 'date'], 'safe'],
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
        $query = Messages::find();

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
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'tiltle', $this->tiltle])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'sender', $this->sender])
            ->andFilterWhere(['like', 'receiver', $this->receiver]);

        return $dataProvider;
    }
}
