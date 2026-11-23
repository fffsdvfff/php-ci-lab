<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$grades = [];

for ($i = 0; $i < 10; $i++) {
    $grades[] = $faker->numberBetween(0, 100);
}
$minThreshold = 60;

$filteredGrades = array_filter(
    $grades,
    function (int $grade) use ($minThreshold): bool {
        return $grade >= $minThreshold;
    }
);

echo '<h2>Усі оцінки студентів</h2>';
echo implode(', ', $grades);

echo '<h2>Оцінки від 60 балів</h2>';
echo implode(', ', $filteredGrades);


require_once 'app/Services/EntityService.php';

echo '<h2>Обробка винятків</h2>';

try {
    $price = applyDiscount(1000, 150);
    echo 'Ціна зі знижкою: ' . $price;
} catch (Exception $e) {
    echo 'Помилка: ' . $e->getMessage();
} finally {
    echo '<p>Завершення спроби розрахунку.</p>';
}


require_once 'app/Services/DataProcessor.php';

echo '<h2>Завдання 5. Варіант 16</h2>';

$numbers = [10, 5, 8, 3, 7];
$result1 = findGreaterThanRight($numbers);

echo '<h3>1. Порівняння сусідніх елементів</h3>';
echo 'Початковий масив: ' . implode(', ', $numbers) . '<br>';
echo 'Індекси: ' . implode(', ', $result1['indices']) . '<br>';
echo 'Кількість: ' . $result1['count'];

$text = 'кіт так море дім';
$result2 = findMatchingWords($text);

echo '<h3>2. Пошук слів</h3>';
echo 'Початковий текст: ' . $text . '<br>';
echo 'Знайдені слова: ' . implode(', ', $result2);

$text2 = 'Ми вивчаємо програмування сьогодні';
$result3 = shuffleMiddleWords($text2);

echo '<h3>3. Перемішування символів</h3>';
echo 'Початковий текст: ' . $text2 . '<br>';
echo 'Результат: ' . $result3;
