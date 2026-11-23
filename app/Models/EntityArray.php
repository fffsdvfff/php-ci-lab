<?php

$subjects = [
    'Математика',
    'Програмування',
    'Інформатика',
    'Англійська мова',
    'Фізика',
];

sort($subjects);

$assignment = [
    'id' => 1,
    'courseId' => 2,
    'groupId' => 42,
    'typeId' => 1,
    'title' => 'Лабораторна робота №3',
    'description' => 'Основи PHP: структури даних і функції',
    'deadline' => new DateTime('2026-12-01 23:59:00'),
];

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Масиви EduTask</title>
</head>
<body>
    <h2>Список навчальних предметів</h2>
    <ul>
        <?php foreach ($subjects as $subject) { ?>
            <li><?= htmlspecialchars($subject) ?></li>
        <?php } ?>
    </ul>

    <h2>Інформація про навчальне завдання</h2>
    <ul>
        <?php foreach ($assignment as $key => $value) { ?>
            <li>
                <?= htmlspecialchars($key) ?>:
                <?= htmlspecialchars(
                    $value instanceof DateTime
                        ? $value->format('Y-m-d H:i:s')
                        : (string) $value
                ) ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>

