<?php

namespace Intranet\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClasseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom' , 'text')
            ->add('description', 'textarea')
            ->add('niveau', 'entity', array(
                  'class'    => 'IntranetAdminBundle:Niveauinscription',
                  'property' => 'nom',
                  'multiple' => false,
                  'required'    => true,
                'empty_value' => 'Choisissez le niveau',
                'empty_data'  => null
                ))
            ->add('filiere', 'entity', array(
                  'class'    => 'IntranetAdminBundle:Filiere',
                  'property' => 'nom',
                  'multiple' => false,
                  'required'    => true,
                'empty_value' => 'Choisissez la filière',
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
            'data_class' => 'Intranet\AdminBundle\Entity\Classe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'intranet_adminbundle_classe';
    }
}
