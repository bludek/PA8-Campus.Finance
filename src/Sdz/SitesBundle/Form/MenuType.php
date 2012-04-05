<?php

namespace Sdz\SitesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('links', 'entity', array(
                'class' => 'SdzSitesBundle:Lien',
            	'expanded' => true,
                'multiple' => true,            	
            ));
        ;
    }

    public function getName()
    {
        return 'menu_type_form';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Sdz\SitesBundle\Entity\Menu',
        );
    }
}
