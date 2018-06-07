<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

/**
 * Represents the different states that webhooks can be in.
 *
 * Protobuf enum <code>Google\Cloud\Dialogflow\V2beta1\Intent\WebhookState</code>
 */
class Intent_WebhookState
{
    /**
     * Webhook is disabled in the agent and in the intent.
     *
     * Generated from protobuf enum <code>WEBHOOK_STATE_UNSPECIFIED = 0;</code>
     */
    const WEBHOOK_STATE_UNSPECIFIED = 0;
    /**
     * Webhook is enabled in the agent and in the intent.
     *
     * Generated from protobuf enum <code>WEBHOOK_STATE_ENABLED = 1;</code>
     */
    const WEBHOOK_STATE_ENABLED = 1;
    /**
     * Webhook is enabled in the agent and in the intent. Also, each slot
     * filling prompt is forwarded to the webhook.
     *
     * Generated from protobuf enum <code>WEBHOOK_STATE_ENABLED_FOR_SLOT_FILLING = 2;</code>
     */
    const WEBHOOK_STATE_ENABLED_FOR_SLOT_FILLING = 2;
}

