<?php

namespace Concurso\RegistroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('email')
            ->add('password','password')
            ->add('telefono')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Concurso\RegistroBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'concurso_registrobundle_usuario';
    }
}
