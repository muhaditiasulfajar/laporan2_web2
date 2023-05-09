<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionManagemenKrs()
    {
        return $this->render('managemen-krs');
    }
    
}
