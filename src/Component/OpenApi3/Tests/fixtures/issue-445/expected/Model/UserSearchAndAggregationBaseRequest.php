<?php

namespace PicturePark\API\Model;

class UserSearchAndAggregationBaseRequest
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
     * Return only users in certain life cycle state(s).
     *
     * @var mixed
     */
    protected $lifeCycleFilter;
    /**
     * Return only users with certain user rights.
     *
     * @var list<string>|null
     */
    protected $userRightsFilter;
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
     * Includes the service user in result.
     *
     * @var bool
     */
    protected $includeServiceUser;
    /**
    * Restricts the results to users that are editable for calling user.
    If set to true, IncludeServiceUser is ignored.
    *
    * @var bool
    */
    protected $editableOnly;
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
     * Return only users in certain life cycle state(s).
     *
     * @return mixed
     */
    public function getLifeCycleFilter()
    {
        return $this->lifeCycleFilter;
    }
    /**
     * Return only users in certain life cycle state(s).
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
     * Return only users with certain user rights.
     *
     * @return list<string>|null
     */
    public function getUserRightsFilter(): ?array
    {
        return $this->userRightsFilter;
    }
    /**
     * Return only users with certain user rights.
     *
     * @param list<string>|null $userRightsFilter
     *
     * @return self
     */
    public function setUserRightsFilter(?array $userRightsFilter): self
    {
        $this->initialized['userRightsFilter'] = true;
        $this->userRightsFilter = $userRightsFilter;
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
     * Includes the service user in result.
     *
     * @return bool
     */
    public function getIncludeServiceUser(): bool
    {
        return $this->includeServiceUser;
    }
    /**
     * Includes the service user in result.
     *
     * @param bool $includeServiceUser
     *
     * @return self
     */
    public function setIncludeServiceUser(bool $includeServiceUser): self
    {
        $this->initialized['includeServiceUser'] = true;
        $this->includeServiceUser = $includeServiceUser;
        return $this;
    }
    /**
    * Restricts the results to users that are editable for calling user.
    If set to true, IncludeServiceUser is ignored.
    *
    * @return bool
    */
    public function getEditableOnly(): bool
    {
        return $this->editableOnly;
    }
    /**
    * Restricts the results to users that are editable for calling user.
    If set to true, IncludeServiceUser is ignored.
    *
    * @param bool $editableOnly
    *
    * @return self
    */
    public function setEditableOnly(bool $editableOnly): self
    {
        $this->initialized['editableOnly'] = true;
        $this->editableOnly = $editableOnly;
        return $this;
    }
}