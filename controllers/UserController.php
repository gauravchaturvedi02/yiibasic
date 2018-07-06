<?php

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

public function actionTest(){
	return $this->render('curlxml');
	//echo 'fddfgdf';exit;
	//RestClient('hhhh');
	//return "kjndvjsjfddjjd";
}


public function actionRest(){
	$para='ffgh0';
    //echo $para ;die();
	$ch=curl_init();

	curl_setopt_array($ch, array(
                  CURLOPT_URL=>"http://mapi.indiamart.com/wservce/products/productdetail/displayid/10606853430/pageReq//token/imobile@15061981/ignore_recomd/1/modid/IMOB/product_page/PRD_DETAIL/",
                  CURLOPT_POST=>false,
                  // CURLOPT_POSTFIELDS =>"",
                 CURLOPT_RETURNTRANSFER =>true
                    ));
	$response=curl_exec($ch);
	echo ($response);
    curl_close($ch);
}




}