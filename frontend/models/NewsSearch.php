<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class NewsSearch extends Model
{
    public $q; // Ajuste: Adicione a propriedade 'q'

    public function rules()
    {
        return [
            [['q'], 'safe'], // Ajuste: Inclua 'q' nas regras de validação
        ];
    }

    public function search($params)
    {
        $query = News::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'title', $this->q]) // Ajuste: Use 'q' em vez de 'title'
            ->orFilterWhere(['like', 'content', $this->q]); // Ajuste: Use 'q' em vez de 'content'

        return $dataProvider;
    }
}
