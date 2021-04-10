<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hardware".
 *
 * @property int $id
 * @property string|null $nama
 *
 * @property Repots[] $repots
 */
class Hardware extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hardware';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
        ];
    }

    /**
     * Gets query for [[Repots]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepots()
    {
        return $this->hasMany(Repots::className(), ['id_hardware' => 'id']);
    }
}
