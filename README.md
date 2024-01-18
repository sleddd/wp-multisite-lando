# Lando WordPress Multisite Config

Be sure lando is installed before using (https://docs.lando.dev/getting-started/installation.html).

The main stack files are in the root directory and WordPress is installed in the "app" subdirectory.

## Install Instructions
1. At command line run: git clone git@github.com:sleddd/wp-multisite-lando.git
2. cd wp-multisite-lando 
3. lando plugin-add @lando/phpmyadmin
4. lando start
5. Visit wp.lando.site and run the default WordPress install.
6. Uncomment define( 'WP_ALLOW_MULTISITE', true ) in the wp-config file.
7. Visit wp.lando.site > Tools > Network Setup and follow the instructions to complete WP Multsite setup.

## Don't forget! 
You will need to update your etc/hosts file with the following: 

127.0.0.1 wp.lndo.site \
127.0.0.1 mail.wp.lndo.site \
127.0.0.1 pma.wp.lndo.site 
