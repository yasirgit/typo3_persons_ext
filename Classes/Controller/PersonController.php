<?php

namespace OH\Persons\Controller;

use OH\Persons\Domain\Model\Person;
use OH\Persons\Domain\Repository\PersonRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class PersonController extends ActionController
{

    /**
     * @var \OH\Persons\Domain\Repository\PersonRepository
     * @inject
     */
    protected $personRepository;

    /**
     * @plugin Persons
     * @noCache
     * @return string
     */
    public function indexAction()
    {
        /** @var Project[] $persons */
        $persons = $this->personRepository->findAll();

        return $this->view->render();
    }

    /**
     * @plugin Persons
     * @noCache
     * @return string
     */
    public function overviewAction()
    {
        $flexSettings = array('type' => $this->settings['type'], 'article_class' => $this->settings['article']);

        $person = $this->personRepository->findByUid($this->settings['person']);

        $this->view->assignMultiple(array(
            'person' => $person,
            'flexSettings' => $flexSettings
        ));


        return $this->view->render();
    }

    /**
     * @plugin Persons
     * @noCache
     * @return string
     */
    public function founderAction()
    {
        $persons = $this->personRepository->getFounder();

        $this->view->assignMultiple(array(
            'persons' => $persons
        ));


        return $this->view->render();
    }

    /**
     * @plugin Persons
     * @noCache
     * @return string
     */
    public function founderDeAction()
    {
        $flexSettings = array('type' => $this->settings['type'], 'article_class' => $this->settings['article']);

        $person = $this->personRepository->findByUid($this->settings['person']);

        $this->view->assignMultiple(array(
            'person' => $person,
            'flexSettings' => $flexSettings
        ));


        return $this->view->render();
    }

    /**
     * @plugin Persons
     * @noCache
     * @return string
     */
    public function findOutMoreAction()
    {
        $persons = $this->personRepository->getFounder();

        //DebuggerUtility::var_dump($persons); die();

        $this->view->assignMultiple(array(
            'persons' => $persons
        ));


        return $this->view->render();
    }

    /**
     * @plugin Persons
     * @noCache
     * @return string
     */
    public function contactAction()
    {
        $persons = $this->personRepository->getFounder();

        //DebuggerUtility::var_dump($persons); die();

        $this->view->assignMultiple(array(
            'persons' => $persons
        ));


        return $this->view->render();
    }


    /**
     * @plugin Persons
     * @noCache
     * @return string
     */
    public function founderDetailAction()
    {
        $persons = $this->personRepository->getFounder();

        //DebuggerUtility::var_dump($persons); die();

        $this->view->assignMultiple(array(
            'persons' => $persons
        ));


        return $this->view->render();
    }

}