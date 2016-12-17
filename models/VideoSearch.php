<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Video;

/**
 * VideoSearch represents the model behind the search form about `app\models\Video`.
 */
class VideoSearch extends Video
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_id', 'video_added_user_id', 'category_id'], 'integer'],
            [['video_title', 'video_description', 'video_url'], 'safe'],
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
        $query = Video::find();

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
            'video_id' => $this->video_id,
            'video_added_user_id' => $this->video_added_user_id,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'video_title', $this->video_title])
            ->andFilterWhere(['like', 'video_description', $this->video_description])
            ->andFilterWhere(['like', 'video_url', $this->video_url]);

        return $dataProvider;
    }
}
