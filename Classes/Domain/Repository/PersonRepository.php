<?php

namespace OH\Persons\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;


class PersonRepository extends Repository {

    public function initializeObject() {
        /* @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');

        // don't add the pid constraint
        $querySettings->setRespectStoragePage(false);

        $this->setDefaultQuerySettings($querySettings);
    }

    public function findAll()
    {
        $q = $this->createQuery();

        $constraint = $q->equals('is_employer', false);

        $q->matching($constraint);

        $result = $q->execute();

        return $result->toArray();
    }

    public function getFounder() {
        $q = $this->createQuery();

        $constraint = $q->equals('is_employer', true);

        $q->matching($constraint);

        $result = $q->execute();

        return $result->toArray();
    }

    /**
     * @param $uid
     * @return Person
     */
    public function findByUid($uid)
    {
        $q = $this->createQuery();
        $q->matching($q->equals('uid', $uid));

        $result = $q->execute();

        return $result->toArray();
    }

}