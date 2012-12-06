热门词条<br/>
<?php 
	foreach ($model->getData() as $v){

		echo $v->keyword.'<br/>';
	}
?>
<?php 
//	$this->Widget('system.web.widgets.pagers.CLinkPager',array(
//		'pages'=>$model->pagination,
//	));
?>