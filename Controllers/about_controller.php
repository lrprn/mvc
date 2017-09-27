<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 11:40 PM
 */
/**
 * The about page controller
 */
class AboutController
{
    private $modelObj;

    function __construct( $model )
    {
        $this->modelObj = $model;

    }

    public function current()
    {
        return $this->modelObj->message = "About us today changed by aboutController.";
    }
}