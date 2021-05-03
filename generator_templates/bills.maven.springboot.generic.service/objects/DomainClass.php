<?php

class DomainClass{
private $entityName = '';
private $generationStrategy = '';
private $entityAttributes = array();

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
    }

    /**
     * @return string
     */
    public function getGenerationStrategy()
    {
        return $this->generationStrategy;
    }

    /**
     * @param string $generationStrategy
     */
    public function setGenerationStrategy($generationStrategy)
    {
        $this->generationStrategy = $generationStrategy;
    }

    /**
     * @return array
     */
    public function getEntityAttributes()
    {
        return $this->entityAttributes;
    }

    /**
     * @param array $entityAttributes
     */
    public function setEntityAttributes($entityAttributes)
    {
        $this->entityAttributes = $entityAttributes;
    }


}