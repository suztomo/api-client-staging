<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The document classification response message.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.ClassifyTextResponse</code>
 */
class ClassifyTextResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Categories representing the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1.ClassificationCategory categories = 1;</code>
     */
    private $categories;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * Categories representing the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1.ClassificationCategory categories = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Categories representing the input document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.language.v1.ClassificationCategory categories = 1;</code>
     * @param \Google\Cloud\Language\V1\ClassificationCategory[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1\ClassificationCategory::class);
        $this->categories = $arr;

        return $this;
    }

}

