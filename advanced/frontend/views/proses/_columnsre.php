<?php
use yii\helpers\Url;

return [
    
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'po_code',
     ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_barang',
        'value'=>'barang.nama'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_status',
        'value'=>'status.nama'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'qty',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_hardware',
        'value'=>'hardware.nama'
    ],
    //[
    //    'class'=>'\kartik\grid\DataColumn',
    //    'attribute'=>'last_checked',
       // 'value'=>'last-checked.username'
    //],
   

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'cur_location',
        'value'=>'curlocation.nama'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'last_location',
        'value'=>'lastlocation.nama'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'cur_location',
        'header'=>'Placement',
        'format' => 'raw',
        'label' => 'Placement',
        'value'=>'states'
    ],

    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'last_checked',
    // ],
     
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'po_code',
    // ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'condition',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'qty_good',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'qty_damage',
     ],
     [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'last_checked',
        'value'=>'users1.username'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'checked_time',
     ],
];   