<?php
namespace DHBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;

class TodasLasNoticias
{
    private $repository;

    public function __construct(ObjectManager $om) {
        $this->repository = $om->getRepository('DHBundle:Noticias');
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }
}