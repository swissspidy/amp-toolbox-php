<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class DeprecatedAttr extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'DEPRECATED_ATTR';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is deprecated - use \'%3\' instead.',
        SpecRule::SPECIFICITY => 104,
    ];
}
