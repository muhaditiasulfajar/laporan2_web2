<?php

namespace app\controllers;
use app\models\Mahasiswa026;
use yii\data\ActiveDataProvider;

class Mahasiswa026Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa026::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }


}