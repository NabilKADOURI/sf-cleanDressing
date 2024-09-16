<?php
namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{

    public function __construct(private EntityManagerInterface $em){}
    #[Route('/api/users/{id}/upload-picture', name: 'upload_profile_picture', methods: ['POST'])]
    public function uploadPicture(Request $request, UserRepository $userRepository, $id): JsonResponse
    {
        $user = $userRepository->find($id);
        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non trouvé'], Response::HTTP_NOT_FOUND);
        }

        $file = $request->files->get('file');
        if ($file) {
            $filename = uniqid() . '.' . $file->guessExtension();
            try {
                $file->move($this->getParameter('upload_directory'), $filename);
                $user->setPicture($filename);
                $this->em->persist($user);

                $this->em->flush();



                return new JsonResponse(['success' => 'Image mise à jour'], Response::HTTP_OK);
            } catch (FileException $e) {
                return new JsonResponse(['error' => 'Erreur lors de l\'upload'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return new JsonResponse(['error' => 'Aucun fichier envoyé'], Response::HTTP_BAD_REQUEST);
    }
}
