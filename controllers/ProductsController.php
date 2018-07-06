<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\db\Query;
;
use app\models\Products;
use app\models\Category;
use app\models\ProductsForm;



class ProductsController extends Controller
{ 
	public function actionProd_form(){

    $categories = Yii::$app->db->createCommand('SELECT * FROM category')
               ->queryAll();
       $model = new ProductsForm();
      
        if ($model->load(Yii::$app->request->post())){

    	$prod_detail = Products::find()->where(['prod_id' => $model->prod_name])->one();
    	$prod_detail->prod_details = $model->prod_details;

    	$prod_detail->save();
      $model->cat_name='';
      $model->prod_details='';
        	
        }
      
	  return $this->render('prod_form',[
            'model' => $model,'categories'=> $categories,
        ]);
	}



   public function actionAddproduct(){
   	$model = new ProductsForm();
   	$product = new Products();
   	$categories = Yii::$app->db->createCommand('SELECT * FROM category')->queryAll();
   	if ($model->load(Yii::$app->request->post())){
        $product->prod_name = $model->prod_name;
        $product->cat_id = $model->cat_name+1;
        $product->save();
        $model->prod_name = '';
        $model->cat_name = '';
   	}
   	return $this->render('addProduct',[
            'model' => $model,'categories'=> $categories,
        ]);

   }




   public function actionAddcategory(){
   $model = new ProductsForm();
   	$category = new Category();
if ($model->load(Yii::$app->request->post())){
        $category->cat_name = $model->cat_name;
        $category->save();
        $model->cat_name ='';
   	}
	return $this->render('addCategory',[
            'model' => $model
        ]);

   }


   public function actionList()
    {$connection = \Yii::$app->db;
				
		if (Yii::$app->request->get()) {
			$d = $_GET['index'];

			$model = $connection->createCommand("SELECT * FROM products where cat_id=$d");
			$data = $model->queryAll();

			echo json_encode($data);
		} else {
			echo "<option>-</option>";
		}
		
    }


}