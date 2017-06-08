<?php

    namespace Fix\ServicemeBundle\Command;

    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Symfony\Component\Console\Style\SymfonyStyle;
    use Symfony\Component\Console\Input\ArrayInput;

    class ZyosInstallCommand extends ContainerAwareCommand {

        protected function configure() {
            $this->setName('zyos:install')
                ->setDescription('Installation of the application');
        }

        protected function execute(InputInterface $input, OutputInterface $output) {

            $io = new SymfonyStyle($input, $output);
            $io->title('Installation of Service ME');
            
            $io->comment('Deleting Database //');
            $this->ejecutarComando($output, 'doctrine:database:drop', array('--if-exists' => true, '--force' => true));
			            
            $io->comment('Generating the creation of the database //');
            $this->ejecutarComando($output, 'doctrine:database:create', array('--if-not-exists' => true));
            
            $io->comment('Creating schema update //');
            $this->ejecutarComando($output, 'doctrine:schema:update', array('--force' => true));
            
            $io->comment('Creating DataFixtures //');

            $this->ejecutarComando($output, 'doctrine:fixtures:load', array('--append' => true));
            //$this->ejecutarComando($output, 'doctrine:fixtures:load', array('--fixtures=src/Fix/ServicemeBundle/DataFixtures/ORM/' => true, '--append' => true));

            // ok consola
            // D:\xampp\htdocs\_fix\mcr\src
            //$ php.exe bin/console doctrine:fixtures:load --fixtures=src/Fix/ServicemeBundle/DataFixtures/ORM/ --append;


            $io->comment('Clearing Cache //');
            $this->ejecutarComando($output, 'cache:clear', array('--no-warmup' => true, '--no-optional-warmers' => true));

        }

        private function ejecutarComando(OutputInterface $output, $comando, $argumentos = array()) {
            
            $command = $this->getApplication()->find($comando);
			$arguments = array_merge(array('command' => $comando), $argumentos);
			$command->run(new ArrayInput($arguments), $output);

        }

    }
