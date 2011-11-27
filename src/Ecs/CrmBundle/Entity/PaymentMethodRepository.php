<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PaymentMethodRepository extends EntityRepository
{
     public function getForClient($id)
     {
          $query = $this->getEntityManager()->createQueryBuilder('pm')
                  ->select('pm.id, pm.cardtype')
                  ->where('pm.customer = :id')
                  ->setParameter('id', $id)
                  ->from('EcsCrmBundle:PaymentMethod', 'pm')
                  ->getQuery();
          return $query->getResult();    
     }
}