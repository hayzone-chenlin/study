<?php $form = $this->beginWidget('CActiveForm', array(
	 'method' => 'get',
	 'action' => $this->createUrl('answerlist'),
))?>
<?php echo $form->textField($model, 'title')?>
<?php echo $form->Textarea($model, 'title')?>
<?php $this->endWidget()?>
