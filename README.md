## ENACO's Models

#### Installation

Using Composer : 
add the enaco private repository in your composer.json : 

```

{
    ...
    
    "repositories": [
        {
            "type": "composer",
            "url": "http://packages-private.enaco.fr"
        }
    ]
    
    ...
    
```

then run `composer require lig/models`

#### Tests

run `bin/phpspec run`