<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->widget('zii.widgets.jui.CJuiButton',array(
    'buttonType'=>'button',
    'name'=>'btnSave',
    'caption'=>'Save',
    'onclick'=>new CJavaScriptExpression('function(){alert("Save button clicked"); this.blur(); return false;}'),
));