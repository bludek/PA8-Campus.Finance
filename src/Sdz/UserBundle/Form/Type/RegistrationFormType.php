<?php

namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->add('first_name', 'text', array('label' => 'Prénom'))
                ->add('last_name' , 'text', array('label' => 'Nom'))
                ->add('locality'  , 'text')
                ->add('birthday', 'genemu_jquerydate', array(
                        'widget' => 'single_text',
                        'label'  => 'Date de naissance'
                    ))
                ;
    }

    public function getName()
    {
        return 'cp_user_registration';
    }
}
