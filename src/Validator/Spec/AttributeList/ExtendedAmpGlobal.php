<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class ExtendedAmpGlobal extends AttributeList
{
    /**
     * ID of the attribute list.
     *
     * @var string
     */
    const ID = 'extended-amp-global';

    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [
        Attribute::I_AMPHTML_LAYOUT => [
            SpecRule::VALUE_CASEI => [
                'container',
                'fill',
                'fixed',
                'fixed-height',
                'flex-item',
                'fluid',
                'intrinsic',
                'nodisplay',
                'responsive',
            ],
            SpecRule::ENABLED_BY => [
                Attribute::TRANSFORMED,
            ],
        ],
        Attribute::MEDIA => [],
        Attribute::NOLOADING => [
            SpecRule::VALUE => [
                '',
            ],
        ],
    ];
}
