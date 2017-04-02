<?php
namespace Principal\BibliotecaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AutorRepository extends EntityRepository
{
    public function findAprobadosUsuario($user)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT a FROM PrincipalBibliotecaBundle:Autor a
                 WHERE a.Aprobado = true OR a.Usuario_id = :user"
            )
            ->setParameter('user',$user)
            ->getResult();
    }
}
