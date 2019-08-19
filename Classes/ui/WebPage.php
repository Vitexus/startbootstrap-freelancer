<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Ease\Freelancer\ui;
/**
 * Description of WebPage
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class WebPage extends \Ease\TWB4\WebPage
{
    public function __construct($pageTitle = null)
    {
        parent::__construct($pageTitle);
        $this->includeCss('css/freelancer.css');
        $this->body->setTagId('page-top');
    }
}
