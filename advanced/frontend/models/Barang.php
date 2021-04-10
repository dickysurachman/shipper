<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $deskripsi
 * @property string|null $kode_1
 *
 * @property Repots[] $repots
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi'], 'string'],
            [['nama'], 'string', 'max' => 200],
            [['kode_1'], 'string', 'max' => 50],
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
            'kode_1' => 'External Code',
        ];
    }

    /**
     * Gets query for [[Repots]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepots()
    {
        return $this->hasMany(Repots::className(), ['id_barang' => 'id']);
    }
}
