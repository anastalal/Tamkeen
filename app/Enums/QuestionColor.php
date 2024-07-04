<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class QuestionColor extends Enum
{
    const Green = 'green';
    const Pink = 'pink';
    const Brown = 'brown';
    const Purple = 'purple';
    const Yellow = 'yellow';
    const Blue = 'blue';
}
