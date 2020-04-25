<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Post;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
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
        $comments = $commentRepository->findLastCommentsGroupedByPost();

        return new JsonResponse($comments);
    }

    /**
     * @Route("/{postId}", name="post_index")
     */
    public function postIndex(int $postId, PostRepository $postRepository, CommentRepository $commentRepository)
    {
        $post = $postRepository->find($postId);
        $comments = $commentRepository->findLastCommentsGroupedByPost($post);

        return new JsonResponse($comments);
    }
}
