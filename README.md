Victoire CMS Progress Bundle
============

##What is the purpose of this bundle

This bundles gives you access to the *Progress Bar Widget*.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the bundle

Run the following composer command :

    php composer.phar require friendsofvictoire/progress-widget

###Reminder

Do not forget to add the bundle in your AppKernel !

```php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\ProgressBundle\VictoireWidgetProgressBundle(),
            );

            return $bundles;
        }
    }
```
