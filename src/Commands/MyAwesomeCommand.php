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