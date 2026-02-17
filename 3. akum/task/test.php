<?php

require_once "soal.php";

function runAccumTests() {
    $testCases = [
        ["input" => "abcd",    "expected" => "A-Bb-Ccc-Dddd"],
        ["input" => "RqaEzty", "expected" => "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"],
        ["input" => "cwAt",    "expected" => "C-Ww-Aaa-Tttt"],
        ["input" => "ZpglnRx", "expected" => "Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx"],
        ["input" => "NyffLS",  "expected" => "N-Yy-Fff-Ffff-Lllll-Ssssss"],
        ["input" => "MjtkuB",  "expected" => "M-Jj-Ttt-Kkkk-Uuuuu-Bbbbbb"],
        ["input" => "EvidjT",  "expected" => "E-Vv-Iii-Dddd-Jjjjj-Tttttt"],
        ["input" => "HbideV",  "expected" => "H-Bb-Iii-Dddd-Eeeee-Vvvvvv"],
        ["input" => "Vv",      "expected" => "V-Vv"],
        ["input" => "A",       "expected" => "A"]
    ];

    echo "--- Menjalankan Unit Test Accum ---\n";
    $success = 0;

    foreach ($testCases as $index => $case) {
        $result = akum($case['input']);
        if ($result === $case['expected']) {
            echo "✅ Test " . ($index + 1) . " LULUS\n";
            $success++;
        } else {
            echo "❌ Test " . ($index + 1) . " GAGAL | Input: '{$case['input']}'\n";
            echo "   Ekspektasi: {$case['expected']}\n";
            echo "   Hasil     : $result\n";
        }
    }

    echo "-----------------------------------\n";
    echo "Total Berhasil: $success dari 10\n";
}

runAccumTests();    