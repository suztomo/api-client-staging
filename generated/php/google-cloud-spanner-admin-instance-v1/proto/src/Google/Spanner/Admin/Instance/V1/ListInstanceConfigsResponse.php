<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs].
 *
 * Protobuf type <code>Google\Spanner\Admin\Instance\V1\ListInstanceConfigsResponse</code>
 */
class ListInstanceConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of requested instance configurations.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.InstanceConfig instance_configs = 1;</code>
     */
    private $instance_configs;
    /**
     * `next_page_token` can be sent in a subsequent
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs] call to
     * fetch more of the matching instance configurations.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The list of requested instance configurations.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.InstanceConfig instance_configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceConfigs()
    {
        return $this->instance_configs;
    }

    /**
     * The list of requested instance configurations.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.InstanceConfig instance_configs = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setInstanceConfigs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Spanner\Admin\Instance\V1\InstanceConfig::class);
        $this->instance_configs = $arr;
    }

    /**
     * `next_page_token` can be sent in a subsequent
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs] call to
     * fetch more of the matching instance configurations.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * `next_page_token` can be sent in a subsequent
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs] call to
     * fetch more of the matching instance configurations.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}
