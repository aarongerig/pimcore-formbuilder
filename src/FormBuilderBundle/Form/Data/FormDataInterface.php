<?php

namespace FormBuilderBundle\Form\Data;

use FormBuilderBundle\Model\FormDefinitionInterface;
use FormBuilderBundle\Stream\File;

interface FormDataInterface
{
    /**
     * @return FormDefinitionInterface
     */
    public function getFormDefinition();

    /**
     * @return array
     */
    public function getData();

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getFieldValue(string $name);

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function setFieldValue(string $name, $value);

    /**
     * @return bool
     */
    public function hasAttachments();

    /**
     * @return array
     */
    public function getAttachments();

    /**
     * @param File $attachmentFile
     */
    public function addAttachment(File $attachmentFile);
}
