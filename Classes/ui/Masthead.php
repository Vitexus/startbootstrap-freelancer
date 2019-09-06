<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ease\Freelancer\ui;

/**
 * Description of Masthead
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Masthead extends \Ease\Html\HeaderTag
{
    public function __construct($content = null, $properties = array())
    {
        parent::__construct($content, $properties);
        $this->addTagClass('masthead bg-primary text-white text-center');
        $avatar = new \Ease\Html\ImgTag('img/avataaars.svg','',['class'=>'masthead-avatar mb-5']);
        $this->addItem( new \Ease\Html\DivTag(['<!-- Masthead Avatar Image -->', $avatar ], ['class'=>'container d-flex align-items-center flex-column']));
        
    }    //put your code here
}
