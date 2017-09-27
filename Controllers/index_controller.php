<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 11:33 PM
 */

/**
 * The home page controller
 */
class IndexController
{
    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function sayWelcome()
    {
        return $this->model->welcomeMessage();
    }


}