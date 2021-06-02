<?php

namespace Drupal\dgi_i8_reporting\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;

/**
 * DGI Islandora migration reporting controller.
 */
class DgiReportingController extends ControllerBase {

  /**
   * Returns a render-able array containing migration reports.
   */
  public function content() {
    $build['page_description'] = [
      '#markup' => $this->t('Islandora Migration Reports'),
    ];

    $build['migration_reports'] = [
      '#theme' => 'item_list',
      '#items' => [
        [
          '#markup' => Link::createFromRoute(
            'Repository Items Missing Media',
            'dgi_i8_helper.migration_reports.missing_media'
          )->toString(),
          '#wrapper_attributes' => [
            'class' => [
              'wrapper__links__link',
            ],
          ],
        ],
      ],
    ];

    return $build;
  }

}
