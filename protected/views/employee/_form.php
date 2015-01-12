<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'departmentid'); ?>
		<?php echo $form->textField($model,'departmentid'); ?>
		<?php echo $form->error($model,'departmentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext'); ?>
		<?php echo $form->textField($model,'ext'); ?>
		<?php echo $form->error($model,'ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hiredate'); ?>
		<?php echo $form->textField($model,'hiredate'); ?>
		<?php echo $form->error($model,'hiredate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leavedate'); ?>
		<?php echo $form->textField($model,'leavedate'); ?>
		<?php echo $form->error($model,'leavedate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->