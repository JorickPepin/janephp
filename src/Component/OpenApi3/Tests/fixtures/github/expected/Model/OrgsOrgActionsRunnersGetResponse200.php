<?php

namespace Github\Model;

class OrgsOrgActionsRunnersGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var list<Runner>
     */
    protected $runners;
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<Runner>
     */
    public function getRunners(): array
    {
        return $this->runners;
    }
    /**
     * 
     *
     * @param list<Runner> $runners
     *
     * @return self
     */
    public function setRunners(array $runners): self
    {
        $this->initialized['runners'] = true;
        $this->runners = $runners;
        return $this;
    }
}