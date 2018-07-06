<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Add Category';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

     <div class="row">
            <div class="col-lg-5">
                 <?php $c=array();
                 ?>
                <?php $form = ActiveForm::begin(['id' => 'category-form']); ?>
               
              <h3>Enter Name of the Category</h3>
          <?= $form->field($model, 'cat_name')->textInput(['autofocus' => true]) ?>
            <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>