<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `frontend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'description','category', 'sub_category'], 'safe'],
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
        $query = Product::find();

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
            'category' => $this->category,
            'sub_category' => $this->sub_category,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
     public function searchCategory($cat)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->where(['category' => $cat])->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);
       
        

        return $dataProvider;
    }
     public function searchSubCategory($sub_cat)
    {
       $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->where(['sub_category' => $sub_cat])->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }
    //best seller
     public function searchBestSeller()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->orderBy('id DESC')->limit(15),
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

       
        

        return $dataProvider;
    }
    //new arrivals
     public function searchNewArrivals()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->orderBy('id DESC')->limit(15),
            'pagination' => [
                'pageSize' => 1,
            ],
        ]);
        return $dataProvider;
    }
    //hot sale
     public function searchHotSale()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->orderBy('id DESC')->limit(15),
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);
        return $dataProvider;
    }
    
}
