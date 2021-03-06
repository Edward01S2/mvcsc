<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Post Types
    |--------------------------------------------------------------------------
    |
    | Here you may specify the post types to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'post' => [
        // 'resource' => [
        //     'enter_title_here' => 'Enter resource title',
        //     'menu_icon' => 'dashicons-lock',
        //     'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
        //     'show_in_rest' => true,
        //     'has_archive' => true,
        //     'taxonomies' => ['post_tag'],
        //     'slug' => 'resources',
        //     'labels' => [
        //         'singular' => 'Resource',
        //         'plural' => 'Resources',
        //     ],
        // ],
        // 'glossary' => [
        //     'enter_title_here' => 'Enter title',
        //     'menu_icon' => 'dashicons-book-alt',
        //     'supports' => ['title', 'editor'],
        //     'show_in_rest' => true,
        //     'has_archive' => false,
        //     'labels' => [
        //         'singular' => 'Glossary',
        //         'plural' => 'Glossary',
        //     ],
        // ],
        // 'member' => [
        //     'enter_title_here' => 'Enter member name',
        //     'menu_icon' => 'dashicons-id-alt',
        //     'supports' => ['title', 'editor', 'thumbnail'],
        //     'show_in_rest' => true,
        //     'has_archive' => false,
        //     'labels' => [
        //         'singular' => 'Member',
        //         'plural' => 'Members',
        //     ],
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you may specify the taxonomies to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'taxonomy' => [
        // 'genre' => [
        //     'links' => ['book'],
        //     'meta_box' => 'radio',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocks
    |--------------------------------------------------------------------------
    |
    | Here you may specify the block types to be registered by Poet and
    | rendered using Blade.
    |
    | Blocks are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the block `sage/accordion`, your block view would be located at:
    |   ??? `views/blocks/accordion.blade.php`
    |
    | Block views have the following variables available:
    |   ??? $data    ??? An object containing the block data.
    |   ??? $content ??? A string containing the InnerBlocks content.
    |                Returns `null` when empty.
    |
    */

    'block' => [
        // 'sage/accordion',
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block categories to be registered by Poet for use
    | in the editor.
    |
    */

    'block_category' => [
        'acf' => [
            'title' => 'ACF',
            'icon' => 'star-filled',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor Palette
    |--------------------------------------------------------------------------
    |
    | Here you may specify the color palette registered in the Gutenberg
    | editor.
    |
    | A color palette can be passed as an array or by passing the filename of
    | a JSON file containing the palette.
    |
    | If a color is passed a value directly, the slug will automatically be
    | converted to Title Case and used as the color name.
    |
    | If the palette is explicitly set to `true` ??? Poet will attempt to
    | register the palette using the default `palette.json` filename generated
    | by <https://github.com/roots/palette-webpack-plugin>
    |
    */

    'palette' => [
        'blue-100' => '#00C6F2',
        'blue-200' => '#1851FF',
        'blue-300' => '#160866',
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Menu
    |--------------------------------------------------------------------------
    |
    | Here you may specify admin menu item page slugs you would like moved to
    | the Tools menu in an attempt to clean up unwanted core/plugin bloat.
    |
    | Alternatively, you may also explicitly pass `false` to any menu item to
    | remove it entirely.
    |
    */

    'admin_menu' => [
        'edit-comments',
    ],

];
