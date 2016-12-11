#!/usr/bin/env bash

# Update ubuntu repositories.
sudo apt-get update --yes
sudo apt-get upgrade --yes

# Install Apache
sudo apt-get install --yes apache2

# Install MySQL
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password password"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password password"
sudo apt-get install --yes mysql-server
mysql -u root -ppassword -e "CREATE SCHEMA djesus;"

# Install PHP5
sudo apt-get install --yes php5-gd libssh2-php libapache2-mod-php5 php5-mysql

# Changing config file wordpress
cd /home/www/
cp wp-config-sample.php wp-config.php
sudo sed -i "s/database_name_here/djesus/g" wp-config.php
sudo sed -i "s/username_here/root/g" wp-config.php
sudo sed -i "s/password_here/password/g" wp-config.php
sudo sed -i "s/'WP_DEBUG', false/'WP_DEBUG', true/g" wp-config.php

# Setup Apache
sudo a2enmod rewrite
sudo a2dissite 000-default.conf default-ssl.conf

# Copy and load vhost
sudo ln -s /home/www/vagrant/djesus.conf /etc/apache2/sites-enabled/

# Restart Apache2
sudo service apache2 restart