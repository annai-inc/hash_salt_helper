<?php

namespace Drupal\hash_salt_helper\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Site\Settings;

/**
 * Class HashSaltHelperController.
 *
 * @package Drupal\hash_salt_helper\Controller
 */
class HashSaltHelperController extends ControllerBase {

  /**
   * Show hash salt
   *
   * @return string
   *   Return information of hash salt.
   */
  public function show() {
    $salt = isset($_SERVER['PANTHEON_ENVIRONMENT']) ?  getenv("DRUPAL_HASH_SALT") : Settings::get('hash_salt');
    return [
      '#theme' => 'hash_salt_helper_show',
      '#salt' => $salt,
    ];
  }
}
