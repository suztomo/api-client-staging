// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/api/servicemanagement/v1/servicemanager.proto

package com.google.api.servicemanagement.v1;

public interface GetServiceRolloutRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.api.servicemanagement.v1.GetServiceRolloutRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The name of the service.  See the [overview](/service-management/overview)
   * for naming requirements.  For example: `example.googleapis.com`.
   * </pre>
   *
   * <code>optional string service_name = 1;</code>
   */
  java.lang.String getServiceName();
  /**
   * <pre>
   * The name of the service.  See the [overview](/service-management/overview)
   * for naming requirements.  For example: `example.googleapis.com`.
   * </pre>
   *
   * <code>optional string service_name = 1;</code>
   */
  com.google.protobuf.ByteString
      getServiceNameBytes();

  /**
   * <pre>
   * The id of the rollout resource.
   * </pre>
   *
   * <code>optional string rollout_id = 2;</code>
   */
  java.lang.String getRolloutId();
  /**
   * <pre>
   * The id of the rollout resource.
   * </pre>
   *
   * <code>optional string rollout_id = 2;</code>
   */
  com.google.protobuf.ByteString
      getRolloutIdBytes();
}