<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The location of diagnostic output.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.DiagnoseClusterResults</code>
 */
class DiagnoseClusterResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Cloud Storage URI of the diagnostic output.
     * The output report is a plain text file with a summary of collected
     * diagnostics.
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     */
    private $output_uri = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct();
    }

    /**
     * Output only. The Cloud Storage URI of the diagnostic output.
     * The output report is a plain text file with a summary of collected
     * diagnostics.
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Output only. The Cloud Storage URI of the diagnostic output.
     * The output report is a plain text file with a summary of collected
     * diagnostics.
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

}

