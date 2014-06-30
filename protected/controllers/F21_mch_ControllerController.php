<?php

class F21_mch_ControllerController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
                 function actionCGridView(){
                    $model = new F21Mch();
                    $F21Mch = new CActiveDataprovider($model);
                    
                    $this->render("CGridView",array("F21Mch" => $F21Mch));
                }
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}