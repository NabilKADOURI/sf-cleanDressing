<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\CivilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:create-admin',
    description: 'Create an admin user in the database',
)]
class CreateAdminCommand extends Command
{
    public function __construct(private EntityManagerInterface $em)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('Email', InputArgument::REQUIRED, 'Admin Email')
            ->addArgument('Password', InputArgument::REQUIRED, 'Admin password')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $adminUser = new User();

        $adminUser->setName('Roger')
        ->setFirstName('Pierre')
        ->setPhone('0722232425')
        ->setEmail($input->getArgument('Email'))
        ->setRoles(['ROLE_ADMIN'])
        ->setPassword($input->getArgument('Password'))
        ->setAdress('89 Rue du Puits Vieux');

        $this->em->persist($adminUser);
        $this->em->flush();

        $io->success('Admin user successfully created');

        return Command::SUCCESS;
    }
}