<?php

namespace Intranet\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatiereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('description','textarea')
            ->add('filieres', 'entity', array(
                  'class'    => 'IntranetAdminBundle:Filiere',
                  'property' => 'nom',
                  'multiple' => true,
                  'required'    => true,
                'empty_value' => 'Choisissez le niveau(x)',
                'empty_data'  => null
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Intranet\AdminBundle\Entity\Matiere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'intranet_adminbundle_matiere';
    }
}
