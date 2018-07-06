<?php

namespace app\models;

use Yii;
use yii\base\Model;
class ProductsForm extends Model{

    public $prod_name;
    public $prod_details;
    public $cat_id;
    public $cat_name;
  


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            
            [['cat_name', 'prod_name', 'prod_details'], 'required'],
           
        ];
    }
  



}