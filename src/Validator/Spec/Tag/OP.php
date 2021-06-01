<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class OP extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'O:P';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::O_P,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
