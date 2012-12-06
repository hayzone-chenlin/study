<?php

class ProblemController extends CController {
	public function actionList(){
		$model = new Problem();
		$model->keyword_id = 1;
	    $models = $model->search(1);
	    $this->render('list',array(
   		'models'=>$models, 
    	));
    
	} 	
	
	public function actionNalist(){
		$model = new Problem();
		$model->keyword_id =2;
		$models = $model->osearch(1);
		$this->render('nalist',array(
		'models'=>$models, 
		));	
	}

 	public function actionAnswerlist(){
 		$model = new Problem();
 		//$model =$model->wsearch();
 		if(isset($_GET['Problem'])) {
 			$model->setAttributes($_GET['Problem']);
 			
 		}
 	} 

	public function actionError(){
		 if($error=Yii::app()->errorHandler->error)
		 {
		if(Yii::app()->request->isAjaxRequest)
		 	echo $error['message'];
			else
		  	$this->render('error', $error);
		}
	}
}

?>
