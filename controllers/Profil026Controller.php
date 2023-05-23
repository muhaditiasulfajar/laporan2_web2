<?php

namespace app\controllers;
use app\models\Profil026;
use yii\data\ActiveDataProvider;


class Profil026Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil026::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('profil', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
