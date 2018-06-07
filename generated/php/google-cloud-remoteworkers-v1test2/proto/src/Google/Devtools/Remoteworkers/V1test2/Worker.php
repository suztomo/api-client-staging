<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteworkers/v1test2/worker.proto

namespace Google\Devtools\Remoteworkers\V1test2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a worker, which is a list of one or more devices and the
 * connections between them. A device could be a computer, a phone, or even an
 * accelerator like a GPU; it's up to the farm administrator to decide how to
 * model their farm. For example, if a farm only has one type of GPU, the GPU
 * could be modelled as a "has_gpu" property on its host computer; if it has
 * many subproperties itself, it might be better to model it as a separate
 * device.
 * The first device in the worker is the "primary device" - that is, the device
 * running a bot and which is responsible for actually executing commands. All
 * other devices are considered to be attached devices, and must be controllable
 * by the primary device.
 * This message (and all its submessages) can be used in two contexts:
 * * Status: sent by the bot to report the current capabilities of the device to
 * allow reservation matching.
 * * Request: sent by a client to request a device with certain capabilities in
 * a reservation.
 * Several of the fields in this message have different semantics depending on
 * which of which of these contexts it is used. These semantics are described
 * below.
 * Several messages in Worker and its submessages have the concept of keys and
 * values, such as `Worker.Property` and `Device.Property`. All keys are simple
 * strings, but certain keys are "standard" keys and should be broadly supported
 * across farms and implementations; these are listed below each relevant
 * message. Bot implementations or farm admins may add *additional* keys, but
 * these SHOULD all begin with an underscore so they do not conflict with
 * standard keys that may be added in the future.
 * Keys are not context sensitive.
 * See http://goo.gl/NurY8g for more information on the Worker message.
 *
 * Generated from protobuf message <code>google.devtools.remoteworkers.v1test2.Worker</code>
 */
class Worker extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of devices; the first device is the primary device. See the `Device`
     * message for more information.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Device devices = 1;</code>
     */
    private $devices;
    /**
     * A worker may contain "global" properties. For example, certain machines
     * might be reserved for certain types of jobs, like short-running compilation
     * versus long-running integration tests. This property is known as a "pool"
     * and is not related to any one device within the worker; rather, it applies
     * to the worker as a whole.
     * The behaviour of repeated keys is identical to that of Device.Property.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Worker.Property properties = 2;</code>
     */
    private $properties;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteworkers\V1Test2\Worker::initOnce();
        parent::__construct();
    }

    /**
     * A list of devices; the first device is the primary device. See the `Device`
     * message for more information.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Device devices = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * A list of devices; the first device is the primary device. See the `Device`
     * message for more information.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Device devices = 1;</code>
     * @param \Google\Devtools\Remoteworkers\V1test2\Device[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteworkers\V1test2\Device::class);
        $this->devices = $arr;

        return $this;
    }

    /**
     * A worker may contain "global" properties. For example, certain machines
     * might be reserved for certain types of jobs, like short-running compilation
     * versus long-running integration tests. This property is known as a "pool"
     * and is not related to any one device within the worker; rather, it applies
     * to the worker as a whole.
     * The behaviour of repeated keys is identical to that of Device.Property.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Worker.Property properties = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * A worker may contain "global" properties. For example, certain machines
     * might be reserved for certain types of jobs, like short-running compilation
     * versus long-running integration tests. This property is known as a "pool"
     * and is not related to any one device within the worker; rather, it applies
     * to the worker as a whole.
     * The behaviour of repeated keys is identical to that of Device.Property.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Worker.Property properties = 2;</code>
     * @param \Google\Devtools\Remoteworkers\V1test2\Worker_Property[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteworkers\V1test2\Worker_Property::class);
        $this->properties = $arr;

        return $this;
    }

}

