<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteworkers/v1test2/tasks.proto

namespace Google\Devtools\Remoteworkers\V1test2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `UpdateTaskResult`.
 *
 * Generated from protobuf message <code>google.devtools.remoteworkers.v1test2.UpdateTaskResultRequest</code>
 */
class UpdateTaskResultRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The task result name; must match `result.name`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The result being updated.
     *
     * Generated from protobuf field <code>.google.devtools.remoteworkers.v1test2.TaskResult result = 2;</code>
     */
    private $result = null;
    /**
     * The fields within `result` that are specified.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;
    /**
     * If this is being updated by a bot from BotManager, the source should be
     * bot.session_id. That way, if two bots accidentally get the same name, we'll
     * know to reject updates from the older one.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     */
    private $source = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteworkers\V1Test2\Tasks::initOnce();
        parent::__construct();
    }

    /**
     * The task result name; must match `result.name`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The task result name; must match `result.name`.
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
     * The result being updated.
     *
     * Generated from protobuf field <code>.google.devtools.remoteworkers.v1test2.TaskResult result = 2;</code>
     * @return \Google\Devtools\Remoteworkers\V1test2\TaskResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The result being updated.
     *
     * Generated from protobuf field <code>.google.devtools.remoteworkers.v1test2.TaskResult result = 2;</code>
     * @param \Google\Devtools\Remoteworkers\V1test2\TaskResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Remoteworkers\V1test2\TaskResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * The fields within `result` that are specified.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * The fields within `result` that are specified.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If this is being updated by a bot from BotManager, the source should be
     * bot.session_id. That way, if two bots accidentally get the same name, we'll
     * know to reject updates from the older one.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * If this is being updated by a bot from BotManager, the source should be
     * bot.session_id. That way, if two bots accidentally get the same name, we'll
     * know to reject updates from the older one.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

}

