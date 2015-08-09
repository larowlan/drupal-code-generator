<?php

namespace DrupalCodeGenerator\Commands\Drupal_7;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use DrupalCodeGenerator\Commands\BaseGenerator;

/**
 * Implements generate:d7:module command.
 */
class Theme extends BaseGenerator {

  protected $name = 'd7:theme';
  protected $description = 'Generate Drupal 7 theme';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions = [
      'name' => ['Theme name', [$this, 'defaultName']],
      'machine_name' => ['Theme machine name', [$this, 'defaultMachineName']],
      'description' => ['Theme description', 'A simple Drupal theme generated by DCG.'],
      'base_theme' => ['Basetheme', ''],
      'version' => ['Version', '7.x-1.0-dev'],
    ];

    $vars = $this->collectVars($input, $output, $questions);
    $vars['project_type'] = 'theme';

    $this->files[$vars['machine_name'] . '/' . $vars['machine_name'] . '.info'] = $this->render('d7/theme-info.twig', $vars);
    $this->files[$vars['machine_name'] . '/template.php'] = $this->render('d7/template.php.twig', $vars);
    $this->files[$vars['machine_name'] . '/css/' . $vars['machine_name'] . '.css'] = '';
    $this->files[$vars['machine_name'] . '/js/' . $vars['machine_name'] . '.js'] = $this->render('d7/js.twig', $vars);
    $this->files[$vars['machine_name'] . '/templates'] = NULL;
    $this->files[$vars['machine_name'] . '/images'] = NULL;
  }

}
