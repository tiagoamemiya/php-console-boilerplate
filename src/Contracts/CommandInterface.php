<?php

declare(strict_types=1);

namespace PhpConsoleBoilerplate\Console\Contracts;

use Symfony\Component\Console\Input\InputInterface;
interface CommandInterface
{
  public function handle(InputInterface $input): void;
}
