<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
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
        'attribute'=>'last_checked',
        'value'=>'users1.username'
    ],

   // [
   //     'class'=>'\kartik\grid\DataColumn',
   //     'attribute'=>'cur_location',
   // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'last_location',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'last_checked',
    // ],
     [
        'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'checked_time',
     ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'po_code',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'condition',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'qty_good',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'qty_damage',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   