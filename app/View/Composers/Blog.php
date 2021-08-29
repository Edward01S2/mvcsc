<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;

use Log1x\Pagi\PagiFacade as Pagi;

class Blog extends Composer
{
    protected static $views = [
        'index',
        'archive-event',
        'template-events',
    ];

    public function with()
    {
        return [
          'pagi' => $this->pagination(),
          'feat' => $this->noImage(),
        ];
    }

    public function pagination() {
      $pagination = Pagi::build();

      //return $pagination;

      return $pagination->links('components.pagination');
    }


    public function noImage() {
      $feat = get_field('default post image', 'option');

      //$index = array_rand($gallery, 1);
      if($feat) {
        return $feat['url'];
      }

      return;
      
    }


}