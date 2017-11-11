<?php declare(strict_types=1);
/*
 * This file is part of the Transliteration library
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Transliteration;

/**
 * Transliterator Interface.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
interface TransliteratorInterface
{
    /**
     * @param string $textToTransliterate
     *
     * @return string
     */
    public static function transliterate(string $textToTransliterate): string;
}
