<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Footer extends Composer
{
    protected static $views = [
        'partials.footer',
    ];

    public function with()
    {
        return [
            'footer' => $this->navi('footer'),
            'social' => get_field('social', 'options'),
            'content' => get_field('info', 'options'),
            'logo' => get_field('aff logo', 'options'),
            'aff_text' => get_field('aff text', 'options')
        ];
    }

    public function navi($menu) {
      if (Navi::build()->isEmpty()) {
          return;
      }
      
      return Navi::build($menu)->toArray();
    }

}