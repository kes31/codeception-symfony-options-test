<?php


namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Flex\Options;

class TestCommand extends Command
{

    private const OPTION_SOMETHING = 'something';
    private const OPTION_SHORT_SOMETHING = 's';

    protected static $defaultName = 'test:verbose';


    protected function configure(): void
    {
        parent::configure();

        $this->addOption(
            static::OPTION_SOMETHING,
            static::OPTION_SHORT_SOMETHING,
            InputOption::VALUE_NONE,
            'Give some output'
        );
    }


    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($input->getOption(static::OPTION_SOMETHING)) {
            return 0;
        } else {
            return 1;
        }
    }


}