<?php

namespace Victoire\Widget\ProgressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetProgress.
 *
 * @ORM\Table("vic_widget_progress")
 * @ORM\Entity
 */
class WidgetProgress extends Widget
{
    /**
     * @var int
     *
     * @ORM\Column(name="minimumValue", type="integer")
     */
    protected $minimumValue;

    /**
     * @var int
     *
     * @VIC\ReceiverProperty("numberable")
     * @ORM\Column(name="maximumValue", type="integer", nullable=true)
     */
    protected $maximumValue;

    /**
     * @var int
     *
     * @VIC\ReceiverProperty("numberable")
     * @ORM\Column(name="currentValue", type="integer", nullable=true)
     */
    protected $currentValue;

    /**
     * @var string
     *
     * @ORM\Column(name="displayedValue", type="string", length=255, nullable=true)
     */
    protected $displayedValue;

    /**
     * @var bool
     *
     * @ORM\Column(name="labelVisible", type="boolean", nullable=true)
     */
    protected $labelVisible;

    /**
     * @var string default|warning|info|success|primary|danger
     *
     * @ORM\Column(name="style", type="string", length=10, nullable=true)
     */
    protected $style;

    /**
     * @var bool
     *
     * @ORM\Column(name="stripped", type="boolean", nullable=true)
     */
    protected $striped;

    /**
     * @var bool
     *
     * @ORM\Column(name="animated", type="boolean", nullable=true)
     */
    protected $animated;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Progress #'.$this->id;
    }

    /**
     * Set minimumValue.
     *
     * @param string $minimumValue
     */
    public function setMinimumvalue($minimumValue)
    {
        $this->minimumValue = $minimumValue;

        return $this;
    }

    /**
     * Get minimumValue.
     *
     * @return string
     */
    public function getMinimumvalue()
    {
        return $this->minimumValue;
    }

    /**
     * Set maximumValue.
     *
     * @param string $maximumValue
     */
    public function setMaximumvalue($maximumValue)
    {
        $this->maximumValue = $maximumValue;

        return $this;
    }

    /**
     * Get maximumValue.
     *
     * @return string
     */
    public function getMaximumvalue()
    {
        return $this->maximumValue;
    }

    /**
     * Set currentValue.
     *
     * @param string $currentValue
     */
    public function setCurrentvalue($currentValue)
    {
        $this->currentValue = $currentValue;

        return $this;
    }

    /**
     * Get currentValue.
     *
     * @return string
     */
    public function getCurrentvalue()
    {
        return $this->currentValue;
    }

    /**
     * Set displayedValue.
     *
     * @param string $displayedValue
     */
    public function setDisplayedvalue($displayedValue)
    {
        $this->displayedValue = $displayedValue;

        return $this;
    }

    /**
     * Get displayedValue.
     *
     * @return string
     */
    public function getDisplayedvalue()
    {
        return $this->displayedValue;
    }

    /**
     * Set labelVisible.
     *
     * @param bool $labelVisible
     *
     * @return WidgetProgress
     */
    public function setLabelVisible($labelVisible)
    {
        $this->labelVisible = $labelVisible;

        return $this;
    }

    /**
     * Get striped.
     *
     * @return bool
     */
    public function getLabelVisible()
    {
        return $this->labelVisible;
    }

    /**
     * Set style.
     *
     * @param string $style
     *
     * @return WidgetProgress
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style.
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set stripped.
     *
     * @param bool $striped
     *
     * @return WidgetProgress
     */
    public function setStriped($striped)
    {
        $this->striped = $striped;

        return $this;
    }

    /**
     * Get striped.
     *
     * @return bool
     */
    public function getStriped()
    {
        return $this->striped;
    }

    /**
     * Set animated.
     *
     * @param bool $animated
     *
     * @return WidgetProgress
     */
    public function setAnimated($animated)
    {
        $this->animated = $animated;

        return $this;
    }

    /**
     * Get striped.
     *
     * @return bool
     */
    public function getAnimated()
    {
        return $this->animated;
    }
}
