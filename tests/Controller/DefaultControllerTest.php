<?php

namespace Drupal\dummy\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the dummy module.
 */
class DefaultControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "dummy DefaultController's controller functionality",
      'description' => 'Test Unit for module dummy and controller DefaultController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests dummy functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module dummy.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
