<?php

namespace DrupalCodeGenerator\Command;

/**
 * Implements configuration-entity command.
 */
final class ConfigurationEntity extends ModuleGenerator {

  protected $name = 'configuration-entity';
  protected $description = 'Generates configuration entity module';
  protected $alias = 'config-entity';

  /**
   * {@inheritdoc}
   */
  protected function generate(): void {
    $vars = &$this->collectDefault();

    $vars['entity_type_label'] = $this->ask('Entity type label', '{name}');
    $vars['entity_type_id'] = $this->ask('Entity type ID', '{entity_type_label|h2m}');
    $vars['class_prefix'] = '{entity_type_id|camelize}';

    $this->addFile('src/{class_prefix}ListBuilder.php', 'src/ExampleListBuilder.php');
    $this->addFile('src/Form/{class_prefix}Form.php', 'src/Form/ExampleForm.php');
    $this->addFile('src/{class_prefix}Interface.php', 'src/ExampleInterface.php');
    $this->addFile('src/Entity/{class_prefix}.php', 'src/Entity/Example.php');
    $this->addFile('{machine_name}.routing.yml', 'model.routing.yml')
      ->appendIfExists();
    $this->addFile('{machine_name}.links.action.yml', 'model.links.action.yml')
      ->appendIfExists();
    $this->addFile('{machine_name}.links.menu.yml', 'model.links.menu.yml')
      ->appendIfExists();
    $this->addFile('{machine_name}.permissions.yml', 'model.permissions.yml')
      ->appendIfExists();
    $this->addFile('config/schema/{machine_name}.schema.yml', 'config/schema/model.schema.yml')
      ->appendIfExists();

    // Add 'configure' link to the info file if it exists.
    $update_info = static function (?string $existing_content) use ($vars): ?string {
      if ($existing_content && !\preg_match('/^configure: /m', $existing_content)) {
        return "{$existing_content}configure: entity.{$vars['entity_type_id']}.collection\n";
      }
    };
    $this->addFile('{machine_name}.info.yml')
      ->resolver($update_info);
  }

}
