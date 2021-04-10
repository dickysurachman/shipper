<?php

namespace app\models;

use Yii;
use app\models\User;
/**
 * This is the model class for table "repots".
 *
 * @property int $id
 * @property int|null $id_barang
 * @property int|null $id_status
 * @property float|null $qty
 * @property int|null $id_hardware
 * @property int|null $cur_location
 * @property int|null $last_location
 * @property int|null $last_checked
 * @property string|null $checked_time
 * @property string|null $po_code
 * @property string|null $condition
 * @property float|null $qty_good
 * @property float|null $qty_damage
 *
 * @property Barang $barang
 * @property Status $status
 * @property Location $lastLocation
 * @property User $lastChecked
 * @property Hardware $hardware
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repots';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'id_status', 'id_hardware', 'cur_location', 'last_location', 'last_checked'], 'integer'],
            [['qty', 'qty_good', 'qty_damage'], 'number'],
            [['checked_time'], 'safe'],
            [['po_code'], 'string', 'max' => 200],
            [['condition'], 'string', 'max' => 100],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id_barang' => 'id']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['id_status' => 'id']],
            [['last_location'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['last_location' => 'id']],
            [['last_checked'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['last_checked' => 'id']],
            [['id_hardware'], 'exist', 'skipOnError' => true, 'targetClass' => Hardware::className(), 'targetAttribute' => ['id_hardware' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_barang' => 'Barang',
            'id_status' => 'Status',
            'qty' => 'Qty',
            'id_hardware' => 'Hardware',
            'cur_location' => 'Current Location',
            'last_location' => 'Last Location',
            'last_checked' => 'Last Checked',
            'checked_time' => 'Checked Time',
            'po_code' => 'Po Code',
            'condition' => 'Condition',
            'qty_good' => 'Qty Good',
            'qty_damage' => 'Qty Damage',
        ];
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id' => 'id_barang']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'id_status']);
    }

    /**
     * Gets query for [[LastLocation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStates(){
        if(isset($this->cur_location)){
            if($this->cur_location==$this->last_location){
                return '<i class="fa fa-check-circle" style="font-size:24px"></i>';
            } else {
                return '<i class="fa fa-close" style="font-size:24px;color:red"></i>';
            }
        } else {
            return '<i class="fa fa-question-circle" style="font-size:24px;color:red"></i>';
            //return '';

        }
    }
    public function getLastlocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'last_location']);
    }
 public function getCurlocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'cur_location']);
    }

    /**
     * Gets query for [[LastChecked]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLastChecked()
    {
        return $this->hasOne(User::className(), ['id' => 'last_checked']);
    }

    /**
     * Gets query for [[Hardware]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHardware()
    {
        return $this->hasOne(Hardware::className(), ['id' => 'id_hardware']);
    }
    public function getUsers1()
    {
        return $this->hasOne(User::className(), ['id' => 'last_checked']);
    }
      public function beforeSave($insert)
        {
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            if($this->isNewRecord)
                    {
                        $this->last_checked = Yii::$app->user->identity->id;
                        $this->checked_time = date('Y-m-d H:i:s',time());
                        //$this->tanggal = date('Y-m-d',time());
                    }
             return true;
        }
        else {
             return false;
        }   
    }
}
