<?php

namespace Principal\BibliotecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LibroType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nombre',null,array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('Pagina',null,array(
                'label' => 'Número de páginas',
                'attr' => array('class' => 'form-control')
            ))
            ->add('Annio',null,array(
                'label' => 'Año de publicación',
                'attr' => array('class' => 'form-control')
            ))
            ->add('licencium',null,array(
                'label' => 'Licencia',
                'attr' => array('class' => 'form-control')
            ))
            ->add('Sinopsis',null,array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('File', VichFileType::class, [
                'label' => 'Documento del libro',
                'required' => false,
                'allow_delete' => true, // not mandatory, default is true
                'download_link' => true, // not mandatory, default is true
                'attr' => array('class' => 'form-control')
            ])
            ->add('Foto', VichFileType::class, [
                'label' => 'Foto del libro',
                'required' => false,
                'allow_delete' => true, // not mandatory, default is true
                'download_link' => true, // not mandatory, default is true
                'attr' => array('class' => 'form-control')
            ])
            ->add('categoriaLibros',null,array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('autor',null,array(
                'attr' => array('class' => 'hidden'),
                'label' => false,
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Principal\BibliotecaBundle\Entity\Libro'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'principal_bibliotecabundle_libro';
    }


}
