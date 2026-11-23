<?php

declare(strict_types=1);

function findGreaterThanRight(array $numbers): array
{
    $indices = [];

    for ($i = 0; $i < count($numbers) - 1; $i++) {
        if ($numbers[$i] > $numbers[$i + 1]) {
            $indices[] = $i;
        }
    }

    return [
        'indices' => $indices,
        'count' => count($indices),
    ];
}

function findMatchingWords(string $text): array
{
    $words = preg_split('/\s+/u', trim($text), -1, PREG_SPLIT_NO_EMPTY);
    $result = [];

    for ($i = 0; $i < count($words) - 1; $i++) {
        $firstLetters = preg_split('//u', $words[$i], -1, PREG_SPLIT_NO_EMPTY);
        $nextLetters = preg_split('//u', $words[$i + 1], -1, PREG_SPLIT_NO_EMPTY);

        $first = $firstLetters[0];
        $last = $nextLetters[count($nextLetters) - 1];

        if (preg_match('/^'.preg_quote($first, '/').'$/iu', $last)) {
            $result[] = $words[$i];
        }
    }

    return $result;
}

function shuffleMiddleWords(string $text): string
{
    $words = preg_split('/\s+/u', trim($text), -1, PREG_SPLIT_NO_EMPTY);

    for ($i = 1; $i < count($words) - 1; $i++) {
        $letters = preg_split('//u', $words[$i], -1, PREG_SPLIT_NO_EMPTY);
        shuffle($letters);
        $words[$i] = implode('', $letters);
    }

    return implode(' ', $words);
}
