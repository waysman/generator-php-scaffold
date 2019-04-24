# Name
 * PHP Scaffold 
## Instalation
You need to install Yeoman and the generator.
Yeoman and generator installation is required with the following commands:
```
npm i -g yo
```
```
npm i -g generator-php-scaffold
```
## Usage
To use the generator you must enter the folder where you want the application to be created.

```
cd ~/home/Documents/my_projects
```
To start the generator execution the following command must be executed.
```
yo php-scaffold
```

## Project Structure
The following project structures will be assembled according to the technologies adopted.

### ZF3
```
|--config
|   |--autoload
|   |   |--doctrine_orm.global.php
|   |   |--global.php
|   |   |--README.md
|   |--application.config.php
|--client
|--data
|   |--README.md
|--database
|   |--migration
|   |   |--README.md
|--module
|   |--Application
|   |   |--config
|   |   |   |--module.config.php
|   |   |   |--service.config.php
|   |   |--src
|   |   |   |--Controller
|   |   |   |   |--AppAbstractController.php
|   |   |   |   |--IndexController.php
|   |   |   |--Entity
|   |   |   |   |--AppAbstractEntity.php
|   |   |   |--Exceptions
|   |   |   |   |--AppAccessDeniedException.php
|   |   |   |--http
|   |   |   |   |--AppHttpResponse.php
|   |   |   |--Repository
|   |   |   |   |--AppInterfaceRepository.php
|   |   |   |--Service
|   |   |   |   |--AppAbstractEntityService.php
|   |   |   |--Module.php
|   |   |   |--test
|   |--<Your Modules>
|--public
|   |--css
|   |--fonts
|   |--img
|   |--js
|   |--.htaccess
|   |--index.php
|   |--web.config
|--composer.json
|--CONDUCT.md
|--CONTRIBUTING.md
|--docker-compose.yml
|--Dockerfile
|--LICENCE.md
|--phpcs.xml
|--phpunit.xml.dist
|--README.md
|--TODO.md
|--Vagrantfile
```
### Symfony
```
|--app
    |--config
        |--config_dev.yml
        |--config_prod.yml
        |--config_test.yml
        |--config.yml
        |--parameters.yml
        |--routing_dev.yml
        |--routing.yml
        |--security.yml
        |--services.yml
    |--Resources
        |--view
        |--default
            |--index.html.twing
        |--base.html.twing
    |--AppCache.php
    |--AppKernel.php
    |--autoload.php
|--bin
    |--console
    |--symfony_requirements
|--client
|--data
    |--json-files
    |--README.md
|--src
    |--AppBundle
        |--Controller
            |-- AbstracApiController.php
        |--DataFixtures
        |--Entity
        |--EnventListner
            |--ExceptionListener.php
            |--JWTCreatedListener.php
        |--Exception
            |--NotFoundException.php
        |--Http
            |--ResponseBag.php
        |--Repository
        |--Resources
            |--config
                |--services.yml
        |--Security
            |--Authenticator.php
        |--Service
            |-- Command
            |-- Handler
            |-- Query
        |--AppBundle.php
|--tests
    |--Integration
        |--AbstractIntegrationTestCase.php
    |--Unit
        |--AbstractUnitTestCase.php
|--var
    |--cache
    |--jwt
    |--logs
    |--bootstrap.php.cache
    |--SymfonyRequirements.php
|--web
    |--app_dev.php
    |--app.php
    |--apple-touch-icon.png
    |--config.php
    |--favicon.ico
    |--robots.txt
|--composer.json
|--composer.lock
|--phpunit.xml
```
After the construction of the application structure for the creation of entities simply access the folder defined for the project and rerun the call to the generator.
Example:
```
cd ~/Documents/proects/my_project

yo php-scaffold
```