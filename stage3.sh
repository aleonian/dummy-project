#!/usr/bin/env bash

# Install and configure the latest stable version of WordPress
if [[ ! -f "/app/wp-load.php" ]]; then
    echo "Downloading WordPress..."
	  wp core download --force  --skip-content --allow-root
fi

if [[ ! -f "/app/wp-config.php" ]]; then
  echo "Configuring WordPress Stable..."
  wp core config --dbname=wordpress --dbuser=wordpress --dbpass=wordpress --dbhost=database --quiet --allow-root --extra-php <<PHP
define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );
define( 'WP_HOME', 'https://$LANDO_APP_NAME.lndo.site' );
define( 'WP_SITEURL', 'https://$LANDO_APP_NAME.lndo.site' );
PHP

fi

if ! $(wp core is-installed --allow-root); then
 echo "Installing WordPress Stable..."
 wp core install --url="$LANDO_APP_NAME.lndo.site" --quiet --title="$LANDO_APP_NAME" --admin_name=admin --admin_email="admin@local.test" --admin_password="password" --allow-root
fi
