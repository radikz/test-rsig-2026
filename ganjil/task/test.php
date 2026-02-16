<?php
require 'soal.php';

function runTests() {
    $testCases = [
        ["input" => [7], "expected" => 7],
        ["input" => [0], "expected" => 0],
        ["input" => [1, 1, 2], "expected" => 2],
        ["input" => [0, 1, 0, 1, 0], "expected" => 0],
        ["input" => [1, 2, 2, 3, 3, 3, 4, 3, 3, 3, 2, 2, 1], "expected" => 4],
        ["input" => [20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5], "expected" => 5],
        ["input" => [1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1], "expected" => 10],
        ["input" => [5, 4, 3, 2, 1, 5, 4, 3, 2, 10, 10], "expected" => 1],
        ["input" => [10, 10, 10], "expected" => 10],
        ["input" => [1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5], "expected" => -1]
    ];

    foreach ($testCases as $index => $case) {
        $result = findOdd($case['input']);
        $status = ($result === $case['expected']) ? "✅ LULUS" : "❌ GAGAL";
    
        
        echo "Test " . ($index + 1) . ": " . $status . " (Hasil: " . $result . ")\n";
    }

}
runTests();