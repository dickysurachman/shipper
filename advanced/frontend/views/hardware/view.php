<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hardware */
?>
<div class="hardware-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
        ],
    ]) ?>

</div>
