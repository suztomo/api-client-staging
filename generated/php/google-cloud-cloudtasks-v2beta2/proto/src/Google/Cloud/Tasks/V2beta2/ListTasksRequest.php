<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing tasks using [ListTasks][google.cloud.tasks.v2beta2.CloudTasks.ListTasks].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.ListTasksRequest</code>
 */
class ListTasksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The queue name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](/iam/) permission on the
     * [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 2;</code>
     */
    private $response_view = 0;
    /**
     * Sort order used for the query. The only fields supported for sorting
     * are `schedule_time` and `pull_message.tag`. All results will be
     * returned in approximately ascending order. The default ordering is by
     * `schedule_time`.
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     */
    private $order_by = '';
    /**
     * Requested page size. Fewer tasks than requested might be returned.
     * The maximum page size is 1000. If unspecified, the page size will
     * be the maximum. Fewer tasks than requested might be returned,
     * even if more tasks exist; use
     * [next_page_token][google.cloud.tasks.v2beta2.ListTasksResponse.next_page_token] in the
     * response to determine if more tasks exist.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta2.ListTasksResponse.next_page_token] returned
     * from the previous call to [ListTasks][google.cloud.tasks.v2beta2.CloudTasks.ListTasks]
     * method.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct();
    }

    /**
     * Required.
     * The queue name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
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
     * The queue name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
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
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](/iam/) permission on the
     * [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 2;</code>
     * @return int
     */
    public function getResponseView()
    {
        return $this->response_view;
    }

    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](/iam/) permission on the
     * [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tasks\V2beta2\Task_View::class);
        $this->response_view = $var;

        return $this;
    }

    /**
     * Sort order used for the query. The only fields supported for sorting
     * are `schedule_time` and `pull_message.tag`. All results will be
     * returned in approximately ascending order. The default ordering is by
     * `schedule_time`.
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Sort order used for the query. The only fields supported for sorting
     * are `schedule_time` and `pull_message.tag`. All results will be
     * returned in approximately ascending order. The default ordering is by
     * `schedule_time`.
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Requested page size. Fewer tasks than requested might be returned.
     * The maximum page size is 1000. If unspecified, the page size will
     * be the maximum. Fewer tasks than requested might be returned,
     * even if more tasks exist; use
     * [next_page_token][google.cloud.tasks.v2beta2.ListTasksResponse.next_page_token] in the
     * response to determine if more tasks exist.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size. Fewer tasks than requested might be returned.
     * The maximum page size is 1000. If unspecified, the page size will
     * be the maximum. Fewer tasks than requested might be returned,
     * even if more tasks exist; use
     * [next_page_token][google.cloud.tasks.v2beta2.ListTasksResponse.next_page_token] in the
     * response to determine if more tasks exist.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta2.ListTasksResponse.next_page_token] returned
     * from the previous call to [ListTasks][google.cloud.tasks.v2beta2.CloudTasks.ListTasks]
     * method.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta2.ListTasksResponse.next_page_token] returned
     * from the previous call to [ListTasks][google.cloud.tasks.v2beta2.CloudTasks.ListTasks]
     * method.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

