<?php

function foobar(
    string $longVariableName,
    string $anotherLongVariableName,
    string $reallyLongVariableName,
    string $tooLongVariableNameSoThatLineLimitExeeds
): string {
    $foobar = 'asd';
    return $foobar;
}

function fee(
    string $longVariableName
): string | int {
    return 1;
}

function faa(
    string $longVariableName,
    string $anotherLongVariableName,
    string $reallyLongVariableName,
    string $tooLongVariableNameSoThatLineLimitExeeds
): User\A {
    $foobar = 'asd';
    return $foobar;
}