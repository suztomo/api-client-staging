<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1beta2/functions.proto

namespace Google\Cloud\Functions\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CreateFunction` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v1beta2.CreateFunctionRequest</code>
 */
class CreateFunctionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project and location in which the function should be created, specified
     * in the format `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * Function to be created.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1beta2.CloudFunction function = 2;</code>
     */
    private $function = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Functions\V1Beta2\Functions::initOnce();
        parent::__construct();
    }

    /**
     * The project and location in which the function should be created, specified
     * in the format `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The project and location in which the function should be created, specified
     * in the format `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Function to be created.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1beta2.CloudFunction function = 2;</code>
     * @return \Google\Cloud\Functions\V1beta2\CloudFunction
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Function to be created.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1beta2.CloudFunction function = 2;</code>
     * @param \Google\Cloud\Functions\V1beta2\CloudFunction $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V1beta2\CloudFunction::class);
        $this->function = $var;

        return $this;
    }

}

