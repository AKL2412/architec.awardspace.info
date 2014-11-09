<?php

namespace Intranet\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
    //         ->add('sexe','collection', array(
    //         'type'   => 'choice',
    //         'options'  => array(
    //             'choices'  => array(
    //                 'homme' => 'Homme',
    //                 'femme' => 'Femme',
    //             )
    // )))
            ->add('prenom','text')
            ->add('datenaissance')
            ->add('matricule','text')
            ->add('email','email')
            ->add('telephone','text')
            ->add('sexe', 'choice', array(
                'choices' => array(
                    'Homme' => 'Masculin',
                    'Femme' => 'Féminin'
                ),                                                                                
                'required'    => true,
                'empty_value' => 'Choisissez le sexe',
                'empty_data'  => null
            ));



        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Intranet\AdminBundle\Entity\Etudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'intranet_adminbundle_etudiant';
    }
}
