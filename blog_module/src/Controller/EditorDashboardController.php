<?php

namespace Drupal\blog_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

class EditorDashboardController extends ControllerBase {
  use StringTranslationTrait;

  /**
   * Returns a render-able array for the editor dashboard page.
   */
  public function content() {
    $build = [
      '#markup' => $this->t('Welcome to the Editor Dashboard'),
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
