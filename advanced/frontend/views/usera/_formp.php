<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use app\models\Profile;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\user */
/* @var $form yii\widgets\ActiveForm */
//$negara=ArrayHelper::map(Profile::find()->orderBy('nama')->all(),'id','nama');
//$tipe=['Administrator','BPTU HPT','BIB','BET']
$hapus=['Enable','Disable'];
$tipe=['Administrator','FO'];
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?= $form->field($model, 'password_hash')->textInput() ?>

   
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
