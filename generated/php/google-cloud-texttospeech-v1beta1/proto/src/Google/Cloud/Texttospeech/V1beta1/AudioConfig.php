<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1beta1/cloud_tts.proto

namespace Google\Cloud\Texttospeech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of audio data to be synthesized.
 *
 * Generated from protobuf message <code>google.cloud.texttospeech.v1beta1.AudioConfig</code>
 */
class AudioConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The format of the requested audio byte stream.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1beta1.AudioEncoding audio_encoding = 1;</code>
     */
    private $audio_encoding = 0;
    /**
     * Optional speaking rate/speed, in the range [0.25, 4.0]. 1.0 is the normal
     * native speed supported by the specific voice. 2.0 is twice as fast, and
     * 0.5 is half as fast. If unset(0.0), defaults to the native 1.0 speed. Any
     * other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 2;</code>
     */
    private $speaking_rate = 0.0;
    /**
     * Optional speaking pitch, in the range [-20.0, 20.0]. 20 means increase 20
     * semitones from the original pitch. -20 means decrease 20 semitones from the
     * original pitch.
     *
     * Generated from protobuf field <code>double pitch = 3;</code>
     */
    private $pitch = 0.0;
    /**
     * Optional volume gain (in dB) of the normal native volume supported by the
     * specific voice, in the range [-96.0, 16.0]. If unset, or set to a value of
     * 0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
     * will play at approximately half the amplitude of the normal native signal
     * amplitude. A value of +6.0 (dB) will play at approximately twice the
     * amplitude of the normal native signal amplitude. Strongly recommend not to
     * exceed +10 (dB) as there's usually no effective increase in loudness for
     * any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 4;</code>
     */
    private $volume_gain_db = 0.0;
    /**
     * The synthesis sample rate (in hertz) for this audio. Optional.  If this is
     * different from the voice's natural sample rate, then the synthesizer will
     * honor this request by converting to the desired sample rate (which might
     * result in worse audio quality), unless the specified sample rate is not
     * supported for the encoding chosen, in which case it will fail the request
     * and return [google.rpc.Code.INVALID_ARGUMENT][].
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 5;</code>
     */
    private $sample_rate_hertz = 0;
    /**
     * An identifier which selects 'audio effects' profiles that are applied on
     * (post synthesized) text to speech.
     * Effects are applied on top of each other in the order they are given.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 6;</code>
     */
    private $effects_profile_id;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Texttospeech\V1Beta1\CloudTts::initOnce();
        parent::__construct();
    }

    /**
     * Required. The format of the requested audio byte stream.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1beta1.AudioEncoding audio_encoding = 1;</code>
     * @return int
     */
    public function getAudioEncoding()
    {
        return $this->audio_encoding;
    }

    /**
     * Required. The format of the requested audio byte stream.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1beta1.AudioEncoding audio_encoding = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAudioEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Texttospeech\V1beta1\AudioEncoding::class);
        $this->audio_encoding = $var;

        return $this;
    }

    /**
     * Optional speaking rate/speed, in the range [0.25, 4.0]. 1.0 is the normal
     * native speed supported by the specific voice. 2.0 is twice as fast, and
     * 0.5 is half as fast. If unset(0.0), defaults to the native 1.0 speed. Any
     * other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 2;</code>
     * @return float
     */
    public function getSpeakingRate()
    {
        return $this->speaking_rate;
    }

    /**
     * Optional speaking rate/speed, in the range [0.25, 4.0]. 1.0 is the normal
     * native speed supported by the specific voice. 2.0 is twice as fast, and
     * 0.5 is half as fast. If unset(0.0), defaults to the native 1.0 speed. Any
     * other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setSpeakingRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->speaking_rate = $var;

        return $this;
    }

    /**
     * Optional speaking pitch, in the range [-20.0, 20.0]. 20 means increase 20
     * semitones from the original pitch. -20 means decrease 20 semitones from the
     * original pitch.
     *
     * Generated from protobuf field <code>double pitch = 3;</code>
     * @return float
     */
    public function getPitch()
    {
        return $this->pitch;
    }

    /**
     * Optional speaking pitch, in the range [-20.0, 20.0]. 20 means increase 20
     * semitones from the original pitch. -20 means decrease 20 semitones from the
     * original pitch.
     *
     * Generated from protobuf field <code>double pitch = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPitch($var)
    {
        GPBUtil::checkDouble($var);
        $this->pitch = $var;

        return $this;
    }

    /**
     * Optional volume gain (in dB) of the normal native volume supported by the
     * specific voice, in the range [-96.0, 16.0]. If unset, or set to a value of
     * 0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
     * will play at approximately half the amplitude of the normal native signal
     * amplitude. A value of +6.0 (dB) will play at approximately twice the
     * amplitude of the normal native signal amplitude. Strongly recommend not to
     * exceed +10 (dB) as there's usually no effective increase in loudness for
     * any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 4;</code>
     * @return float
     */
    public function getVolumeGainDb()
    {
        return $this->volume_gain_db;
    }

    /**
     * Optional volume gain (in dB) of the normal native volume supported by the
     * specific voice, in the range [-96.0, 16.0]. If unset, or set to a value of
     * 0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
     * will play at approximately half the amplitude of the normal native signal
     * amplitude. A value of +6.0 (dB) will play at approximately twice the
     * amplitude of the normal native signal amplitude. Strongly recommend not to
     * exceed +10 (dB) as there's usually no effective increase in loudness for
     * any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setVolumeGainDb($var)
    {
        GPBUtil::checkDouble($var);
        $this->volume_gain_db = $var;

        return $this;
    }

    /**
     * The synthesis sample rate (in hertz) for this audio. Optional.  If this is
     * different from the voice's natural sample rate, then the synthesizer will
     * honor this request by converting to the desired sample rate (which might
     * result in worse audio quality), unless the specified sample rate is not
     * supported for the encoding chosen, in which case it will fail the request
     * and return [google.rpc.Code.INVALID_ARGUMENT][].
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 5;</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * The synthesis sample rate (in hertz) for this audio. Optional.  If this is
     * different from the voice's natural sample rate, then the synthesizer will
     * honor this request by converting to the desired sample rate (which might
     * result in worse audio quality), unless the specified sample rate is not
     * supported for the encoding chosen, in which case it will fail the request
     * and return [google.rpc.Code.INVALID_ARGUMENT][].
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

    /**
     * An identifier which selects 'audio effects' profiles that are applied on
     * (post synthesized) text to speech.
     * Effects are applied on top of each other in the order they are given.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectsProfileId()
    {
        return $this->effects_profile_id;
    }

    /**
     * An identifier which selects 'audio effects' profiles that are applied on
     * (post synthesized) text to speech.
     * Effects are applied on top of each other in the order they are given.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectsProfileId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->effects_profile_id = $arr;

        return $this;
    }

}

