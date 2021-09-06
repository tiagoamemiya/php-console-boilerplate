# PHP  Console Boilerplate

![banner-doc](./docs/assets/banner-doc.png)

A boilerplate to PHP Console App like artisan [Laravel](https://github.com/laravel/laravel).
@todo Unit Tests

Based on awesome project live coding of @nunomaduro on Laracon Online 2021 [click here to see](https://youtu.be/ps9oNo3XA4U).

## Dependencies
--------------

- [Symfony Console](https://github.com/symfony/console)
- [Collision](https://github.com/nunomaduro/collision)

## Requirements
---------------

- [Composer](https://github.com/composer/composer)
- PHP 7.3.27 or higher
- Testing PHP version with Docker example: ``` docker run --rm -v $(pwd):/app -w /app php:7.3.27-alpine php console ```

## Usage
--------

### 1. Initiate local & Install dependencies with Composer :
```shell
  make dev/local

```

### 2. Run console and see the options and commands availables:
  ```shell
    docker exec -it app-console php console
  ``` 
  ![screenshot 1](./docs/assets/screenshot-1.png)

### 3. Run Hello World Command Example:
  ```shell
    docker exec -it app-console php console hello-world
  ```
  ![screenshot 2](./docs/assets/screenshot-2.png)
### 4. Output color styles available:

  ```php
  ...
    $this->ln('Hello World!!');
    $this->info('Hello World!!');
    $this->warning('Hey you! Hello World!!');
    $this->success('Oh Yeah!! Hello World!!');
    $this->error('Oh no!! Hello World!!');
  ...

  ```
### 5. Create a new Command:
  ```shell
    docker exec -it app-console php console make:command MyAwesomeCommand
  ```
   ![screenshot 3](./docs/assets/screenshot-3.png)

  Adjust the command name, description, configurations and add the logic command:

  ```php
  <?php

  namespace PhpConsoleBoilerplate\Console\Commands;

  use PhpConsoleBoilerplate\Console\AbstractCommand;
  use Symfony\Component\Console\Input\InputInterface;

  class MyAwesomeCommand extends AbstractCommand
  {
    protected $name = 'myawesomecommand'; // command

    protected $description = 'a new awesome command'; // command description
    
    protected function configure(): void
    {
      // configure your command here ...
    }

    public function handle(InputInterface $input)
    {
      $this->info('Starting Command execution');
      // command logic here ...
    }
  }
  ```
  
### 6. Run Psalm:
  ```shell
    make psalm
  ```
### 7. Run PHP Insights:
  ```shell
    make phpinsights
  ```
  ![screenshot phpinsights](./docs/assets/phpinsights.png)

## Credits
----------

 Thank You(Obrigado) @nunomaduro [Nuno Maduro Github Page](https://github.com/nunomaduro)
