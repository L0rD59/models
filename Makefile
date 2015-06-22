all: help

php:
	@docker run -it --rm -v `pwd`:/app -e USER_UID=`id -u` docker.enaco.fr/php:5.6 $$cmd

init:
	@docker run -t --rm -v `pwd`:/app -e USER_UID=`id -u` docker.enaco.fr/composer:5.6 install

list:
	@docker run -it --rm -v `pwd`:/app -e USER_UID=`id -u` docker.enaco.fr/php:5.6 bin/doctrine list

test:
	@docker run -it --rm -v `pwd`:/app -e USER_UID=`id -u` docker.enaco.fr/php:5.6 bin/phpspec run

help:
	@echo "Usage : make <command>"