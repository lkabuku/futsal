<?php
// src/Futsal/TournamentBundle/Admin/TeamAdmin.php

namespace Futsal\TournamentBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TeamAdmin extends Admin
{
    
    /**
     * Configures fields to be shown on create/edit forms
     * 
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'Name'))
            ->add('labelname', 'text', array('label' => 'Label name'))
            ->add('logo', 'text', array('label' => 'Logo'))
            ->add('dateCreation', null, array(
                                            'label' => 'Fondation date',
                                            'attr' => array('data-sonata-select2' => false)
                                            )
                )
        ;
    }

    /**
     * Configures fields to be shown on filter forms
     * 
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('labelname')
            ->add('dateCreation')
        ;
    }

    /**
     * Configures fields to be shown on lists
     * 
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier("id")
            ->add('name')
            ->add('labelname')
            ->add('logo')
            ->add('dateCreation')
        ;
    }
}
