# Client API for Findsome Cards

## Installation process

### using the package on existing projects

set platform-check to **false** code on your composer.json config collection

```json
"config": {
    "platform-check": false
}
```

and then add a new repo on your composer.json repositories array,

```json
"repositories": [
    {
        "type" : "vcs",
        "url"  : "https://github.com/findsome-cards/client-api.git"
    }
]
```

now you can require this package by 

```bash
composer require findsome/client-api
```

after requiring the package, you will need to publish the config file to your working project directory. remember if you already have a findsome.php file on your config directory of the project root, that file will be replaced by the new findsome.php config file.
this file will help you to configuare your findsome key => values.

for doing this, first, cd into your project's root and then run this command on terminal

```bash
php -r "copy('vendor/findsome/client-api/config/findsome.php', 'config/findsome.php');"
```

if this fails to publish the config file, create a new dir on project's root named config.

```bash
mkdir config
```

and re-run the publishing command.

done!

### using on new project

first you need to create composer.json file on your project's root directory.
add the following code to your composer.json file

```json
{
    "name": "vendor/project-name",
    "type": "project",
    "description": "your project discription",
    "require": {
        "findsome/client-api": "dev-master"
    },
    "config": {
        "platform-check": false,
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true
    },
    "repositories": [
        {
            "type" : "vcs",
            "url"  : "https://github.com/findsome-cards/client-api.git"
        }
    ]
}

```

and then run 

```bash
composer install
```

cd into your project directory and then publish the config file by typing into your terminal

```bash
php -r "copy('vendor/findsome/client-api/config/findsome.php', 'config/findsome.php');"
```

if this fails to publish the config file, create a new dir on project's root named config.

```bash
mkdir config
```

and re-run the publishing command.

now you are good to go.

## Documentation for using this package

in terms of using this package, please read this **[Use Guide](GUIDE.md)**
