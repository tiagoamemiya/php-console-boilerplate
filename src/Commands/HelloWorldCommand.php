<?php

namespace PhpConsoleBoilerplate\Console\Commands;

use PhpConsoleBoilerplate\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;

class HelloWorldCommand extends AbstractCommand
{
  protected $name = 'hello-world';

  protected $description = 'Say hello to the World';

  public function handle(InputInterface $input)
  {
    $this->ln('Hello World!!');
    $this->info('Hello World!!');
    $this->warning('Hey you! Hello World!!');
    $this->success('Oh Yeah!! Hello World!!');
    $this->error('Oh no!! Hello World!!');
  }
}