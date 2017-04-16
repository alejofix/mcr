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
                ->setDescription('Instalacion de la aplicacion');
        }

        protected function execute(InputInterface $input, OutputInterface $output) {

            $io = new SymfonyStyle($input, $output);
            $io->title('Instalacion de Service ME');
            
            $io->comment('Borrando Base de datos');
            $this->ejecutarComando($output, 'doctrine:database:drop', array('--if-exists' => true, '--force' => true));
			            
            $io->comment('Generando creacion de la base de datos');
            $this->ejecutarComando($output, 'doctrine:database:create', array('--if-not-exists' => true));
            
            $io->comment('Generando actualizacion de Esquema');
            $this->ejecutarComando($output, 'doctrine:schema:update', array('--force' => true));
            
            $io->comment('Generando fixtures de datos');
            $this->ejecutarComando($output, 'doctrine:fixtures:load', array('--append' => true));
            
            $io->comment('Limpiando Cache');
            $this->ejecutarComando($output, 'cache:clear', array('--no-warmup' => true, '--no-optional-warmers' => true));

        }

        private function ejecutarComando(OutputInterface $output, $comando, $argumentos = array()) {
            
            $command = $this->getApplication()->find($comando);
			$arguments = array_merge(array('command' => $comando), $argumentos);
			$command->run(new ArrayInput($arguments), $output);

        }

    }
