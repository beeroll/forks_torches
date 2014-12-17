<?php
$this->pageTitle=Yii::app()->name;


//Наименование продукта
$productName = "";
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'name' => 'product_name',
    'value' => $productName,
    'sourceUrl' => $this->createUrl('site/findProduct'),
    'options' => array(
        'minLength' => '3',
        'open' => 'js:function() {
                            var position = $("ul").position().left;
                            $("ul").css("left", position-11);
                        }',
    ),
    'htmlOptions' => array(
        'style' => 'width: 330px',
        'placeholder' => 'Наименование продукта',
    )
));

echo CHtml::textField('weight'); //Вес продукта

//Город
$city = "";
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'name' => 'city_name',
    'value' => $city,
    'sourceUrl' => $this->createUrl('site/findCity'),
    'options' => array(
        'minLength' => '3',
        'open' => 'js:function() {
                            var position = $("ul").position().left;
                            $("ul").css("left", position-11);
                        }',
    ),
    'htmlOptions' => array(
        'style' => 'width: 130px',
        'placeholder' => 'Город',
    )
));

echo CHtml::textField('price'); //Стоимость продукта
echo CHtml::submitButton('Добавить');