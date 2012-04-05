<?php

namespace Sdz\SitesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SectionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('contenu', 'textarea');
        ;
    }

    public function getName()
    {
        return 'section_type_form';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Sdz\SitesBundle\Entity\Section',
        );
    }
}
