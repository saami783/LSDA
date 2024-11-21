<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\InfoUserFormType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user')]
final class UserController extends AbstractController
{

    #[Route('/profil', name: 'app_user_profil', methods: ['GET'])]
    public function show(): Response
    {
        $passwordForm = $this->createForm(ChangePasswordFormType::class, $this->getUser());
        $infoForm = $this->createForm(InfoUserFormType::class, $this->getUser());

        return $this->render('user/index.html.twig', [
            'user' => $this->getUser(),
            'passwordForm' => $passwordForm->createView(),
            'infoForm' => $infoForm->createView(),
        ]);
    }

//    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
//    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
//    {
//        $form = $this->createForm(UserType::class, $user);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $entityManager->flush();
//
//            return $this->redirectToRoute('app_user_show', [], Response::HTTP_SEE_OTHER);
//        }
//
//        return $this->render('user/edit.html.twig', [
//            'user' => $user,
//            'form' => $form,
//        ]);
//    }
//
//    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
//    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
//    {
//        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
//            $entityManager->remove($user);
//            $entityManager->flush();
//        }
//
//        return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
//    }
}
