<?php
/**
 * Created by PhpStorm.
 * User: monark
 * Date: 26/07/2017
 * Time: 14:59
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class SandboxCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('itworks:sandbox')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<error>Nothing to do</error>');
    }
}
