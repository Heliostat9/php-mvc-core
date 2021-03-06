<?php


namespace heliostat\core\form;


use heliostat\core\Model;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, $attrubute)
    {
        return new InputField($model, $attrubute);
    }


}