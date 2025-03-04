# Voyager - Export/Import

Commands for export/import Voyager menu and config


## Introduction

Voyager for Laravel is great, but it has one downside: all configuration is done within the database and cannot be configured with code. When you have multiple environments (e.g. development, staging, production), you will have conflicting configurations which is hard to sync.
This packages tries to solve this by offering the following commands:

### `artisan voyager:export`

This command will export all Voyager related tables into `.json` files into the `config` folder. Don't forget to commit this folder! :)

### `artisan voyager:import`

This command will import all data from the `config` folder into the Voyager related tables.

Additional options:

`--clear | -c` — for Voyager tables before import

`--cache-reset | -r` — for reset and recreate Voyager menu

### `artisan voyager:clear`

Made a mistake? Want to start again? Remove all exported data with `voyager:clean`.

## Install

`composer require slice-of-code-it-consultancy/voyager-config`

`php artisan vendor:publish --provider=MadeByBob\\VoyagerConfig\\VoyagerConfigServiceProvider`

## Commands explained

This documentation is still to do. Try `artisan list` and `artisan voyager:export --help` for more information

## Contact

If you have suggestions or questions feel free to open up a new issue or pull request.

You can e-mail me at `support@sofcode.xyz`.

