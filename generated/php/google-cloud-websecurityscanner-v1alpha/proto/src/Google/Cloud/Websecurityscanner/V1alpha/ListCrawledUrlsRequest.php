<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1alpha/web_security_scanner.proto

namespace Google\Cloud\Websecurityscanner\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListCrawledUrls` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1alpha.ListCrawledUrlsRequest</code>
 */
class ListCrawledUrlsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of CrawledUrls to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Alpha\WebSecurityScanner::initOnce();
        parent::__construct();
    }

    /**
     * Required.
     * The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required.
     * The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The maximum number of CrawledUrls to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of CrawledUrls to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

