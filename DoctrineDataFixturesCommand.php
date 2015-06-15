<?php

class DoctrineDataFixturesCommand extends \Symfony\Component\Console\Command\Command
{
    protected function configure()
    {
        $this
            ->setName('fixtures:load')
            ->setDescription('Load data fixtures to your database.')
            ->addOption('fixtures', null, \Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL | \Symfony\Component\Console\Input\InputOption::VALUE_IS_ARRAY, 'The directory to load data fixtures from.')
            ->addOption('append', null, \Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Append the data fixtures instead of deleting all data from the database first.')
            ->addOption('em', null, \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'The entity manager to use for this command.')
            ->addOption('purge-with-truncate', null, \Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Purge data by using a database-level TRUNCATE statement')
            ->setHelp(<<<EOT
The <info>doctrine:fixtures:load</info> command loads data fixtures from your bundles:
  <info>./app/console doctrine:fixtures:load</info>
You can also optionally specify the path to fixtures with the <info>--fixtures</info> option:
  <info>./app/console doctrine:fixtures:load --fixtures=/path/to/fixtures1 --fixtures=/path/to/fixtures2</info>
If you want to append the fixtures instead of flushing the database first you can use the <info>--append</info> option:
  <info>./app/console doctrine:fixtures:load --append</info>
By default Doctrine Data Fixtures uses DELETE statements to drop the existing rows from
the database. If you want to use a TRUNCATE statement instead you can use the <info>--purge-with-truncate</info> flag:
  <info>./app/console doctrine:fixtures:load --purge-with-truncate</info>
EOT
            );
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        /** @var $doctrine \Doctrine\Common\Persistence\ManagerRegistry */
//        $doctrine = $this->getContainer()->get('doctrine');
//        $em = $doctrine->getManager($input->getOption('em'));

        $em = require "bootstrap.php";


        if ($input->isInteractive() && !$input->getOption('append')) {
            $dialog = $this->getHelperSet()->get('dialog');
            if (!$dialog->askConfirmation($output, '<question>Careful, database will be purged. Do you want to continue Y/N ?</question>', false)) {
                return;
            }
        }
        $dirOrFile = $input->getOption('fixtures');
        if ($dirOrFile) {
            $paths = is_array($dirOrFile) ? $dirOrFile : array($dirOrFile);
        } else {
            throw new \InvalidArgumentException('precise fixtures path with option  --fixtures=/path/to/fixtures1 --fixtures=/path/to/fixtures2  @todo : passed to require option');
        }

        $loader = new \Doctrine\Common\DataFixtures\Loader();
        foreach ($paths as $path) {
            if (is_dir($path)) {
                $loader->loadFromDirectory($path);
            }
        }
        $fixtures = $loader->getFixtures();
        if (!$fixtures) {
            throw new InvalidArgumentException(
                sprintf('Could not find any fixtures to load in: %s', "\n\n- ".implode("\n- ", $paths))
            );
        }
        $purger = new \Doctrine\Common\DataFixtures\Purger\ORMPurger($em);
        $purger->setPurgeMode($input->getOption('purge-with-truncate') ? \Doctrine\Common\DataFixtures\Purger\ORMPurger::PURGE_MODE_TRUNCATE : \Doctrine\Common\DataFixtures\Purger\ORMPurger::PURGE_MODE_DELETE);
        $executor = new \Doctrine\Common\DataFixtures\Executor\ORMExecutor($em, $purger);
        $executor->setLogger(function($message) use ($output) {
            $output->writeln(sprintf('  <comment>></comment> <info>%s</info>', $message));
        });
        $executor->execute($fixtures, $input->getOption('append'));
    }
}