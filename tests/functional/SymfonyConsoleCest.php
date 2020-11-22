<?php


namespace test\functional;


use FunctionalTester;
use Symfony\Component\Console\Tester\ApplicationTester;

class SymfonyConsoleCest
{

    /**
     * @param ApplicationTester $I
     * @return void
     */
    public function testCallSymfonyConsoleWithShortOption(FunctionalTester $I): void
    {
        $I->runSymfonyConsoleCommand(
            'test:verbose',
            ['-s' => true],
            [],
            0
        );
    }

    /**
     * @param ApplicationTester $I
     * @return void
     */
    public function testCallSymfonyConsoleWithLongOption(FunctionalTester $I): void
    {
        $I->runSymfonyConsoleCommand(
            'test:verbose',
            ['--something' => false], [], 0
        );
    }

    /**
     * @param ApplicationTester $I
     * @return void
     */
    public function testCallSymfonyConsoleWithoutOption(FunctionalTester $I): void
    {
        $I->runSymfonyConsoleCommand(
            'test:verbose', [], [], 1
        );
    }

}