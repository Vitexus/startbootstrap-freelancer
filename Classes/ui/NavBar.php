<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ease\Freelancer\ui;

/**
 * Description of NavBar
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class NavBar extends \Ease\TWB4\Navbar
{

    /**
     * 
     * @param type $brand
     * @param type $name
     * @param type $properties
     */
    public function __construct($brand = null, $name = 'navbar',
                                $properties = array())
    {
        parent::__construct($brand, $name, $properties);
        $this->addTagClass('navbar-expand-lg bg-secondary text-uppercase fixed-top');
    }

    /**
     * 
     */
    function finalize()
    {
        $this->brand->addTagClass('js-scroll-trigger');
        $backup           = $this->pageParts;
        $this->pagerParts = [];
        $this->addItem(new \Ease\TWB4\Container($backup));
        parent::finalize();
    }
}
