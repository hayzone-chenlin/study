<table width="100%">
<tr>
	<th >精彩推荐</th>
</tr>
	<tr >	
		<?php foreach($models->getData() as $model) {?>
		<td width="50%" ><?php echo $model->title;?><td>
		<td width="30%" ><?php echo $model->createtime;?><td>
		<td width="10%"><?php echo $model->num ?>个答案<td>
		<td width="10%"><?php echo $model->votes ?>个投票<td>
		<?php }?>
	</tr>
</table>
<?php 
	$this->Widget('system.web.widgets.pagers.CLinkPager',array(
		'pages'=>$models->pagination,
	));
?>