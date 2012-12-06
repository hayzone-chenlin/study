<table width="100%">
<tr>
	<th >等待你来回答</th>
</tr>
	<tr >	
		<?php foreach($models->getData() as $model) {?>
		<td width="70%" ><?php echo $model->title;?><td>
		<td width="20%" ><?php echo $model->createtime;?><td>
		<td width="10%"><?php echo CHtml::button('我也要回答').'<br>';?><td>
		<?php }?>
	</tr>
</table>
<?php 
	$this->Widget('system.web.widgets.pagers.CLinkPager',array(
		'pages'=>$models->pagination,
	));
?>