<?php

namespace Concurso\RegistroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AlumnoType extends AbstractType
{
    public function __construct($em,$i) {
        $this->em = $em;
        $this->id= $i;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidoPaterno')
            ->add('apellidoMaterno')
            ->add('email')
            ->add('semestre', 'choice', array(
                'choices' => array(
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                    6 => '6',
                    7 => '7',
                ),
                'required'    => false,
                'placeholder' => 'Elige el semestre',
                'empty_data'  => null
            ))
            ->add('curp')
            ->add('idEquipo','entity', array(
                     'class' => 'RegistroBundle:Equipo',
                     'data' => $this->em->getReference("RegistroBundle:Equipo", $this->id)
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Concurso\RegistroBundle\Entity\Alumno'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'concurso_registrobundle_alumno';
    }
}
