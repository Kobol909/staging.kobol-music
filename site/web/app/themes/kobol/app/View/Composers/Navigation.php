<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class Navigation extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.primary_navigation',
        'partials.legals_navigation',
        'partials.footer_links_navigation',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'primary_navigation' => $this->primary_navigation(),
            'legals_navigation' => $this->legals_navigation(),
            'footer_links_navigation' => $this->footer_links_navigation(),
        ];
    }

    /**
     * Returns the primary_navigation navigation.
     *
     * @return array
     */
    public function primary_navigation()
    {
        if (Navi::build('primary_navigation')->isEmpty()) {
            return;
        }
        
        return Navi::build('primary_navigation')->toArray();
    }

    /**
     * Returns the legals_navigation navigation.
     *
     * @return array
     */
    public function legals_navigation()
    {
        if (Navi::build('legals_navigation')->isEmpty()) {
            return;
        }
        
        return Navi::build('legals_navigation')->toArray();
    }

    /**
     * Returns the footer_links_navigation navigation.
     *
     * @return array
     */
    public function footer_links_navigation()
    {
        if (Navi::build('footer_links_navigation')->isEmpty()) {
            return;
        }
        
        return Navi::build('footer_links_navigation')->toArray();
    }
}
