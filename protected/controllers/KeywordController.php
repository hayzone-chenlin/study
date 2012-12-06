<?php
 class KeywordController extends CController {
 	public function actionList(){
 		$model = new Keyword();
 		$model = $model->search();
 		$this->render('list',array(
 			'model'=>$model,
 		));
 	}
}

?>