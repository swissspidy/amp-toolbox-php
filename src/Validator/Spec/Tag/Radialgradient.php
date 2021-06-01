<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Radialgradient extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'RADIALGRADIENT';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::RADIALGRADIENT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CX,
            ],
            [
                SpecRule::NAME => Attribute::CY,
            ],
            [
                SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::FR,
            ],
            [
                SpecRule::NAME => Attribute::FX,
            ],
            [
                SpecRule::NAME => Attribute::FY,
            ],
            [
                SpecRule::NAME => Attribute::GRADIENTTRANSFORM,
            ],
            [
                SpecRule::NAME => Attribute::GRADIENTUNITS,
            ],
            [
                SpecRule::NAME => Attribute::R,
            ],
            [
                SpecRule::NAME => Attribute::SPREADMETHOD,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\SvgCoreAttributes::ID,
            AttributeList\SvgPresentationAttributes::ID,
            AttributeList\SvgStyleAttr::ID,
            AttributeList\SvgXlinkAttributes::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
