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
            'Repository Items without Media',
            'dgi_i8_helper.migration_reports.missing_media'
          )->toString(),
          '#wrapper_attributes' => [
            'class' => [
              'wrapper__links__link',
            ],
          ],
        ],
        [
          '#markup' => Link::createFromRoute(
            'Repository Items without Derivatives',
            'dgi_i8_helper.migration_reports.missing_derivatives'
          )->toString(),
          '#wrapper_attributes' => [
            'class' => [
              'wrapper__links__link',
            ]
          ],
        ],
        [
          '#markup' => Link::createFromRoute(
            'Orphaned Files',
            'dgi_i8_helper.migration_reports.orphaned_files'
          )->toString(),
          '#wrapper_attributes' => [
            'class' => [
              'wrapper__links__link',
            ],
          ],
        ],
        [
          '#markup' => Link::createFromRoute(
            'Orphaned Media',
            'dgi_i8_helper.migration_reports.orphaned_media'
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
