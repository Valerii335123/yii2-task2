<?php

namespace app\models\service;

use app\controllers\SiteController;
use app\models\Comment;
use app\models\repository\CommentRepository;

class CommentService
{
    private $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function create($text, $id)
    {
        $comment = new Comment();
        $comment->create($text, $id);
        $this->commentRepository->save($comment);
    }

}
