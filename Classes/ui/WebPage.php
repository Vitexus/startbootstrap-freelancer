<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ease\Freelancer\ui;

use Ease\Html\Comment;
use Ease\Html\MetaTag;

/**
 * Description of WebPage
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class WebPage extends \Ease\TWB4\WebPage
{
    /**
     * Where to look for bootstrap stylesheet theme
     * @var string path or url 
     */
    public $bootstrapThemeCSS = 'css/freelancer.min.css';

    /**
     * 
     * @param string $pageTitle
     */
    public function __construct($pageTitle = null)
    {
        parent::__construct($pageTitle);
        $this->includeCss('css/freelancer.css');
        $this->body->setTagId('page-top');

        $this->head->addItem(new MetaTag('description', ''));
        $this->head->addItem(new MetaTag('author', ''));

        $this->head->addItem(new Comment('Custom fonts for this theme'));

        $this->includeCss('vendor/fontawesome-free/css/all.min.css');
        $this->includeCss('https://fonts.googleapis.com/css?family=Montserrat:400,700');
        $this->includeCss('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');

        $this->addItem([new Comment('Navigation'), new MainMenu('mainmenu',
                _('Start Bootstrap'), ['id' => 'mainNav'])]);
        $this->addItem([new Comment('Masthead'), new Masthead()]);
    }
}
