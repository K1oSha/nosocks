<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * TechnicsSearch represents the model behind the search form of `app\models\Technics`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }
    public function rules()
    {
        return 
        [
            [['id','pol','feetsize','samesocks','chosensocks','answers','date','text','time'],'safe']
        ];
    }
    /**
     * {@inheritdoc}
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
        $query = Order::find();

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

        $query->andFilterWhere([
            'id' => $this->id,
            'pol' => $this->pol,
            'feetsize' => $this->feetsize,
            'samesocks' => $this->samesocks,
            'chosensocks' => $this->chosensocks,
            'answers' => $this->answers,
            'date'=>$this->date,
            'text'=>$this->text,
            'time'=>$this->time,
        ]);


        return $dataProvider;
    }
}