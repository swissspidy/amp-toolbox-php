<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpWebPushWidget extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::WEB_PUSH_WIDGET,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::VISIBILITY,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'blocked',
                    'subscribed',
                    'unsubscribed',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-web-push/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FIXED,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::WEB_PUSH,
        ],
    ];
}
