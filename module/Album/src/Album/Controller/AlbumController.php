<?php
/**
 * Created by PhpStorm.
 * User: qing.tan
 * Date: 15-5-27
 * Time: 下午3:32
 */

namespace Album\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController{
    public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }
    protected $albumTable;
    public function indexAction()
    {
        return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));
    }

    public function addAction()
    {

    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
} 