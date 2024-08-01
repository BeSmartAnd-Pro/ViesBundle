<?php

declare(strict_types=1);

namespace Sandwich\ViesBundle\Validator\Constraint;

use Attribute;
use Symfony\Component\Validator\Constraint;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class VatNumber extends Constraint
{
    public string $format = 'NL';

    public string $message = 'This is not a valid %format% vat number.';

    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @inheritDoc
     */
    public function validatedBy(): string
    {
        return VatNumberValidator::class;
    }
}
