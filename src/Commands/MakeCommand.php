<?php

declare(strict_types=1);

namespace PhpConsoleBoilerplate\Console\Commands;

use Exception;
use PhpConsoleBoilerplate\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;

class MakeCommand extends AbstractCommand
{
  public const ARG_CLASS_NAME = 'class_name';
  public const CLASS_TEMPLATE_FILE_PATH = __DIR__.'/../stubs/Command.stub';
  protected $name = 'make:command';

  protected $description = 'Create a awesome new Command Class';

  public function handle(InputInterface $input): void
  {
    try {
      $className = $input->getArgument(self::ARG_CLASS_NAME);
      $template = file_get_contents(self::CLASS_TEMPLATE_FILE_PATH);  
      $content = str_replace('{{ $className }}', $className, $template);
      $content = str_replace(
          '{{ $command }}',
          strtolower($className),
          $content
      );
      file_put_contents(__DIR__."/{$className}.php", $content);
      $this->success("New Command Class '{$className}' created with success!");
    } catch(Exception $e) {
      $this->error("Error creating Command Class: {$e->getMessage()}");
    }
  }

  protected function configure(): void
  {
    $this->addArgument(
        self::ARG_CLASS_NAME,
        InputArgument::REQUIRED,
        'Class name, E.g.: MyAwesomeCommand'
    );
  }
}
