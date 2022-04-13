<?php
/**
 * Configuration overrides for WP_ENV === 'staging'
 */

use Roots\WPConfig\Config;

/**
 * You should try to keep staging as close to production as possible. However,
 * should you need to, you can always override production configuration values
 * with `Config::define`.
 *
 * Example: `Config::define('WP_DEBUG', true);`
 * Example: `Config::define('DISALLOW_FILE_MODS', false);`
 */
// Disable the plugin and theme file editor in the admin
Config::define('DISALLOW_FILE_EDIT', false);
// Disable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);
// Disable the indexing from robots
Config::define('DISALLOW_INDEXING', true);
