<?php

class ProfileType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('userSkillOffereds', CollectionType::class, [
                'entry_type' => UserSkillOfferedType::class,
                'label' => 'Compétences proposées',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('userSkillWanteds', CollectionType::class, [
                'entry_type' => UserSkillWantedType::class,
                'label' => 'Compétences recherchées',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}