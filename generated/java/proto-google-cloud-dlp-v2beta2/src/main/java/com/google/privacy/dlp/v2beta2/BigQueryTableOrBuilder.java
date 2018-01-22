// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/privacy/dlp/v2beta2/storage.proto

package com.google.privacy.dlp.v2beta2;

public interface BigQueryTableOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.privacy.dlp.v2beta2.BigQueryTable)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The Google Cloud Platform project ID of the project containing the table.
   * If omitted, project ID is inferred from the API call.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   */
  java.lang.String getProjectId();
  /**
   * <pre>
   * The Google Cloud Platform project ID of the project containing the table.
   * If omitted, project ID is inferred from the API call.
   * </pre>
   *
   * <code>string project_id = 1;</code>
   */
  com.google.protobuf.ByteString
      getProjectIdBytes();

  /**
   * <pre>
   * Dataset ID of the table.
   * </pre>
   *
   * <code>string dataset_id = 2;</code>
   */
  java.lang.String getDatasetId();
  /**
   * <pre>
   * Dataset ID of the table.
   * </pre>
   *
   * <code>string dataset_id = 2;</code>
   */
  com.google.protobuf.ByteString
      getDatasetIdBytes();

  /**
   * <pre>
   * Name of the table.
   * </pre>
   *
   * <code>string table_id = 3;</code>
   */
  java.lang.String getTableId();
  /**
   * <pre>
   * Name of the table.
   * </pre>
   *
   * <code>string table_id = 3;</code>
   */
  com.google.protobuf.ByteString
      getTableIdBytes();
}