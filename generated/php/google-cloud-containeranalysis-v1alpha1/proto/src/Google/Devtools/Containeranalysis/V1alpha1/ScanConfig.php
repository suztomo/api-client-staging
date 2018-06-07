<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/containeranalysis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates various scans and whether they are turned on or off.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.ScanConfig</code>
 */
class ScanConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the ScanConfig in the form
     * “projects/{project_id}/ScanConfigs/{ScanConfig_id}".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. A human-readable description of what the `ScanConfig` does.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Indicates whether the Scan is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 3;</code>
     */
    private $enabled = false;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\Containeranalysis::initOnce();
        parent::__construct();
    }

    /**
     * Output only. The name of the ScanConfig in the form
     * “projects/{project_id}/ScanConfigs/{ScanConfig_id}".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the ScanConfig in the form
     * “projects/{project_id}/ScanConfigs/{ScanConfig_id}".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. A human-readable description of what the `ScanConfig` does.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Output only. A human-readable description of what the `ScanConfig` does.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Indicates whether the Scan is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 3;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Indicates whether the Scan is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

}

