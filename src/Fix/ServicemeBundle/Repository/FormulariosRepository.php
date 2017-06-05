<?php

    namespace Fix\ServicemeBundle\Repository;
    use Doctrine\ORM\EntityRepository;
    use Doctrine\ORM\Query\Expr;

    /**
     * FormulariosRepository
     *
     * This class was generated by the Doctrine ORM. Add your own custom
     * repository methods below.
     */
    class FormulariosRepository extends EntityRepository {

        public function findByMotivoGroup() {
            $qb = $this->getEntityManager()->createQueryBuilder();

            return  $qb->select(array(sprintf('%s AS cantidad', $qb->expr()->count('f.tipo')), 't.nombre' ))
                ->from('FixServicemeBundle:Formularios', 'f')
                ->innerJoin('FixServicemeBundle:Formulariostipo', 't', Expr\Join::WITH, $qb->expr()->eq('f.tipo', 't.id'))
                ->where($qb->expr()->between('f.fecha', ':inicio', ':final'))
                ->groupBy('f.tipo')
                ->setParameter('inicio', '2017-06-00 00:00:00')
                ->setParameter('final', '2017-06-30 23:59:59')
                ->getQuery()
                ->getResult()
            ;
        }
    }
