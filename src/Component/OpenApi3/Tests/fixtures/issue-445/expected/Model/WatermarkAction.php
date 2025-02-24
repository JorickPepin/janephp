<?php

namespace PicturePark\API\Model;

class WatermarkAction extends ImageActionBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Identifies the image to be used as watermark
     *
     * @var string|null
     */
    protected $watermarkFilePath;
    /**
     * Margin to the left border of the image, in pixels
     *
     * @var int|null
     */
    protected $marginLeft;
    /**
     * Margin to the top of the image, in pixels
     *
     * @var int|null
     */
    protected $marginTop;
    /**
     * Margin to the right border of the image, in pixels
     *
     * @var int|null
     */
    protected $marginRight;
    /**
     * Margin to the bottom of the image, in pixels
     *
     * @var int|null
     */
    protected $marginBottom;
    /**
     * Scales the opacity of the watermark
     *
     * @var float
     */
    protected $opacity;
    /**
     * Scales the watermark width according to the size of the final image.
     *
     * @var float
     */
    protected $widthRatio;
    /**
     * Scales the watermark height according to the size of the final image.
     *
     * @var float
     */
    protected $heightRatio;
    /**
     * Identifies the image to be used as watermark
     *
     * @return string|null
     */
    public function getWatermarkFilePath(): ?string
    {
        return $this->watermarkFilePath;
    }
    /**
     * Identifies the image to be used as watermark
     *
     * @param string|null $watermarkFilePath
     *
     * @return self
     */
    public function setWatermarkFilePath(?string $watermarkFilePath): self
    {
        $this->initialized['watermarkFilePath'] = true;
        $this->watermarkFilePath = $watermarkFilePath;
        return $this;
    }
    /**
     * Margin to the left border of the image, in pixels
     *
     * @return int|null
     */
    public function getMarginLeft(): ?int
    {
        return $this->marginLeft;
    }
    /**
     * Margin to the left border of the image, in pixels
     *
     * @param int|null $marginLeft
     *
     * @return self
     */
    public function setMarginLeft(?int $marginLeft): self
    {
        $this->initialized['marginLeft'] = true;
        $this->marginLeft = $marginLeft;
        return $this;
    }
    /**
     * Margin to the top of the image, in pixels
     *
     * @return int|null
     */
    public function getMarginTop(): ?int
    {
        return $this->marginTop;
    }
    /**
     * Margin to the top of the image, in pixels
     *
     * @param int|null $marginTop
     *
     * @return self
     */
    public function setMarginTop(?int $marginTop): self
    {
        $this->initialized['marginTop'] = true;
        $this->marginTop = $marginTop;
        return $this;
    }
    /**
     * Margin to the right border of the image, in pixels
     *
     * @return int|null
     */
    public function getMarginRight(): ?int
    {
        return $this->marginRight;
    }
    /**
     * Margin to the right border of the image, in pixels
     *
     * @param int|null $marginRight
     *
     * @return self
     */
    public function setMarginRight(?int $marginRight): self
    {
        $this->initialized['marginRight'] = true;
        $this->marginRight = $marginRight;
        return $this;
    }
    /**
     * Margin to the bottom of the image, in pixels
     *
     * @return int|null
     */
    public function getMarginBottom(): ?int
    {
        return $this->marginBottom;
    }
    /**
     * Margin to the bottom of the image, in pixels
     *
     * @param int|null $marginBottom
     *
     * @return self
     */
    public function setMarginBottom(?int $marginBottom): self
    {
        $this->initialized['marginBottom'] = true;
        $this->marginBottom = $marginBottom;
        return $this;
    }
    /**
     * Scales the opacity of the watermark
     *
     * @return float
     */
    public function getOpacity(): float
    {
        return $this->opacity;
    }
    /**
     * Scales the opacity of the watermark
     *
     * @param float $opacity
     *
     * @return self
     */
    public function setOpacity(float $opacity): self
    {
        $this->initialized['opacity'] = true;
        $this->opacity = $opacity;
        return $this;
    }
    /**
     * Scales the watermark width according to the size of the final image.
     *
     * @return float
     */
    public function getWidthRatio(): float
    {
        return $this->widthRatio;
    }
    /**
     * Scales the watermark width according to the size of the final image.
     *
     * @param float $widthRatio
     *
     * @return self
     */
    public function setWidthRatio(float $widthRatio): self
    {
        $this->initialized['widthRatio'] = true;
        $this->widthRatio = $widthRatio;
        return $this;
    }
    /**
     * Scales the watermark height according to the size of the final image.
     *
     * @return float
     */
    public function getHeightRatio(): float
    {
        return $this->heightRatio;
    }
    /**
     * Scales the watermark height according to the size of the final image.
     *
     * @param float $heightRatio
     *
     * @return self
     */
    public function setHeightRatio(float $heightRatio): self
    {
        $this->initialized['heightRatio'] = true;
        $this->heightRatio = $heightRatio;
        return $this;
    }
}