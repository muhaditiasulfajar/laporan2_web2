<?php 
    use yii\grid\GridView;
    use app\models\Mahasiswa026;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    
?>

<div class="mhs-nim-index">
    <h1><?= Html::encode($this->title) ?></h1>

    </p>
    <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= 
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'nim',
                'nama',
                'kelas',
                'jurusan',
                'profil026.foto_profil',

                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Mahasiswa026 $model) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
</div>