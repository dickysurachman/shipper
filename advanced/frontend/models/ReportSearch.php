<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Report;

/**
 * ReportSearch represents the model behind the search form about `app\models\Report`.
 */
class ReportSearch extends Report
{
    /**
     * @inheritdoc
     */
    public $tgl_a;
    public $tgl_b;
    public function rules()
    {
        return [
            [['id', 'id_barang', 'id_status', 'id_hardware', 'cur_location', 'last_location', 'last_checked'], 'integer'],
            [['qty', 'qty_good', 'qty_damage'], 'number'],
            [['checked_time', 'po_code', 'condition','tgl_a','tgl_b'], 'safe'],
            //[['tgl_a','tgl_b'], 'safe'],
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
        $query = Report::find();

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
            'id_barang' => $this->id_barang,
            'id_status' => $this->id_status,
            'qty' => $this->qty,
            'id_hardware' => $this->id_hardware,
            'cur_location' => $this->cur_location,
            'last_location' => $this->last_location,
            'last_checked' => $this->last_checked,
            'checked_time' => $this->checked_time,
            'qty_good' => $this->qty_good,
            'qty_damage' => $this->qty_damage,
        ]);

        $query->andFilterWhere(['like', 'po_code', $this->po_code])
            ->andFilterWhere(['>=', 'checked_time', $this->tgl_a])
            ->andFilterWhere(['<=', 'checked_time', $this->tgl_b])
            ->andFilterWhere(['like', 'condition', $this->condition]);

        return $dataProvider;
    }
}
