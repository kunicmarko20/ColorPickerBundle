#!/usr/bin/env sh
set -ev

composer global require "squizlabs/php_codesniffer"
if [ "$SYMFONY" != "" ]; then composer require "symfony/symfony:$SYMFONY" --no-update; fi;
composer install --dev --prefer-dist