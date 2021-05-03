<?php
class entityAttribute {
    private $entityAttributeName='';
    private $entityAttributeDataType='';

    /**
     * @return string
     */
    public function getEntityAttributeName()
    {
        return $this->entityAttributeName;
    }

    /**
     * @param string $entityAttributeName
     */
    public function setEntityAttributeName($entityAttributeName)
    {
        $this->entityAttributeName = $entityAttributeName;
    }

    /**
     * @return string
     */
    public function getEntityAttributeDataType()
    {
        return $this->entityAttributeDataType;
    }

    /**
     * @param string $entityAttributeDataType
     */
    public function setEntityDataType($entityAttributeDataType)
    {
        $this->entityAttributeDataType = $entityAttributeDataType;
    }

    /**
     * entityAttribute constructor.
     * @param string $entityAttributeName
     * @param string $entityAttributeDataType
     */
    public function __construct($entityAttributeName, $entityAttributeDataType)
    {
        $this->entityAttributeName = $entityAttributeName;
        $this->entityAttributeDataType = $entityAttributeDataType;
    }

}