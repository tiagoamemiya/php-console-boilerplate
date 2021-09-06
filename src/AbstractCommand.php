<?php

declare(strict_types=1);

namespace PhpConsoleBoilerplate\Console;

use PhpConsoleBoilerplate\Console\Contracts\CommandInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;

abstract class AbstractCommand extends Command implements CommandInterface
{
  private $output;

  public function __construct()
  {
    parent::__construct($this->name);

    $this->setDescription($this->description);

    $this->setCode(
        function (InputInterface $input): void
        { 
          $this->handle($input);
        }
    );
    $this->output = new ConsoleOutput();
  }

  public function ln(string $string): void
  {
    $this->output->writeln($string);
  }

  public function warning(string $string): void
  {
    $this->output->writeln("<comment>{$string}</comment>");
  }

  public function info(string $string): void
  {
    $this->output->writeln("<info>{$string}</info>");
  }

  public function success(string $string): void
  {
    $this->output->writeln("<bg=green>{$string}</>");
  }

  public function error(string $string): void
  {
    $this->output->writeln("<error>{$string}</error>");
  }
}
