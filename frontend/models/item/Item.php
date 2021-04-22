<?php

namespace app\models\item;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $IdBarang
 * @property int $NamaBarang
 * @property int $Harga
 * @property int $Jumlah
 * @property int $Detail
 * @property int $Foto
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdBarang', 'NamaBarang', 'Harga', 'Jumlah', 'Detail', 'Foto'], 'required'],
            [['IdBarang', 'NamaBarang', 'Harga', 'Jumlah', 'Detail', 'Foto'], 'integer'],
            [['IdBarang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdBarang' => 'Id Barang',
            'NamaBarang' => 'Nama Barang',
            'Harga' => 'Harga',
            'Jumlah' => 'Jumlah',
            'Detail' => 'Detail',
            'Foto' => 'Foto',
        ];
    }
}
