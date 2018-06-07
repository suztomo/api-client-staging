<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/bill_of_materials.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This represents a particular package that is distributed over
 * various channels.
 * e.g. glibc (aka libc6) is distributed by many, at various versions.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.PackageManager.Package</code>
 */
class PackageManager_Package extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the package.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The various channels by which a package is distributed.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.PackageManager.Distribution distribution = 10;</code>
     */
    private $distribution;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\BillOfMaterials::initOnce();
        parent::__construct();
    }

    /**
     * The name of the package.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the package.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The various channels by which a package is distributed.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.PackageManager.Distribution distribution = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * The various channels by which a package is distributed.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.PackageManager.Distribution distribution = 10;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\PackageManager_Distribution[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDistribution($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Containeranalysis\V1alpha1\PackageManager_Distribution::class);
        $this->distribution = $arr;

        return $this;
    }

}

