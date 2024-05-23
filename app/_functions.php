<?php
/**
 * Undocumented function
 * Excludes duplicates of an array
 * @param array $array - array of integers or strings
 * @return array - array without duplicates
 */
    function excludeDuplicates(array $array) :array{
        return array_unique($array);
    }
?>