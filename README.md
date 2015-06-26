## ENACO's Models

#### Installation

Using Composer, add the enaco private repository in your `composer.json` : 

`composer config repositories.enaco-private composer http://packages-private.enaco.fr`

then run `composer require lig/models`

### Usages :

#### Doctrine :

```
php bin/doctrine
```

#### Data Fixtures
php bin/doctrine fixtures:load


#### Run tests :

```
php bin/phpspec run
```