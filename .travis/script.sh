#!/usr/bin/env sh
set -ev

export PATH="$PATH:$HOME/.config/composer/vendor/bin"
phpcs --extensions=php --standard=psr2 . --ignore=vendor
./vendor/bin/phpunit -c phpunit.xml.dist --coverage-clover build/logs/clover.xml