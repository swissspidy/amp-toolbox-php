<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\ExtensionSpec;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;
use AmpProject\Validator\Spec\TagWithExtensionSpec;

final class ScriptAmpSelector extends Tag implements TagWithExtensionSpec
{
    use ExtensionSpec;

    const EXTENSION_SPEC = [
        SpecRule::NAME => 'amp-selector',
        SpecRule::VERSION => [
            '1.0',
        ],
        SpecRule::VERSION_NAME => 'v1.0',
    ];

    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTR_LISTS => [
            AttributeList\CommonExtensionAttrs::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-selector 1.0',
        ],
        SpecRule::EXTENSION_SPEC => self::EXTENSION_SPEC,
        SpecRule::EXCLUDES => [
            'amp-selector 0.1',
        ],
    ];
}
