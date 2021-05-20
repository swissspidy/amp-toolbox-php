<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpConsent extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::CONSENT,
        SpecRule::UNIQUE => true,
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES => [
            'amp-consent extension .json script',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::CONSENT,
        ],
        SpecRule::EXCLUDES => [
            'amp-consent [type]',
        ],
    ];
}
