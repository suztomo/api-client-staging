<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * k-anonymity metric, used for analysis of reidentification risk.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.PrivacyMetric.KAnonymityConfig</code>
 */
class PrivacyMetric_KAnonymityConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Set of fields to compute k-anonymity over. When multiple fields are
     * specified, they are considered a single composite key. Structs and
     * repeated data types are not supported; however, nested fields are
     * supported so long as they are not structs themselves or nested within
     * a repeated field.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId quasi_ids = 1;</code>
     */
    private $quasi_ids;
    /**
     * Optional message indicating that multiple rows might be associated to a
     * single individual. If the same entity_id is associated to multiple
     * quasi-identifier tuples over distict rows, we consider the entire
     * collection of tuples as the composite quasi-identifier. This collection
     * is a multiset: the order in which the different tuples appear in the
     * dataset is ignored, but their frequency is taken into account.
     * Important note: a maximum of 1000 rows can be associated to a single
     * entity ID. If more rows are associated with the same entity ID, some
     * might be ignored.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.EntityId entity_id = 2;</code>
     */
    private $entity_id = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Set of fields to compute k-anonymity over. When multiple fields are
     * specified, they are considered a single composite key. Structs and
     * repeated data types are not supported; however, nested fields are
     * supported so long as they are not structs themselves or nested within
     * a repeated field.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId quasi_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuasiIds()
    {
        return $this->quasi_ids;
    }

    /**
     * Set of fields to compute k-anonymity over. When multiple fields are
     * specified, they are considered a single composite key. Structs and
     * repeated data types are not supported; however, nested fields are
     * supported so long as they are not structs themselves or nested within
     * a repeated field.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId quasi_ids = 1;</code>
     * @param \Google\Cloud\Dlp\V2\FieldId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuasiIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->quasi_ids = $arr;

        return $this;
    }

    /**
     * Optional message indicating that multiple rows might be associated to a
     * single individual. If the same entity_id is associated to multiple
     * quasi-identifier tuples over distict rows, we consider the entire
     * collection of tuples as the composite quasi-identifier. This collection
     * is a multiset: the order in which the different tuples appear in the
     * dataset is ignored, but their frequency is taken into account.
     * Important note: a maximum of 1000 rows can be associated to a single
     * entity ID. If more rows are associated with the same entity ID, some
     * might be ignored.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.EntityId entity_id = 2;</code>
     * @return \Google\Cloud\Dlp\V2\EntityId
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Optional message indicating that multiple rows might be associated to a
     * single individual. If the same entity_id is associated to multiple
     * quasi-identifier tuples over distict rows, we consider the entire
     * collection of tuples as the composite quasi-identifier. This collection
     * is a multiset: the order in which the different tuples appear in the
     * dataset is ignored, but their frequency is taken into account.
     * Important note: a maximum of 1000 rows can be associated to a single
     * entity ID. If more rows are associated with the same entity ID, some
     * might be ignored.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.EntityId entity_id = 2;</code>
     * @param \Google\Cloud\Dlp\V2\EntityId $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\EntityId::class);
        $this->entity_id = $var;

        return $this;
    }

}

