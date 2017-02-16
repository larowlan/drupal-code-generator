<?php

namespace DrupalCodeGenerator\Tests\Drupal_8;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

/**
 * Test for d8:javascript command.
 */
class JavascriptTest extends GeneratorTestCase {

  protected $class = 'Drupal_8\Javascript';

  protected $answers = [
    'Foo bar',
    'foo_bar',
  ];

  protected $fixtures = [
    'js/foo-bar.js' => __DIR__ . '/_javascript.js',
  ];

}
