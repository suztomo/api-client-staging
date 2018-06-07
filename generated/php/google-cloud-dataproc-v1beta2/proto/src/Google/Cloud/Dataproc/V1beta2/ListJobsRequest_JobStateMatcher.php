<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/jobs.proto

namespace Google\Cloud\Dataproc\V1beta2;

/**
 * A matcher that specifies categories of job states.
 *
 * Protobuf enum <code>Google\Cloud\Dataproc\V1beta2\ListJobsRequest\JobStateMatcher</code>
 */
class ListJobsRequest_JobStateMatcher
{
    /**
     * Match all jobs, regardless of state.
     *
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Only match jobs in non-terminal states: PENDING, RUNNING, or
     * CANCEL_PENDING.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Only match jobs in terminal states: CANCELLED, DONE, or ERROR.
     *
     * Generated from protobuf enum <code>NON_ACTIVE = 2;</code>
     */
    const NON_ACTIVE = 2;
}

