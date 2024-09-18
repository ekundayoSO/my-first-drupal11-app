<?php

namespace Drupal\book_list\Controller;

use Drupal\Core\Controller\ControllerBase;

class BookListController extends ControllerBase
{
    public function content()
    {
        return [
            "#markup" => '<div id="book-app"></div>',
            "#attached" => [
                "library" => ["book_list/book_list"],
            ],
        ];
    }
}
