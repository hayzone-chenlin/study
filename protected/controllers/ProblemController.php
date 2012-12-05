<?php

class ProblemController extends Controller {
	public function actionList(){
	$model = new Problem();
	$criteria = new CDbCriteria();
	$criteria-> with="reply";
	$criteria->alias ="p";
	$criteria->select="p.content.cont(problem.id) as num";
	$criteria->	compare(p.id, $id,false);
	$criteria->group = 'reply.id';
	$criteria->order = 'num desc';
}
//	 if(isset($_GET['Problem'])) {
//	 	 $model->setAttributes($_GET['Problem']);
//	 	}
	public function actionCont(){
		
	}
	 		 

}

?>
