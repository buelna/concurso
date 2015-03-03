<?php

namespace Concurso\RegistroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipoType extends AbstractType
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
            ->add('preparatoria')
            ->add('idUsuario','entity', array(
                     'class' => 'RegistroBundle:Usuario',
                     //'property' => 'id',
                     //'disabled'=> true,
                     //'read_only' => true,
                     'data' => $this->em->getReference("RegistroBundle:Usuario", $this->id)
                ))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Concurso\RegistroBundle\Entity\Equipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'concurso_registrobundle_equipo';
    }
}
