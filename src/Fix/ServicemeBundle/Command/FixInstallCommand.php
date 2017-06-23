<?php

namespace Fix\ServicemeBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\ArrayInput;

class FixInstallCommand extends ContainerAwareCommand {

    protected function configure() {
        $this->setName('fix:install')
            ->setDescription('Installation of the application');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        $io = new SymfonyStyle($input, $output);
        $io->title('Installation of Service ME');

        $io->comment('Deleting Database //');
        $this->ejecutarComando($output, 'doctrine:database:drop', array('--if-exists' => true, '--force' => true));

        $io->comment('Import SQL //');
        $this->ejecutarComando($output, 'doctrine:database:import', array('mcr.sql' => true));

        $io->comment('Clearing Cache //');
        $this->ejecutarComando($output, 'cache:clear', array('--no-warmup' => true, '--no-optional-warmers' => true));

    }

    private function ejecutarComando(OutputInterface $output, $comando, $argumentos = array()) {

        $command = $this->getApplication()->find($comando);
        $arguments = array_merge(array('command' => $comando), $argumentos);
        $command->run(new ArrayInput($arguments), $output);

    }

}
