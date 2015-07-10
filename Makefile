all: help

php:
	@docker run -it --rm -v `pwd`:/app -e USER_UID=`id -u` docker.enaco.fr/webserver:5.6 php $$cmd

composer:
	@docker run -it --rm -v `pwd`:/app -e USER_UID=`id -u` docker.enaco.fr/composer:5.6 $$cmd

help:
	@echo "Usage : make <command>"
