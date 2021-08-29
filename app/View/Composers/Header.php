<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Header extends Composer
{
    protected static $views = [
        'partials.header',
    ];

    public function with()
    {
        return [
            'primary' => $this->navi('primary'),
            'secondary' => $this->navi('secondary'),
            'header_icon' => get_field('header icon', 'options'),
            'opt' => get_field('opt out', 'options')
        ];
    }

    public function navi($menu) {
      if (Navi::build()->isEmpty()) {
          return;
      }
      
      return Navi::build($menu)->toArray();
    }

}