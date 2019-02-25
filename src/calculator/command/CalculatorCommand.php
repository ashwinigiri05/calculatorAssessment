<?php

namespace ee\calculator\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

class CalculatorCommand extends command
{   
    protected static $defaultName = 'calculator';

    protected function configure()
    {
        $this
        
        ->setDescription('Run Calculator.')
        ->setHelp('Help')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);
    
        
    }
}