<?php

namespace app\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('HelloWorld command')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Your name'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$name = $input->getArgument('name')) {
            $name = 'World';
        }
        $output->writeln('<info>Hello, ' . $name . '!</info>');
    }
}
