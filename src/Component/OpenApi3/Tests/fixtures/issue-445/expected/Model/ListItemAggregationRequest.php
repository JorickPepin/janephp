<?php

namespace PicturePark\API\Model;

class ListItemAggregationRequest extends \ArrayObject
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
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @var list<string>|null
     */
    protected $searchBehaviors;
    /**
     * An optional search filter. Limits the document result set.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @var list<AggregationFilter>|null
    */
    protected $aggregationFilters;
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @var bool
     */
    protected $includeAllSchemaChildren;
    /**
     * Limits the aggregation to the list items that have or not have broken references. By default it includes both.
     *
     * @var mixed
     */
    protected $brokenDependenciesFilter = 'All';
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @var list<string>|null
     */
    protected $schemaIds;
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @var list<string>|null
    */
    protected $searchLanguages;
    /**
     * Limits the aggregation to the list items that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @var mixed
     */
    protected $lifeCycleFilter = 'ActiveOnly';
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @var list<AggregatorBase>
     */
    protected $aggregators;
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString(): ?string
    {
        return $this->searchString;
    }
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @param string|null $searchString
     *
     * @return self
     */
    public function setSearchString(?string $searchString): self
    {
        $this->initialized['searchString'] = true;
        $this->searchString = $searchString;
        return $this;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @return list<string>|null
     */
    public function getSearchBehaviors(): ?array
    {
        return $this->searchBehaviors;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @param list<string>|null $searchBehaviors
     *
     * @return self
     */
    public function setSearchBehaviors(?array $searchBehaviors): self
    {
        $this->initialized['searchBehaviors'] = true;
        $this->searchBehaviors = $searchBehaviors;
        return $this;
    }
    /**
     * An optional search filter. Limits the document result set.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional search filter. Limits the document result set.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @return list<AggregationFilter>|null
    */
    public function getAggregationFilters(): ?array
    {
        return $this->aggregationFilters;
    }
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @param list<AggregationFilter>|null $aggregationFilters
    *
    * @return self
    */
    public function setAggregationFilters(?array $aggregationFilters): self
    {
        $this->initialized['aggregationFilters'] = true;
        $this->aggregationFilters = $aggregationFilters;
        return $this;
    }
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @return bool
     */
    public function getIncludeAllSchemaChildren(): bool
    {
        return $this->includeAllSchemaChildren;
    }
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @param bool $includeAllSchemaChildren
     *
     * @return self
     */
    public function setIncludeAllSchemaChildren(bool $includeAllSchemaChildren): self
    {
        $this->initialized['includeAllSchemaChildren'] = true;
        $this->includeAllSchemaChildren = $includeAllSchemaChildren;
        return $this;
    }
    /**
     * Limits the aggregation to the list items that have or not have broken references. By default it includes both.
     *
     * @return mixed
     */
    public function getBrokenDependenciesFilter()
    {
        return $this->brokenDependenciesFilter;
    }
    /**
     * Limits the aggregation to the list items that have or not have broken references. By default it includes both.
     *
     * @param mixed $brokenDependenciesFilter
     *
     * @return self
     */
    public function setBrokenDependenciesFilter($brokenDependenciesFilter): self
    {
        $this->initialized['brokenDependenciesFilter'] = true;
        $this->brokenDependenciesFilter = $brokenDependenciesFilter;
        return $this;
    }
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @return list<string>|null
     */
    public function getSchemaIds(): ?array
    {
        return $this->schemaIds;
    }
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @param list<string>|null $schemaIds
     *
     * @return self
     */
    public function setSchemaIds(?array $schemaIds): self
    {
        $this->initialized['schemaIds'] = true;
        $this->schemaIds = $schemaIds;
        return $this;
    }
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @return list<string>|null
    */
    public function getSearchLanguages(): ?array
    {
        return $this->searchLanguages;
    }
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @param list<string>|null $searchLanguages
    *
    * @return self
    */
    public function setSearchLanguages(?array $searchLanguages): self
    {
        $this->initialized['searchLanguages'] = true;
        $this->searchLanguages = $searchLanguages;
        return $this;
    }
    /**
     * Limits the aggregation to the list items that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @return mixed
     */
    public function getLifeCycleFilter()
    {
        return $this->lifeCycleFilter;
    }
    /**
     * Limits the aggregation to the list items that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @param mixed $lifeCycleFilter
     *
     * @return self
     */
    public function setLifeCycleFilter($lifeCycleFilter): self
    {
        $this->initialized['lifeCycleFilter'] = true;
        $this->lifeCycleFilter = $lifeCycleFilter;
        return $this;
    }
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @return list<AggregatorBase>
     */
    public function getAggregators(): array
    {
        return $this->aggregators;
    }
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @param list<AggregatorBase> $aggregators
     *
     * @return self
     */
    public function setAggregators(array $aggregators): self
    {
        $this->initialized['aggregators'] = true;
        $this->aggregators = $aggregators;
        return $this;
    }
}