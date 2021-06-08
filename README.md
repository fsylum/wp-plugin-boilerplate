Personal WordPress plugin boilerplate

## Requirement

* Node.js with NPM
* Composer

## Installation

* Clone the repository to your WordPress `wp-content/plugins` directory.
* Update `name` and `description` of `package.json` to something more suitable to the plugin.
* Update `name` and `description` of `composer.json` to something more suitable to the plugin.
* Rename `wp-plugin-boilerplate.php` to a more appropriate name then modify the plugin header accordingly.
* Update namespace from `Fsylum\Plugin` to something more approriate in all files in `src` folder as well as the `autoload` section of `composer.json`.
* Run `composer dump-autoload` to regenerate the autoloader.

## Workflow

* This plugin is integrated with Laravel Mix, so you should be able to use `npx mix`, `npx mix watch` and `npx mix --production` as usual.
* All 3rd party dependencies are managed via Composer.
* New functionalities are added via `services` that extends the `Fsylum\Plugin\Contracts\Runnable` interface which is then register inside the `wp-plugin-boilerplate.php`. A few examples are included in `src/WP` directory.
* CLI commands are handled inside the `src/WP/CLI` directory and registered inside the `wp-plugin-boilerplate.php`. An example is provided as reference.
