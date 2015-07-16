## Models

Some data model, can be generate with [php-schema](https://github.com/dunglas/php-schema "php-schema")

### Requirements

This sample require [Docker](https://docker.com "Docker") and [Docker-Compose](https://docs.docker.com/compose/install/ "Docker-Compose").

### Installation

Clone this repository 

Up environment `docker-compose up -d`

Install composer dependencies `docker-compose run --rm composer install`

### Usages

Run `docker-compose port mysql 3306` to see the address of mysql.

#### Doctrine 
Run `docker-compose run --rm php bin/doctrine orm:schema-tool:update --force`.

#### Data Fixtures
Run `docker-compose run --rm php bin/doctrine fixtures:load --fixtures=src/LIG/DataFixtures/ORM`.


### Tests :
Run `docker-compose run --rm php bin/phpspec run`.

