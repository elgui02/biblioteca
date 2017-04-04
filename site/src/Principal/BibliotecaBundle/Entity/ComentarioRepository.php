<?php
namespace Principal\BibliotecaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ComentarioRepository extends EntityRepository
{
    public function findUltimosComentarios($limit)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT c FROM PrincipalBibliotecaBundle:Comentario c
                 ORDER BY FechaHora DESC LIMIT 5"
            )
            ->setParameter('limit',$limit)
            ->getResult();
    }
}
