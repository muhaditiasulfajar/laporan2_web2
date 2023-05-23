<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_026".
 *
 * @property int $id
 * @property int $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa026 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_026';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['kelas'], 'string', 'max' => 4],
            [['jurusan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getProfil026()
    {
        
        return $this->hasOne(Profil026::class, ['id_mahasiswa' => 'id']);
    }
}

