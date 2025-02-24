<?php

namespace PicturePark\API\Model;

class SchemaDetail
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
     * The schema ID. It is unique throughout the whole customer setup.
     *
     * @var string
     */
    protected $id;
    /**
     * System generated schema namespace. It contains the full schema hierarchy up to the root schema (i.e. [RootSchemaId].[ParentSchemaId].[SchemaId]).
     *
     * @var string
     */
    protected $schemaNamespace;
    /**
     * The parent schema ID.
     *
     * @var string|null
     */
    protected $parentSchemaId;
    /**
     * List of schema types. Currently only one schema type can be assigned to this list, and it cannot be modified once the schema is created.
     *
     * @var list<string>
     */
    protected $types;
    /**
     * Language specific schema names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * Language specific schema descriptions.
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @var list<string>|null
     */
    protected $layerSchemaIds;
    /**
     * Language specific DotLiquid templates. These templates will be resolved into display values in content documents and/or list items.
     *
     * @var list<DisplayPattern>
     */
    protected $displayPatterns;
    /**
     * The schema fields.
     *
     * @var list<FieldBase>|null
     */
    protected $fields;
    /**
    * A list of schema fields overwrite information. It is used to overwrite the field configuration coming from the parent schema.
    Only a subset of properties of a FieldSingleTagbox and FieldMultiTagbox can be be overwritten. All other properties and fields cannot.
    *
    * @var list<FieldOverwriteBase>|null
    */
    protected $fieldsOverwrite;
    /**
    * Sorts content documents and/or list items. In order for the sorting to work properly, the Sortable property of the related field
    must be set to true. Multiple sorting is supported: they are applied in the specified order.
    *
    * @var list<SortInfo>|null
    */
    protected $sort;
    /**
    * An optional list of aggregations to show grouped list item documents. When aggregations are defined for a List,
    the UI uses such information to show the available filters and grouped results.
    *
    * @var list<AggregatorBase>|null
    */
    protected $aggregations;
    /**
     * Identifies a system provided schema. A system schema cannot be created, updated or deleted.
     *
     * @var bool
     */
    protected $system;
    /**
     * The owner token ID. Defines the schema owner.
     *
     * @var string
     */
    protected $ownerTokenId;
    /**
     * Defines a schema as viewable by everyone. Everyone with ManageSchema user permission is able to see the schema.
     *
     * @var bool
     */
    protected $viewForAll;
    /**
     * An optional list of schema permission set IDs which control schema permissions.
     *
     * @var list<string>|null
     */
    protected $schemaPermissionSetIds;
    /**
    * If the schema if of type Layer, the list contains the schemas with type Content
    that reference the layer.
    *
    * @var list<string>|null
    */
    protected $referencedInContentSchemaIds;
    /**
     * The complete list of all descendant schema IDs.
     *
     * @var list<string>|null
     */
    protected $descendantSchemaIds;
    /**
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * The number of fields generated by the schema in the search index for filtering, searching and sorting.
     *
     * @var mixed|null
     */
    protected $searchFieldCount;
    /**
     * The schema ID. It is unique throughout the whole customer setup.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The schema ID. It is unique throughout the whole customer setup.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * System generated schema namespace. It contains the full schema hierarchy up to the root schema (i.e. [RootSchemaId].[ParentSchemaId].[SchemaId]).
     *
     * @return string
     */
    public function getSchemaNamespace(): string
    {
        return $this->schemaNamespace;
    }
    /**
     * System generated schema namespace. It contains the full schema hierarchy up to the root schema (i.e. [RootSchemaId].[ParentSchemaId].[SchemaId]).
     *
     * @param string $schemaNamespace
     *
     * @return self
     */
    public function setSchemaNamespace(string $schemaNamespace): self
    {
        $this->initialized['schemaNamespace'] = true;
        $this->schemaNamespace = $schemaNamespace;
        return $this;
    }
    /**
     * The parent schema ID.
     *
     * @return string|null
     */
    public function getParentSchemaId(): ?string
    {
        return $this->parentSchemaId;
    }
    /**
     * The parent schema ID.
     *
     * @param string|null $parentSchemaId
     *
     * @return self
     */
    public function setParentSchemaId(?string $parentSchemaId): self
    {
        $this->initialized['parentSchemaId'] = true;
        $this->parentSchemaId = $parentSchemaId;
        return $this;
    }
    /**
     * List of schema types. Currently only one schema type can be assigned to this list, and it cannot be modified once the schema is created.
     *
     * @return list<string>
     */
    public function getTypes(): array
    {
        return $this->types;
    }
    /**
     * List of schema types. Currently only one schema type can be assigned to this list, and it cannot be modified once the schema is created.
     *
     * @param list<string> $types
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * Language specific schema names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific schema names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * Language specific schema descriptions.
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * Language specific schema descriptions.
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @return list<string>|null
     */
    public function getLayerSchemaIds(): ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @param list<string>|null $layerSchemaIds
     *
     * @return self
     */
    public function setLayerSchemaIds(?array $layerSchemaIds): self
    {
        $this->initialized['layerSchemaIds'] = true;
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
    /**
     * Language specific DotLiquid templates. These templates will be resolved into display values in content documents and/or list items.
     *
     * @return list<DisplayPattern>
     */
    public function getDisplayPatterns(): array
    {
        return $this->displayPatterns;
    }
    /**
     * Language specific DotLiquid templates. These templates will be resolved into display values in content documents and/or list items.
     *
     * @param list<DisplayPattern> $displayPatterns
     *
     * @return self
     */
    public function setDisplayPatterns(array $displayPatterns): self
    {
        $this->initialized['displayPatterns'] = true;
        $this->displayPatterns = $displayPatterns;
        return $this;
    }
    /**
     * The schema fields.
     *
     * @return list<FieldBase>|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }
    /**
     * The schema fields.
     *
     * @param list<FieldBase>|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
    /**
    * A list of schema fields overwrite information. It is used to overwrite the field configuration coming from the parent schema.
    Only a subset of properties of a FieldSingleTagbox and FieldMultiTagbox can be be overwritten. All other properties and fields cannot.
    *
    * @return list<FieldOverwriteBase>|null
    */
    public function getFieldsOverwrite(): ?array
    {
        return $this->fieldsOverwrite;
    }
    /**
    * A list of schema fields overwrite information. It is used to overwrite the field configuration coming from the parent schema.
    Only a subset of properties of a FieldSingleTagbox and FieldMultiTagbox can be be overwritten. All other properties and fields cannot.
    *
    * @param list<FieldOverwriteBase>|null $fieldsOverwrite
    *
    * @return self
    */
    public function setFieldsOverwrite(?array $fieldsOverwrite): self
    {
        $this->initialized['fieldsOverwrite'] = true;
        $this->fieldsOverwrite = $fieldsOverwrite;
        return $this;
    }
    /**
    * Sorts content documents and/or list items. In order for the sorting to work properly, the Sortable property of the related field
    must be set to true. Multiple sorting is supported: they are applied in the specified order.
    *
    * @return list<SortInfo>|null
    */
    public function getSort(): ?array
    {
        return $this->sort;
    }
    /**
    * Sorts content documents and/or list items. In order for the sorting to work properly, the Sortable property of the related field
    must be set to true. Multiple sorting is supported: they are applied in the specified order.
    *
    * @param list<SortInfo>|null $sort
    *
    * @return self
    */
    public function setSort(?array $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
    * An optional list of aggregations to show grouped list item documents. When aggregations are defined for a List,
    the UI uses such information to show the available filters and grouped results.
    *
    * @return list<AggregatorBase>|null
    */
    public function getAggregations(): ?array
    {
        return $this->aggregations;
    }
    /**
    * An optional list of aggregations to show grouped list item documents. When aggregations are defined for a List,
    the UI uses such information to show the available filters and grouped results.
    *
    * @param list<AggregatorBase>|null $aggregations
    *
    * @return self
    */
    public function setAggregations(?array $aggregations): self
    {
        $this->initialized['aggregations'] = true;
        $this->aggregations = $aggregations;
        return $this;
    }
    /**
     * Identifies a system provided schema. A system schema cannot be created, updated or deleted.
     *
     * @return bool
     */
    public function getSystem(): bool
    {
        return $this->system;
    }
    /**
     * Identifies a system provided schema. A system schema cannot be created, updated or deleted.
     *
     * @param bool $system
     *
     * @return self
     */
    public function setSystem(bool $system): self
    {
        $this->initialized['system'] = true;
        $this->system = $system;
        return $this;
    }
    /**
     * The owner token ID. Defines the schema owner.
     *
     * @return string
     */
    public function getOwnerTokenId(): string
    {
        return $this->ownerTokenId;
    }
    /**
     * The owner token ID. Defines the schema owner.
     *
     * @param string $ownerTokenId
     *
     * @return self
     */
    public function setOwnerTokenId(string $ownerTokenId): self
    {
        $this->initialized['ownerTokenId'] = true;
        $this->ownerTokenId = $ownerTokenId;
        return $this;
    }
    /**
     * Defines a schema as viewable by everyone. Everyone with ManageSchema user permission is able to see the schema.
     *
     * @return bool
     */
    public function getViewForAll(): bool
    {
        return $this->viewForAll;
    }
    /**
     * Defines a schema as viewable by everyone. Everyone with ManageSchema user permission is able to see the schema.
     *
     * @param bool $viewForAll
     *
     * @return self
     */
    public function setViewForAll(bool $viewForAll): self
    {
        $this->initialized['viewForAll'] = true;
        $this->viewForAll = $viewForAll;
        return $this;
    }
    /**
     * An optional list of schema permission set IDs which control schema permissions.
     *
     * @return list<string>|null
     */
    public function getSchemaPermissionSetIds(): ?array
    {
        return $this->schemaPermissionSetIds;
    }
    /**
     * An optional list of schema permission set IDs which control schema permissions.
     *
     * @param list<string>|null $schemaPermissionSetIds
     *
     * @return self
     */
    public function setSchemaPermissionSetIds(?array $schemaPermissionSetIds): self
    {
        $this->initialized['schemaPermissionSetIds'] = true;
        $this->schemaPermissionSetIds = $schemaPermissionSetIds;
        return $this;
    }
    /**
    * If the schema if of type Layer, the list contains the schemas with type Content
    that reference the layer.
    *
    * @return list<string>|null
    */
    public function getReferencedInContentSchemaIds(): ?array
    {
        return $this->referencedInContentSchemaIds;
    }
    /**
    * If the schema if of type Layer, the list contains the schemas with type Content
    that reference the layer.
    *
    * @param list<string>|null $referencedInContentSchemaIds
    *
    * @return self
    */
    public function setReferencedInContentSchemaIds(?array $referencedInContentSchemaIds): self
    {
        $this->initialized['referencedInContentSchemaIds'] = true;
        $this->referencedInContentSchemaIds = $referencedInContentSchemaIds;
        return $this;
    }
    /**
     * The complete list of all descendant schema IDs.
     *
     * @return list<string>|null
     */
    public function getDescendantSchemaIds(): ?array
    {
        return $this->descendantSchemaIds;
    }
    /**
     * The complete list of all descendant schema IDs.
     *
     * @param list<string>|null $descendantSchemaIds
     *
     * @return self
     */
    public function setDescendantSchemaIds(?array $descendantSchemaIds): self
    {
        $this->initialized['descendantSchemaIds'] = true;
        $this->descendantSchemaIds = $descendantSchemaIds;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
    /**
     * The number of fields generated by the schema in the search index for filtering, searching and sorting.
     *
     * @return mixed
     */
    public function getSearchFieldCount()
    {
        return $this->searchFieldCount;
    }
    /**
     * The number of fields generated by the schema in the search index for filtering, searching and sorting.
     *
     * @param mixed $searchFieldCount
     *
     * @return self
     */
    public function setSearchFieldCount($searchFieldCount): self
    {
        $this->initialized['searchFieldCount'] = true;
        $this->searchFieldCount = $searchFieldCount;
        return $this;
    }
}