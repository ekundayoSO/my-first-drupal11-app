<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class HelloNameController extends ControllerBase
{

    public function content()
    {
        $url = Url::fromRoute('Hello, James!');
        $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();
        return ['#markup' => $this->t('Hello, [your name]! @link', ['@link' => $link])];
    }

    public function greeting2($name)
    {
        return [
            '#markup' => $this->t('Hello, @name!', ['@name' => $name]),
        ];
    }

    public function greeting($name)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['name'])) {
            $name = $_SESSION['name'];
        } 
        

        return [
            '#markup' => $this->t('Hello, @name!', ['@name' => $name]),
        ];
    }
}
