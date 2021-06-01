<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class AmpEmailMissingStrictCssAttr extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'AMP_EMAIL_MISSING_STRICT_CSS_ATTR';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'Tag \'html\' marked with attribute \'amp4email\' is missing the corresponding attribute \'data-css-strict\' for enabling strict CSS validation. This may become an error in the future.',
    ];
}
