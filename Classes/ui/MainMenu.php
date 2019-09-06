<?php

namespace Ease\Freelancer\ui;

/**
 * Hlavní menu
 *
 * @package    VitexSoftware
 * @author     Vitex <vitex@hippy.cz>
 */
class MainMenu extends \Ease\TWB4\Navbar
{

    /**
     * Menu aplikace
     *
     * @param string $name
     * @param string $brand
     * @param array  $properties
     */
    function __construct($name = null, $brand = null, $properties = null)
    {
        parent::__construct($brand, 'navBar',  $properties);
        $this->addTagClass('navbar-expand-lg bg-secondary text-uppercase fixed-top');

        $this->addMenuItem(new \Ease\Html\ATag('umim.php', _('Portfolio')),'left');
        $this->addMenuItem(new \Ease\Html\ATag('reference.php', _('About')),'left');
        $this->addMenuItem(new \Ease\Html\ATag('kontakt.php', _('Contact')),'left');
    }
}
