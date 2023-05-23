<?php

namespace app\controllers;

class DaftarMatakuliahController extends \yii\web\Controller
{
    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionView()
    {
        return $this->render('view');
    }

    public function actionInsert()
    {
        $model = new Mahasiwa();

        $model->username = 'JohnDoe';
        $model->email = 'johndoe@example.com';
        $model->password = 'password123';

        $model->save();

        return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionUpdate($id)
    {
        $model = Mahasiswa::findOne($id);

        $model->username = 'NewUsername';
        $model->email = 'newemail@example.com';

        $model->save();

        return $this->redirect(['view', 'id' => $model->id]);
    }

    
    public function actionDelete($id)
    {
        $model = Mahasiswa::findOne($id);

        $model->delete();

        return $this->redirect(['index']);
    }




}
