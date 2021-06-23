<?php

namespace PhpConsoleBoilerplate\Console\Contracts;

use Symfony\Component\Console\Input\InputInterface;

interface CommandInterface
{
  public function handle(InputInterface $input);
}