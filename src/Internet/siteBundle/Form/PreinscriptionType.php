<?php

namespace Internet\siteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreinscriptionType extends AbstractType
{
    private $url; 

    public function __construct($url)
  {
    $this->url    = $url;
  }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom' ,'text')
            ->add('prenom' ,'text')
            ->add('email' , 'email')
            ->add('ville', 'text')
            ->add('telephone' ,'text',array('required' => false))
            ->add('mobile' ,'text')
            ->add('adresse' ,'text')
            ->add('motivation','textarea')
            ->add('niveauinscription', 'entity', array(
                  'class'    => 'IntranetAdminBundle:Niveauinscription',
                  'property' => 'nom',
                  'multiple' => false
                ))
            ->add('niveauscolaire', 'entity', array(
                  'class'    => 'IntranetAdminBundle:Niveauscolaire',
                  'property' => 'nom',
                  'multiple' => false
                ))
            ->add('filiere', 'entity', array(
                  'class'    => 'IntranetAdminBundle:Filiere',
                  'property' => 'nom',
                  'multiple' => false
                ))

              ->setAction($this->url)
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Internet\siteBundle\Entity\Preinscription'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'internet_sitebundle_preinscription';
    }
}
