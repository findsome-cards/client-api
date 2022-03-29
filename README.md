# Client API for Findsome Cards

## Installation process

### using the project on existing package

add the following code on your composer.json (if you have already added your github repo access to your composer file, you can ignore this step.)

```json
"config": {
    "platform-check": false,
    "optimize-autoloader": true,
    "preferred-install": "dist",
    "sort-packages": true,
}
```

now you can require this package by 

```bash
composer require findsome/client-api
```
after requiring the package, you will need to publish the config file to your working project directory. remember if you already have a findsome.php file on your config directory of the project root, that file will be replaced by the new findsome.php config file.
this file will help you to configuare your findsome key => values.

for doing this, first, cd into your project's roo and then run this command on terminal

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
        "findsome/client-api": "dev-master",
    },
    "config": {
        "platform-check": false,
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
    }
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

