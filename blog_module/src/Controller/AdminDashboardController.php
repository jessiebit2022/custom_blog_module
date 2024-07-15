<?php

namespace Drupal\blog_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

class AdminDashboardController extends ControllerBase {
  use StringTranslationTrait;

  /**
   * Returns a render-able array for the admin dashboard page.
   */
  public function content() {
    $build = [
      '#markup' => $this->t('Welcome to the Admin Dashboard'),
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'blog_module';
  }
}

