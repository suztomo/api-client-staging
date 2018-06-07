<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies an executable to run on a fully configured node and a
 * timeout period for executable completion.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.NodeInitializationAction</code>
 */
class NodeInitializationAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Cloud Storage URI of executable file.
     *
     * Generated from protobuf field <code>string executable_file = 1;</code>
     */
    private $executable_file = '';
    /**
     * Optional. Amount of time executable has to complete. Default is
     * 10 minutes. Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2;</code>
     */
    private $execution_timeout = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct();
    }

    /**
     * Required. Cloud Storage URI of executable file.
     *
     * Generated from protobuf field <code>string executable_file = 1;</code>
     * @return string
     */
    public function getExecutableFile()
    {
        return $this->executable_file;
    }

    /**
     * Required. Cloud Storage URI of executable file.
     *
     * Generated from protobuf field <code>string executable_file = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExecutableFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->executable_file = $var;

        return $this;
    }

    /**
     * Optional. Amount of time executable has to complete. Default is
     * 10 minutes. Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getExecutionTimeout()
    {
        return $this->execution_timeout;
    }

    /**
     * Optional. Amount of time executable has to complete. Default is
     * 10 minutes. Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->execution_timeout = $var;

        return $this;
    }

}

