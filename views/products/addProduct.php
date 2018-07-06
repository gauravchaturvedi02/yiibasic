<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Add Product';
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
             <?php for($x=0;$x<	sizeOf($categories);$x++){
             array_push($c,($categories[$x]['cat_name']));  }
             ?>

             <?= $form->field($model, 'cat_name')->dropdownList($c,
                                                              ['prompt'=>'Select Category'
                                                               ]);?>

              <h3>Enter Name of the product</h3>
          <?= $form->field($model, 'prod_name')->textInput(['autofocus' => true]) ?>
            <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>