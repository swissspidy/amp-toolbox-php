<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class H5AmpNestedMenu extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::H5,
        SpecRule::SPEC_NAME => 'h5 amp-nested-menu',
        SpecRule::ATTR_LISTS => [
            AttributeList\AmpNestedMenuActions::ID,
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
