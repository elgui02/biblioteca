<?php
namespace Principal\BibliotecaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CategoriaRepository extends EntityRepository
{
    public function findCategoriaLibros()
    {
        $em = $this->getEntityManager(); // ...or getEntityManager() prior to Symfony 2.1
        $connection = $em->getConnection();
        $statement = $connection->prepare("
            SELECT 
                c.* ,
                COUNT(
        	            (SELECT l.id 
        	            FROM Libro l 
        	            INNER JOIN libro_categorium cl ON l.id = cl.libro_id
        	            WHERE cl.categorium_id = c.id and l.aprobado = true)
                    ) as libros
            FROM Categoria c
            GROUP BY c.id
        ");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function findLibrosCategoria($categoria)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT l FROM PrincipalBibliotecaBundle:libro l
                 INNER JOIN l.categoriaLibros cl
                 WHERE l.Aprobado = true OR cl.id = :categoria"
            )
            ->setParameter('categoria',$categoria);
    }

}
