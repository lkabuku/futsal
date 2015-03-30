<?php
// src/Futsal/TournamentBundle/Admin/TournamentAdmin.php

namespace Futsal\TournamentBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TournamentAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'Name'))
            ->add('labelname', 'text', array('label' => 'Label Name'))
            ->add('description', 'text', array('label' => 'Descritpion'))
            ->add('dateBegin', 'date')
            ->add('dateEnd', 'date')
            ->add('teamsSubscribed', 'entity', array(
                                            'class' => 'Futsal\TournamentBundle\Entity\Team',
                                            'property' => 'id'
                                            )
                )
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('labelname')
            ->add('dateBegin')
            ->add('dateEnd')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('labelname')
            ->add('description')
            ->add('dateBegin')
            ->add('dateEnd')
            ->add('teamsSubscribed', 'entity', array(
                                            'class' => 'Futsal\TournamentBundle\Entity\Team',
                                            'property' => 'id',
                                            'associated_property' => 'labelname'
                                            )
                )
        ;
    }
}
