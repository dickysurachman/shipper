<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
?>
<div class="report-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'po_code',
            'barang.nama',
            'status.nama',
            'qty',
            'hardware.nama',
            //'cur_location',
            //'last_location',
            //'users1.nama',
            'condition',
            'qty_good',
            'qty_damage',
            [
            'attribute'=>'last_checked',
            'value'=>$model->users1->username,
            ],
            'checked_time',
        ],
    ]) ?>

</div>
