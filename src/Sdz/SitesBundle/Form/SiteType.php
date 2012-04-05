<?php

namespace Sdz\SitesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('url', 'text')
            ->add('description', 'textarea', array(
                'required' => false,
            ))
            ->add('visibility', 'choice', array(
            	'choices' => array(
            		false => 'Mode développement (personne ne peut voir ce site)',
            		true => 'Mode production (Tout le monde peut consulter ce site)' 
            	),
            	'expanded' => true,
            ));
        ;
    }

    public function getName()
    {
        return 'sdz_sitesbundle_sitetype';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Sdz\SitesBundle\Entity\Site',
        );
    }
}
