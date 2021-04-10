<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $deskripsi
 * @property int|null $kapasitas
 *
 * @property Repots[] $repots
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi'], 'string'],
            [['kapasitas'], 'integer'],
            [['nama'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'kapasitas' => 'Kapasitas',
        ];
    }

    /**
     * Gets query for [[Repots]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepots()
    {
        return $this->hasMany(Repots::className(), ['last_location' => 'id']);
    }
}
