<?php

namespace Victoire\Widget\ProgressBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\WidgetBundle\Entity\Widget;


/**
 * WidgetProgress form type
 */
class WidgetProgressType extends WidgetType
{
    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('labelVisible', 'checkbox', array(
                'label' => 'widget.progress.form.label.visible.label',
                'required' => false,
            ))
            ->add('striped', 'checkbox', array(
                'label' => 'widget.progress.form.striped.label',
                'required' => false,
            ))
            ->add('animated', 'checkbox', array(
                'label' => 'widget.progress.form.animated.label',
                'required' => false,
            ))
            ->add('style', 'choice', array(
                'label' => 'widget.button.form.label.style',
                'choices' => array(
                    'success' => 'widget.progress.form.choice.style.label.success',
                    'info' => 'widget.progress.form.choice.style.label.info',
                    'warning' => 'widget.progress.form.choice.style.label.warning',
                    'danger' => 'widget.progress.form.choice.style.label.danger',
                ),
                'required' => false,
            ))
            ->add('displayedValue', null, array(
                'label' => 'widget_progress.form.displayedValue.label',
                'required' => false,
            ))
            ->add('minimumValue', null, array(
                'label' => 'widget_progress.form.minimumValue.label',
            ))
        ;

        $mode = $options['mode'];
        if ($mode === Widget::MODE_STATIC) {
            $builder
                ->add('maximumValue', null, array(
                    'label' => 'widget_progress.form.maximumValue.label',
                ))
                ->add('currentValue', null, array(
                    'label' => 'widget_progress.form.currentValue.label',
                ))
            ;
        }

        parent::buildForm($builder, $options);

    }


    /**
     * bind form to WidgetProgress entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\ProgressBundle\Entity\WidgetProgress',
            'widget'             => 'Progress',
            'translation_domain' => 'victoire'
        ));
    }

    /**
     * get form name
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_progress';
    }
}
