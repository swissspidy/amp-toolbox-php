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

final class AmpImaVideoTrack extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'amp-ima-video > track';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::TRACK,
        SpecRule::SPEC_NAME => 'amp-ima-video > track',
        SpecRule::MANDATORY_PARENT => Extension::IMA_VIDEO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => '[label]',
            ],
            [
                SpecRule::NAME => '[src]',
            ],
            [
                SpecRule::NAME => '[srclang]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\TrackAttrsNoSubtitles::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
