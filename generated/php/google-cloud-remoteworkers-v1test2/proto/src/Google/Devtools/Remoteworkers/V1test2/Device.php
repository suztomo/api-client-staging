<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteworkers/v1test2/worker.proto

namespace Google\Devtools\Remoteworkers\V1test2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Any device, including computers, phones, accelerators (e.g. GPUs), etc. All
 * names must be unique.
 *
 * Generated from protobuf message <code>google.devtools.remoteworkers.v1test2.Device</code>
 */
class Device extends \Google\Protobuf\Internal\Message
{
    /**
     * The handle can be thought of as the "name" of the device, and must be
     * unique within a Worker.
     * In the Status context, the handle should be some human-understandable name,
     * perhaps corresponding to a label physically written on the device to make
     * it easy to locate. In the Request context, the name should be the
     * *logical* name expected by the task. The bot is responsible for mapping the
     * logical name expected by the task to a machine-readable name that the task
     * can actually use, such as a USB address. The method by which this mapping
     * is communicated to the task is not covered in this API.
     *
     * Generated from protobuf field <code>string handle = 1;</code>
     */
    private $handle = '';
    /**
     * Properties of this device that don't change based on the tasks that are
     * running on it, e.g. OS, CPU architecture, etc.
     * Keys may be repeated, and have the following interpretation:
     *    * Status context: the device can support *any* the listed values. For
     *    example, an "ISA" property might include "x86", "x86-64" and "sse4".
     *    * Request context: the device *must* support *all* of the listed values.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Device.Property properties = 2;</code>
     */
    private $properties;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteworkers\V1Test2\Worker::initOnce();
        parent::__construct();
    }

    /**
     * The handle can be thought of as the "name" of the device, and must be
     * unique within a Worker.
     * In the Status context, the handle should be some human-understandable name,
     * perhaps corresponding to a label physically written on the device to make
     * it easy to locate. In the Request context, the name should be the
     * *logical* name expected by the task. The bot is responsible for mapping the
     * logical name expected by the task to a machine-readable name that the task
     * can actually use, such as a USB address. The method by which this mapping
     * is communicated to the task is not covered in this API.
     *
     * Generated from protobuf field <code>string handle = 1;</code>
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * The handle can be thought of as the "name" of the device, and must be
     * unique within a Worker.
     * In the Status context, the handle should be some human-understandable name,
     * perhaps corresponding to a label physically written on the device to make
     * it easy to locate. In the Request context, the name should be the
     * *logical* name expected by the task. The bot is responsible for mapping the
     * logical name expected by the task to a machine-readable name that the task
     * can actually use, such as a USB address. The method by which this mapping
     * is communicated to the task is not covered in this API.
     *
     * Generated from protobuf field <code>string handle = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHandle($var)
    {
        GPBUtil::checkString($var, True);
        $this->handle = $var;

        return $this;
    }

    /**
     * Properties of this device that don't change based on the tasks that are
     * running on it, e.g. OS, CPU architecture, etc.
     * Keys may be repeated, and have the following interpretation:
     *    * Status context: the device can support *any* the listed values. For
     *    example, an "ISA" property might include "x86", "x86-64" and "sse4".
     *    * Request context: the device *must* support *all* of the listed values.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Device.Property properties = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Properties of this device that don't change based on the tasks that are
     * running on it, e.g. OS, CPU architecture, etc.
     * Keys may be repeated, and have the following interpretation:
     *    * Status context: the device can support *any* the listed values. For
     *    example, an "ISA" property might include "x86", "x86-64" and "sse4".
     *    * Request context: the device *must* support *all* of the listed values.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteworkers.v1test2.Device.Property properties = 2;</code>
     * @param \Google\Devtools\Remoteworkers\V1test2\Device_Property[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteworkers\V1test2\Device_Property::class);
        $this->properties = $arr;

        return $this;
    }

}

