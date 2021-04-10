<?php

use yii\widgets\DetailView;

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
            'role',
            //'created_at',
            //'updated_at',
            //'verification_token',
            //'tipeuser2',
    
            //'profile.nama',
            //'foto',
            //'alamat',
            //'telp',
            //'delete',
        ],
    ]) ?>

</div>
