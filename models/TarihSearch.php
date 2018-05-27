<?php

namespace kouosl\watch\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\watch\models\Tarih;

/**
 * TarihSearch represents the model behind the search form of `kouosl\watch\models\Tarih`.
 */
class TarihSearch extends Tarih
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tarihsaat', 'yer'], 'safe'],
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
        $query = Tarih::find();

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
            'id' => $this->id,
            'tarihsaat' => $this->tarihsaat,
        ]);

        $query->andFilterWhere(['like', 'yer', $this->yer]);

        return $dataProvider;
    }
}
