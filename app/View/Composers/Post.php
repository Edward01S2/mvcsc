<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
        'template-photos',
        'partials.event-item',
        'single-event',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'feat' => get_field('default post image', 'option')['url'],
            'cats' =>$this->getCats(),
            //'link' => $this->getLink(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public function getCats() {
        $id = get_the_ID();

        $args = [
            'fields' => 'names',
        ];

        $categories = wp_get_post_categories($id, $args);

        $list = implode(', ', $categories);

        return $list;

        // foreach( $categories as $category) {
        //     $name = $category->name;
        
        //     echo "<span class=" . esc_attr( $name) . "></span>";
        // }

    }

}
