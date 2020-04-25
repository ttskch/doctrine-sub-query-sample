<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(CommentRepository $commentRepository)
    {
        $comments = $commentRepository->findAll();

        return new JsonResponse($comments);
    }
}
