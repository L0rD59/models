## ENACO's Models

#### Installation

Using Composer, add the enaco private repository in your `composer.json` : 

`composer config repositories.enaco-private composer http://packages-private.enaco.fr`

then run `composer require lig/models`

### Usages :

#### Doctrine :

```
make php cmd="bin/doctrine list"
```

#### Run tests :

```
make test
```