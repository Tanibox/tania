<?php

namespace AppBundle\Form;

use AppBundle\Data\CategoryMaster;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AreaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array('maxlength' => 50), ))
            ->add('reservoir', EntityType::class, array(
                'class' => 'AppBundle:Reservoir',
                'choice_label' => 'name',
                'required' => false,
            ))
            ->add('growingMethod', ChoiceType::class, array(
                'choices' => array(
                    CategoryMaster::growingMethods()[1] => 1,
                    CategoryMaster::growingMethods()[2] => 2,
                    CategoryMaster::growingMethods()[3] => 3,
                    CategoryMaster::growingMethods()[4] => 4,
                ),
            ))
            ->add('capacity', IntegerType::class)
            ->add('measurementUnit', ChoiceType::class, array(
                'choices' => array(
                    CategoryMaster::areaUnits()[1] => 1,
                    CategoryMaster::areaUnits()[2] => 2,
                ),
            ))
            ->add('imageFile', VichImageType::class, array(
                'required' => false,
                'allow_delete' => true,
                'image_uri' => true,
                'download_uri' => true,
            ))
            ->add('save', SubmitType::class, array('label' => 'Save'));
    }
}
