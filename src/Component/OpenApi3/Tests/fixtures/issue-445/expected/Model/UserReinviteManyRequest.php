<?php

namespace PicturePark\API\Model;

class UserReinviteManyRequest extends \ArrayObject
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
     * User IDs.
     *
     * @var list<string>
     */
    protected $userIds;
    /**
     * User IDs.
     *
     * @return list<string>
     */
    public function getUserIds(): array
    {
        return $this->userIds;
    }
    /**
     * User IDs.
     *
     * @param list<string> $userIds
     *
     * @return self
     */
    public function setUserIds(array $userIds): self
    {
        $this->initialized['userIds'] = true;
        $this->userIds = $userIds;
        return $this;
    }
}