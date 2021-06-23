<?php

namespace PhpConsoleBoilerplate\Console;

use PhpConsoleBoilerplate\Console\Contracts\CommandInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Input\InputInterface;

abstract class AbstractCommand extends Command implements CommandInterface
{
  private $output;

  public function __construct()
  {
    parent::__construct($this->name);

    $this->setDescription($this->description);

    $this->setCode(
      function (InputInterface $input)
      { 
        $this->handle($input);
      }
    );
    $this->output = new ConsoleOutput();
  }

  public function ln($string)
  {
    $this->output->writeln($string);
  }

  public function warning($string)
  {
    $this->output->writeln("<comment>$string</comment>");
  }

  public function info($string)
  {
    $this->output->writeln("<info>$string</info>");
  }

  public function success($string)
  {
    $this->output->writeln("<bg=green>$string</>");
  }

  public function error($string)
  {
    $this->output->writeln("<error>$string</error>");
  }
}