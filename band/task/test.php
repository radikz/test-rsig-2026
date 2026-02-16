<?php

require 'soal-band.php';

function runTests() {
    $testCases = [
        "paus" => "Sebuah paus",
        "alaska"  => "Alaskalaska",
        "tart"    => "Tartart",
        "kucing"  => "Sebuah kucing",
        "europe"  => "Europurope"
    ];

    $passed = 0;

    foreach ($testCases as $input => $expected) {
        $result = generateBandName($input);
        if ($result === $expected) {
            echo "✅ PASSED: '$input' -> '$result'\n";
            $passed++;
        } else {
            echo "❌ FAILED: '$input' | Ekspektasi: '$expected', Hasil: '$result'\n";
        }
    }
}

runTests();