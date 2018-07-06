<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Product Details Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>


      <div class="row">
            <div class="col-lg-5">
                 <?php $c=array();
                 ?>
                <?php $form = ActiveForm::begin(['id' => 'products-form']); ?>
                <h3>Select Category of the Product</h3>
             <?php for($x=0;$x<sizeOf($categories);$x++){
             array_push($c,($categories[$x]['cat_name']));  }?>

               <?= $form->field($model, 'cat_name')->dropdownList($c,
                                                              ['prompt'=>'Select Category',
                                                               'onchange'=> 'changeProduct(this.value)']);?>
                
                                                                                          
                 <h3>Enter Name of the products</h3>
                <?php $h = []; ?>
                <?= $form->field($model, 'prod_name')->dropdownList($h,
                    ['prompt'=> 'Select Product']); ?>

                  <h3>Fill in Details of the product</h3>

                 <?= $form->field($model, 'prod_details')->textarea(['rows' => 6]) ?>



                     

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
    <script>
  function changeProduct(x){
    x = parseInt(x)+1;
    console.log(x);
     $('#productsform-prod_name').html("")
      $.ajax({
          method: "GET",
          url: "list",
          data: { index:(x)}
           })
         .done(function( numbers ) {
        var data = JSON.parse(numbers);
      
         var option = '';
       for (var i=0;i<data.length;i++){
         option += '<option value="'+ data[i].prod_id + '">' + data[i].prod_name + '</option>';
         
                    }
                    
           $('#productsform-prod_name').append(option);
    });
  }


    </script>
