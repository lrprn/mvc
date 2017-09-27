<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 11:34 PM
 */
/**
 * The home page model
 */
class IndexModel
{

    private $message = 'Welcome to Home page.';

    function __construct()
    {

    }

    public function welcomeMessage()
    {
        return $this->message;
    }

}



