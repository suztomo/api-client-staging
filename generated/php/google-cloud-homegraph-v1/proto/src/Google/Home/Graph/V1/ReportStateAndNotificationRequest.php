<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/graph/v1/homegraph.proto

namespace Google\Home\Graph\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sample ReportStateAndNotificationRequest, with states and notifications
 * defined per device_id (eg: "123" and "456" in the following example):
 * {
 *   "requestId": "ff36a3cc-ec34-11e6-b1a0-64510650abcf",
 *   "agent_user_id": "1234",
 *   "payload": {
 *     "devices": {
 *       "states": {
 *         "123": {
 *           "on": true
 *         },
 *         "456": {
 *           "on": true,
 *           "brightness": 10
 *         }
 *       },
 *       "notifications": {
 *         "123": {
 *           "ObjectDetected": {
 *             "priority": 0,
 *             "objects": {
 *               "NAMED": ["Alice", "Bob", "Carol", "Eve"]
 *             }
 *           },
 *           "DoorUnlocked": {
 *             "priority": 0,
 *             "keyUsed": {
 *               "keyName": "Wife's key"
 *             }
 *           }
 *         },
 *         "456": {
 *           "SprinklersOn": {
 *             "priority": 0,
 *             "timeStarted": "1513792702"
 *           }
 *         }
 *       }
 *     }
 *   }
 * }
 * Request type for ReportStateAndNotification call. It may include States,
 * Notifications, or both. This request uses globally unique flattened state
 * names instead of namespaces based on traits to align with the existing QUERY
 * and EXECUTE APIs implemented by 90+ Smart Home partners.
 * Next tag: 5.
 *
 * Generated from protobuf message <code>google.home.graph.v1.ReportStateAndNotificationRequest</code>
 */
class ReportStateAndNotificationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Request id used for debugging.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     */
    private $request_id = '';
    /**
     * Unique identifier per event (eg: doorbell press).
     *
     * Generated from protobuf field <code>string event_id = 4;</code>
     */
    private $event_id = '';
    /**
     * Required. Third-party user id.
     *
     * Generated from protobuf field <code>string agent_user_id = 2;</code>
     */
    private $agent_user_id = '';
    /**
     * State of devices to update and notification metadata for devices. For
     * example, if a user turns a light on manually, a State update should be
     * sent so that the information is always the current status of the device.
     * Notifications are independent from the state and its piece of the payload
     * should contain everything necessary to notify the user. Although it may be
     * related to a state change, it does not need to be. For example, if a
     * device can turn on/off and change temperature, the states reported would
     * include both "on" and "70 degrees" but the 3p may choose not to send any
     * notification for that, or to only say that the "the room is heating up",
     * keeping state and notification independent.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.StateAndNotificationPayload payload = 3;</code>
     */
    private $payload = null;

    public function __construct() {
        \GPBMetadata\Google\Home\Graph\V1\Homegraph::initOnce();
        parent::__construct();
    }

    /**
     * Request id used for debugging.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Request id used for debugging.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Unique identifier per event (eg: doorbell press).
     *
     * Generated from protobuf field <code>string event_id = 4;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Unique identifier per event (eg: doorbell press).
     *
     * Generated from protobuf field <code>string event_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Required. Third-party user id.
     *
     * Generated from protobuf field <code>string agent_user_id = 2;</code>
     * @return string
     */
    public function getAgentUserId()
    {
        return $this->agent_user_id;
    }

    /**
     * Required. Third-party user id.
     *
     * Generated from protobuf field <code>string agent_user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_user_id = $var;

        return $this;
    }

    /**
     * State of devices to update and notification metadata for devices. For
     * example, if a user turns a light on manually, a State update should be
     * sent so that the information is always the current status of the device.
     * Notifications are independent from the state and its piece of the payload
     * should contain everything necessary to notify the user. Although it may be
     * related to a state change, it does not need to be. For example, if a
     * device can turn on/off and change temperature, the states reported would
     * include both "on" and "70 degrees" but the 3p may choose not to send any
     * notification for that, or to only say that the "the room is heating up",
     * keeping state and notification independent.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.StateAndNotificationPayload payload = 3;</code>
     * @return \Google\Home\Graph\V1\StateAndNotificationPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * State of devices to update and notification metadata for devices. For
     * example, if a user turns a light on manually, a State update should be
     * sent so that the information is always the current status of the device.
     * Notifications are independent from the state and its piece of the payload
     * should contain everything necessary to notify the user. Although it may be
     * related to a state change, it does not need to be. For example, if a
     * device can turn on/off and change temperature, the states reported would
     * include both "on" and "70 degrees" but the 3p may choose not to send any
     * notification for that, or to only say that the "the room is heating up",
     * keeping state and notification independent.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.StateAndNotificationPayload payload = 3;</code>
     * @param \Google\Home\Graph\V1\StateAndNotificationPayload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Home\Graph\V1\StateAndNotificationPayload::class);
        $this->payload = $var;

        return $this;
    }

}

