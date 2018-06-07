<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1p1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for SPEECH_TRANSCRIPTION.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1p1beta1.SpeechTranscriptionConfig</code>
 */
class SpeechTranscriptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     */
    private $language_code = '';
    /**
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`. The server may return fewer than
     * `max_alternatives`. Valid values are `0`-`30`. A value of `0` or `1` will
     * return a maximum of one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 2;</code>
     */
    private $max_alternatives = 0;
    /**
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool filter_profanity = 3;</code>
     */
    private $filter_profanity = false;
    /**
     * *Optional* A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1p1beta1.SpeechContext speech_contexts = 4;</code>
     */
    private $speech_contexts;
    /**
     * *Optional* For file formats, such as MXF or MKV, supporting multiple audio
     * tracks, specify up to two tracks. Default: track 0.
     *
     * Generated from protobuf field <code>repeated int32 audio_tracks = 6;</code>
     */
    private $audio_tracks;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1P1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`. The server may return fewer than
     * `max_alternatives`. Valid values are `0`-`30`. A value of `0` or `1` will
     * return a maximum of one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 2;</code>
     * @return int
     */
    public function getMaxAlternatives()
    {
        return $this->max_alternatives;
    }

    /**
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`. The server may return fewer than
     * `max_alternatives`. Valid values are `0`-`30`. A value of `0` or `1` will
     * return a maximum of one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxAlternatives($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_alternatives = $var;

        return $this;
    }

    /**
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool filter_profanity = 3;</code>
     * @return bool
     */
    public function getFilterProfanity()
    {
        return $this->filter_profanity;
    }

    /**
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool filter_profanity = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFilterProfanity($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_profanity = $var;

        return $this;
    }

    /**
     * *Optional* A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1p1beta1.SpeechContext speech_contexts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechContexts()
    {
        return $this->speech_contexts;
    }

    /**
     * *Optional* A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1p1beta1.SpeechContext speech_contexts = 4;</code>
     * @param \Google\Cloud\VideoIntelligence\V1p1beta1\SpeechContext[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1p1beta1\SpeechContext::class);
        $this->speech_contexts = $arr;

        return $this;
    }

    /**
     * *Optional* For file formats, such as MXF or MKV, supporting multiple audio
     * tracks, specify up to two tracks. Default: track 0.
     *
     * Generated from protobuf field <code>repeated int32 audio_tracks = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAudioTracks()
    {
        return $this->audio_tracks;
    }

    /**
     * *Optional* For file formats, such as MXF or MKV, supporting multiple audio
     * tracks, specify up to two tracks. Default: track 0.
     *
     * Generated from protobuf field <code>repeated int32 audio_tracks = 6;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAudioTracks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->audio_tracks = $arr;

        return $this;
    }

}

