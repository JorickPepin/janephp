<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\JsonSchema\Model;

class JsonSchema
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $dollarSchema;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var mixed
     */
    protected $default;
    /**
     * @var float
     */
    protected $multipleOf;
    /**
     * @var float
     */
    protected $maximum;
    /**
     * @var bool
     */
    protected $exclusiveMaximum;
    /**
     * @var float
     */
    protected $minimum;
    /**
     * @var bool
     */
    protected $exclusiveMinimum;
    /**
     * @var int
     */
    protected $maxLength;
    /**
     * @var int
     */
    protected $minLength;
    /**
     * @var string
     */
    protected $pattern;
    /**
     * @var bool|JsonSchema
     */
    protected $additionalItems;
    /**
     * @var JsonSchema|JsonSchema[]
     */
    protected $items;
    /**
     * @var int
     */
    protected $maxItems;
    /**
     * @var int
     */
    protected $minItems;
    /**
     * @var bool
     */
    protected $uniqueItems;
    /**
     * @var int
     */
    protected $maxProperties;
    /**
     * @var int
     */
    protected $minProperties;
    /**
     * @var string[]
     */
    protected $required;
    /**
     * @var bool|JsonSchema
     */
    protected $additionalProperties;
    /**
     * @var JsonSchema[]
     */
    protected $definitions;
    /**
     * @var JsonSchema[]
     */
    protected $properties;
    /**
     * @var JsonSchema[]
     */
    protected $patternProperties;
    /**
     * @var JsonSchema[]|string[][]
     */
    protected $dependencies;
    /**
     * @var mixed[]
     */
    protected $enum;
    /**
     * @var mixed|mixed[]
     */
    protected $type;
    /**
     * @var string
     */
    protected $format;
    /**
     * @var JsonSchema[]
     */
    protected $allOf;
    /**
     * @var JsonSchema[]
     */
    protected $anyOf;
    /**
     * @var JsonSchema[]
     */
    protected $oneOf;
    /**
     * @var JsonSchema
     */
    protected $not;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDollarSchema(): ?string
    {
        return $this->dollarSchema;
    }

    /**
     * @param string $dollarSchema
     *
     * @return self
     */
    public function setDollarSchema(?string $dollarSchema): self
    {
        $this->dollarSchema = $dollarSchema;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default): self
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return float
     */
    public function getMultipleOf(): ?float
    {
        return $this->multipleOf;
    }

    /**
     * @param float $multipleOf
     *
     * @return self
     */
    public function setMultipleOf(?float $multipleOf): self
    {
        $this->multipleOf = $multipleOf;

        return $this;
    }

    /**
     * @return float
     */
    public function getMaximum(): ?float
    {
        return $this->maximum;
    }

    /**
     * @param float $maximum
     *
     * @return self
     */
    public function setMaximum(?float $maximum): self
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExclusiveMaximum(): ?bool
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @param bool $exclusiveMaximum
     *
     * @return self
     */
    public function setExclusiveMaximum(?bool $exclusiveMaximum): self
    {
        $this->exclusiveMaximum = $exclusiveMaximum;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinimum(): ?float
    {
        return $this->minimum;
    }

    /**
     * @param float $minimum
     *
     * @return self
     */
    public function setMinimum(?float $minimum): self
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExclusiveMinimum(): ?bool
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @param bool $exclusiveMinimum
     *
     * @return self
     */
    public function setExclusiveMinimum(?bool $exclusiveMinimum): self
    {
        $this->exclusiveMinimum = $exclusiveMinimum;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength(?int $maxLength): self
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @param int $minLength
     *
     * @return self
     */
    public function setMinLength(?int $minLength): self
    {
        $this->minLength = $minLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * @return bool|JsonSchema
     */
    public function getAdditionalItems()
    {
        return $this->additionalItems;
    }

    /**
     * @param bool|JsonSchema $additionalItems
     *
     * @return self
     */
    public function setAdditionalItems($additionalItems): self
    {
        $this->additionalItems = $additionalItems;

        return $this;
    }

    /**
     * @return JsonSchema|JsonSchema[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param JsonSchema|JsonSchema[] $items
     *
     * @return self
     */
    public function setItems($items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxItems(): ?int
    {
        return $this->maxItems;
    }

    /**
     * @param int $maxItems
     *
     * @return self
     */
    public function setMaxItems(?int $maxItems): self
    {
        $this->maxItems = $maxItems;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinItems(): ?int
    {
        return $this->minItems;
    }

    /**
     * @param int $minItems
     *
     * @return self
     */
    public function setMinItems(?int $minItems): self
    {
        $this->minItems = $minItems;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUniqueItems(): ?bool
    {
        return $this->uniqueItems;
    }

    /**
     * @param bool $uniqueItems
     *
     * @return self
     */
    public function setUniqueItems(?bool $uniqueItems): self
    {
        $this->uniqueItems = $uniqueItems;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxProperties(): ?int
    {
        return $this->maxProperties;
    }

    /**
     * @param int $maxProperties
     *
     * @return self
     */
    public function setMaxProperties(?int $maxProperties): self
    {
        $this->maxProperties = $maxProperties;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinProperties(): ?int
    {
        return $this->minProperties;
    }

    /**
     * @param int $minProperties
     *
     * @return self
     */
    public function setMinProperties(?int $minProperties): self
    {
        $this->minProperties = $minProperties;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRequired(): ?array
    {
        return $this->required;
    }

    /**
     * @param string[] $required
     *
     * @return self
     */
    public function setRequired(?array $required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return bool|JsonSchema
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }

    /**
     * @param bool|JsonSchema $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties($additionalProperties): self
    {
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * @return JsonSchema[]
     */
    public function getDefinitions(): ?\ArrayObject
    {
        return $this->definitions;
    }

    /**
     * @param JsonSchema[] $definitions
     *
     * @return self
     */
    public function setDefinitions(?\ArrayObject $definitions): self
    {
        $this->definitions = $definitions;

        return $this;
    }

    /**
     * @return JsonSchema[]
     */
    public function getProperties(): ?\ArrayObject
    {
        return $this->properties;
    }

    /**
     * @param JsonSchema[] $properties
     *
     * @return self
     */
    public function setProperties(?\ArrayObject $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return JsonSchema[]
     */
    public function getPatternProperties(): ?\ArrayObject
    {
        return $this->patternProperties;
    }

    /**
     * @param JsonSchema[] $patternProperties
     *
     * @return self
     */
    public function setPatternProperties(?\ArrayObject $patternProperties): self
    {
        $this->patternProperties = $patternProperties;

        return $this;
    }

    /**
     * @return JsonSchema[]|string[][]
     */
    public function getDependencies(): ?\ArrayObject
    {
        return $this->dependencies;
    }

    /**
     * @param JsonSchema[]|string[][] $dependencies
     *
     * @return self
     */
    public function setDependencies(?\ArrayObject $dependencies): self
    {
        $this->dependencies = $dependencies;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getEnum(): ?array
    {
        return $this->enum;
    }

    /**
     * @param mixed[] $enum
     *
     * @return self
     */
    public function setEnum(?array $enum): self
    {
        $this->enum = $enum;

        return $this;
    }

    /**
     * @return mixed|mixed[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed|mixed[] $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return JsonSchema[]
     */
    public function getAllOf(): ?array
    {
        return $this->allOf;
    }

    /**
     * @param JsonSchema[] $allOf
     *
     * @return self
     */
    public function setAllOf(?array $allOf): self
    {
        $this->allOf = $allOf;

        return $this;
    }

    /**
     * @return JsonSchema[]
     */
    public function getAnyOf(): ?array
    {
        return $this->anyOf;
    }

    /**
     * @param JsonSchema[] $anyOf
     *
     * @return self
     */
    public function setAnyOf(?array $anyOf): self
    {
        $this->anyOf = $anyOf;

        return $this;
    }

    /**
     * @return JsonSchema[]
     */
    public function getOneOf(): ?array
    {
        return $this->oneOf;
    }

    /**
     * @param JsonSchema[] $oneOf
     *
     * @return self
     */
    public function setOneOf(?array $oneOf): self
    {
        $this->oneOf = $oneOf;

        return $this;
    }

    /**
     * @return JsonSchema
     */
    public function getNot(): ?self
    {
        return $this->not;
    }

    /**
     * @param JsonSchema $not
     *
     * @return self
     */
    public function setNot(?self $not): self
    {
        $this->not = $not;

        return $this;
    }
}