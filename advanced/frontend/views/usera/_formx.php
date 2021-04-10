<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use app\models\Profile;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\user */
/* @var $form yii\widgets\ActiveForm */
//use app\models\Company;
//$negara=ArrayHelper::map(Company::find()->orderBy('nama')->all(),'id','nama');
//$tipe=['Administrator','BPTU HPT','BIB','BET']
$hapus=['Enable','Disable'];
//$tipe=['Admin Company','Super Admin'];
$tipe=['admin'=>'Administrator','view'=>'Viewer'];

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'role')->dropDownList($tipe) ?>

   
    
    
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
