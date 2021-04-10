<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Location;
use app\models\Barang;
use app\models\Hardware;
use app\models\Status;
/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12">
    <?= $form->field($model, 'po_code')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-4">
    <?php
        echo $form->field($model, 'id_barang')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Barang::find()->all(), 'id', 'nama'),
        'options' => ['placeholder' => 'Select ',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>
    </div>
    <div class="col-md-3">
    <? //= $form->field($model, 'id_barang')->textInput() ?>
     <?php
        echo $form->field($model, 'id_status')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Status::find()->all(), 'id', 'nama'),
        'options' => ['placeholder' => 'Select ',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>
    </div>
    <div class="col-md-2">
    <? //= $form->field($model, 'id_status')->textInput() ?>
    <?= $form->field($model, 'qty')->textInput() ?>
    </div>
    <div class="col-md-3">
     <?php
        echo $form->field($model, 'id_hardware')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Hardware::find()->all(), 'id', 'nama'),
        'options' => ['placeholder' => 'Select ',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>
    </div>
    <div class="col-md-4">
    <? //= $form->field($model, 'id_hardware')->textInput() ?>
     <?php
        echo $form->field($model, 'last_location')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Location::find()->all(), 'id', 'nama'),
        'options' => ['placeholder' => 'Select ',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>
    </div>
    <?//= $form->field($model, 'last_location')->textInput() ?>
    <div class="col-md-4">
    <?= $form->field($model, 'condition')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
    <?= $form->field($model, 'qty_good')->textInput() ?>
    </div>
    <div class="col-md-2">
    <?= $form->field($model, 'qty_damage')->textInput() ?>
    </div>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
