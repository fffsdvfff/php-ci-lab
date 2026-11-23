<?php

declare(strict_types=1);

function updateGrade(int $score, string $comment): bool
{
    return $score >= 0 && $score <= 100 && trim($comment) !== '';
}


function applyDiscount(float $price, float $discount): float
{
    if ($discount < 0 || $discount > 100) {
        throw new Exception("Неприпустиме значення знижки!");
    }

    return $price - ($price * $discount / 100);
}



