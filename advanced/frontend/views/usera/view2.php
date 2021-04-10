<?php

use yii\widgets\DetailView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
$this->title = 'Pickup by User';
$this->params['breadcrumbs'][] = ['label' => 'index', 'url' => ['index']];//$this->title;
$this->params['breadcrumbs'][] = $this->title;


CrudAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'verification_token',
            'role',
            //'profile.nama',
            //'foto',
            //'alamat',
            //'telp',
            //'delete',
        ],
    ]) ?>


</div>
<div class="userpick-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns1.php'),
            'toolbar'=> [
                ['content'=>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['createdet','id'=>$model->id],
                    ['role'=>'modal-remote','title'=> 'Create new Userpicks','class'=>'btn btn-default']).
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                    '{toggleData}'.
                    '{export}'
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'responsiveWrap' => false,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> Userpicks listing',
                'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>