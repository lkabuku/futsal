<?php
// src/Futsal/TournamentBundle/Admin/GameTeamAdmin.php

namespace Futsal\TournamentBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class GameTeamAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('game', 'entity', array(
                                            'class' => 'Futsal\TournamentBundle\Entity\Game',
                                            'property' => 'id'
                                            )
                )
            ->add('team', 'entity', array(
                                            'class' => 'Futsal\TournamentBundle\Entity\Team',
                                            'property' => 'labelname',
                                            )
                )
            ->add('goals', 'integer', array('label' => 'Goals'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('goals')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('game', 'entity', array(
                                            'class' => 'Futsal\TournamentBundle\Entity\Game',
                                            'property' => 'id',
                                            'associated_property' => 'id'
                                            )
                )
            ->add('team', 'entity', array(
                                            'class' => 'Futsal\TournamentBundle\Entity\Team',
                                            'property' => 'id',
                                            'associated_property' => 'labelname'
                                            )
                )
            ->add('goals')
        ;
    }
}

