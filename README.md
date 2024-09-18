# All steps

# Install lando: https://docs.lando.dev/plugins/drupal/getting-started.html

# save the script
curl -fsSL https://get.lando.dev/setup-lando.sh -o setup-lando.sh

# After lando is installed, in another terminal
- source /Users/s2400060/.zshrc

# lando list of commands
- run 'lando' in terminal 

## Start new drupal project:

1. mkdir my-first-drupal11-app \
  && cd my-first-drupal11-app \
  && lando init \
    --source cwd \
    --recipe drupal11 \
    --webroot web \
    --name my-first-drupal11-app

2. lando composer create-project drupal/recommended-project:11.0.x-dev@dev tmp && cp -r tmp/. . && rm -rf tmp

3. lando start

4. lando composer require drush/drush

5. lando drush site:install --db-url=mysql://drupal11:drupal11@database/drupal11 -y

# List of lando commands
6. lando info

## Add this snippet to .lando.yml
    services:
      appservice:
        type: phpmyadmin

## Restart lando
- run lando restart

<!-- ## Updating drupal: https://www.drupal.org/docs/updating-drupal/updating-drupal-core-via-composer
-  lando composer show drupal/core-recommended
-  composer outdated ‘drupal/*’
-  composer update "drupal/core-*" --with-all-dependencies -->

### Drupal login details: drupal 11
- User name: admin  User password: CL95CpDy35 2cbWS8kC4C
### Drupal login details: drupal 10
- User name: admin  User password: A9aE7kRC

## Change password in drupal
- lando drush upwd admin newPassword

# Correcting Code Violation in drupal project
- lando composer require "squizlabs/php_codesniffer=*"
- @project root:
- ./vendor/bin/phpcs web/core/themes/stable9 --> This detects code violations
- ./vendor/bin/phpcbf web/core/themes/stable9 --> This autocorrect code violations
- ./vendor/bin/phpcs web/core/themes/stable9 --> Check the correction of errors earlier listed

# Refreshing drupal website
- lando drush cr

# API
- https://api.drupal.org/api/drupal

# Code Standard
- https://www.drupal.org/docs/develop/standards

## To install available module
  - lando composer require drupal/module_name

# Install blog module
- lando composer require 'drupal/blog:^3.1'

# Install Devel
- lando composer require 'drupal/devel:^5.3'

# Uninstall devel
- lando drush pmu devel
- lando drush pmu devel_generate

## Creating a new or own module
- lando drush ---> check installation command
- lando drush in first_module ---> To install the new module
- lando drush un first_module ---> To uninstall the new module

## Remove module
- lando composer remove drupal/your_module_name
