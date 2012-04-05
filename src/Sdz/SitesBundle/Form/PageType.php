<?php

namespace Sdz\SitesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('name', 'text')
            ->add('type', 'choice', array(
            	'choices' => array(
                    'cours' => 'Page de cours',
                    'accueil' => 'Page d\'accueil',
            	),
            ));
        ;
    }

    public function getName()
    {
        return 'page_type_form';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Sdz\SitesBundle\Entity\Page',
        );
    }
}
