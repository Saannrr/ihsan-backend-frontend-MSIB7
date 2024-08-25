<?php
function diagonalSum($matrix)
{
    $n = count($matrix);
    $sum_diagonal_primary = 0;
    $sum_diagonal_sekunder = 0;

    for ($i = 0; $i < $n; $i++) {
        $sum_diagonal_primary += $matrix[$i][$i];
        $sum_diagonal_sekunder += $matrix[$i][$n - $i - 1];
    }

    if ($n % 2 == 1) {
        $sum_diagonal_sekunder -= $matrix[$n / 2][$n / 2];
    }
    return $sum_diagonal_primary + $sum_diagonal_sekunder;
}

echo diagonalSum([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
echo "\n";
echo diagonalSum([[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16]]);
