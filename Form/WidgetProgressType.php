<?php

namespace Victoire\Widget\ProgressBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetProgress form type.
 */
class WidgetProgressType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('labelVisible', CheckboxType::class, [
                'label'    => 'widget.progress.form.label.visible.label',
                'required' => false,
            ])
            ->add('striped', CheckboxType::class, [
                'label'    => 'widget.progress.form.striped.label',
                'required' => false,
            ])
            ->add('animated', CheckboxType::class, [
                'label'    => 'widget.progress.form.animated.label',
                'required' => false,
            ])
            ->add('style', ChoiceType::class, [
                'label'   => 'widget.button.form.label.style',
                'choices' => [
                    'widget.progress.form.choice.style.label.success' => 'success',
                    'widget.progress.form.choice.style.label.info' => 'info',
                    'widget.progress.form.choice.style.label.warning' => 'warning',
                    'widget.progress.form.choice.style.label.danger' => 'danger',
                ],
                'required' => false,
            ])
            ->add('displayedValue', null, [
                'label'    => 'widget_progress.form.displayedValue.label',
                'required' => false,
            ])
            ->add('minimumValue', null, [
                'label' => 'widget_progress.form.minimumValue.label',
            ]);

        $mode = $options['mode'];
        if ($mode === Widget::MODE_STATIC) {
            $builder
                ->add('maximumValue', null, [
                    'label'    => 'widget_progress.form.maximumValue.label',
                    'required' => true,
                ])
                ->add('currentValue', null, [
                    'label'    => 'widget_progress.form.currentValue.label',
                    'required' => true,
                ]);
        }

        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetProgress entity.
     *
     * @param OptionsResolverInterface $resolver
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\ProgressBundle\Entity\WidgetProgress',
            'widget'             => 'Progress',
            'translation_domain' => 'victoire',
        ]);
    }
}
