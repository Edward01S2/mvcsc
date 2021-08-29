<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;

use Log1x\Pagi\PagiFacade as Pagi;

class Search extends Composer
{
    protected static $views = [
        'search',
        'template-search',
    ];

    public function with()
    {
        return [
          'pagi' => $this->pagination(),
        ];
    }

    public function pagination() {
      $pagination = Pagi::build();
      //return $pagination;
      return $pagination->links('components.pagination');
    }

}