<?php
namespace DHBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;

class LaNoticia
{
    private $repository;

    public function __construct(ObjectManager $om) {
        $this->repository = $om->getRepository('DHBundle:Noticias');
    }

    public function findNew($id)
    {
        return $this->repository->find($id);
    }
}