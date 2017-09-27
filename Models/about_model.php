<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 11:41 PM
 */
/**
 * The about page model
 */
class AboutModel
{

    private $message;

    public function __construct()
    {
        $this->message = "Welcome to the of PHP MVC framework official site.";
    }

    public function nowADays()
    {
        return $this->message = "nowadays everybody wants to be a boss.";
    }
}

