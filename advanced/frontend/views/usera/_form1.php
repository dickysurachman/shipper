<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pickup;
use yii\helpers\ArrayHelper;
$provinsi=Pickup::find()->orderBy(['nama' => SORT_ASC])->all();
$kprovinsi=ArrayHelper::map($provinsi,'id','nama');
/* @var $this yii\web\View */
/* @var $model app\models\Userpick */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userpick-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?= $form->field($model, 'id_pickup')->dropDownList($kprovinsi); ?>
    <?//= $form->field($model, 'id_pickup')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
