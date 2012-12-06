<?php
class ReplyController extends CController {
	public function actionList(){
		$model = new Reply();
		$this->render('list',array(
   		'model'=>$model, 
    ));
	 }
}

?>