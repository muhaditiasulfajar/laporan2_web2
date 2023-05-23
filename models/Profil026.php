<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_026".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profil
 */
class Profil026 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_026';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mahasiswa', 'foto_profil'], 'required'],
            [['id', 'id_mahasiswa'], 'integer'],
            [['foto_profil'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
