<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class UnknownCode extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'UNKNOWN_CODE';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'Unknown error.',
        SpecRule::SPECIFICITY => 0,
    ];
}
