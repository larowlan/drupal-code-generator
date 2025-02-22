<?php

declare(strict_types=1);

namespace PHPSTORM_META {

  registerArgumentsSet('database.tables',
    'block_content',
    'block_content__body',
    'block_content_field_data',
    'block_content_field_revision',
    'block_content_revision',
    'block_content_revision__body',
    'cache_bootstrap',
    'cache_config',
    'cache_container',
    'cache_data',
    'cache_default',
    'cache_discovery',
    'cachetags',
    'comment',
    'comment__comment_body',
    'comment_entity_statistics',
    'comment_field_data',
    'config',
    'file_managed',
    'file_usage',
    'help_search_items',
    'history',
    'key_value',
    'key_value_expire',
    'menu_link_content',
    'menu_link_content_data',
    'menu_link_content_field_revision',
    'menu_link_content_revision',
    'menu_tree',
    'node',
    'node__body',
    'node__comment',
    'node__field_image',
    'node__field_tags',
    'node_access',
    'node_field_data',
    'node_field_revision',
    'node_revision',
    'node_revision__body',
    'node_revision__comment',
    'node_revision__field_image',
    'node_revision__field_tags',
    'path_alias',
    'path_alias_revision',
    'queue',
    'router',
    'search_dataset',
    'search_index',
    'search_total',
    'sequences',
    'shortcut',
    'shortcut_field_data',
    'shortcut_set_users',
    'taxonomy_index',
    'taxonomy_term__parent',
    'taxonomy_term_data',
    'taxonomy_term_field_data',
    'taxonomy_term_field_revision',
    'taxonomy_term_revision',
    'taxonomy_term_revision__parent',
    'user__roles',
    'user__user_picture',
    'users',
    'users_data',
    'users_field_data',
    'watchdog',
  );
  expectedArguments(\Drupal\Core\Database\Connection::select(), 0, argumentsSet('database.tables'));
  expectedArguments(\Drupal\Core\Database\Query\SelectInterface::join(), 0, argumentsSet('database.tables'));
  expectedArguments(\Drupal\Core\Database\Query\SelectInterface::leftJoin(), 0, argumentsSet('database.tables'));
  expectedArguments(\Drupal\Core\Database\Query\SelectInterface::innerJoin(), 0, argumentsSet('database.tables'));
  expectedArguments(\Drupal\Core\Database\Query\SelectInterface::addJoin(), 1, argumentsSet('database.tables'));
  expectedArguments(\Drupal\Core\Database\Query\SelectInterface::orderBy(), 1, 'ASC', 'DESC');
  expectedArguments(\Drupal\KernelTests\KernelTestBase::installSchema(), 1, argumentsSet('database.tables'));

}
