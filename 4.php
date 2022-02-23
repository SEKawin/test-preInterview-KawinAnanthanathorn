<?php
function check_balance($string)
{
    $string = str_split($string);
    // var_dump($string);
    $stack = array();

    foreach ($string as $key => $value) {
        // echo $value.'<br>';
        switch ($value) {
            case '(':
                array_push($stack, 0);
                break;
            case ')':
                if (array_pop($stack) !== 0)
                    return false;
                break;
            case '[':
                array_push($stack, 1);
                break;
            case ']':
                if (array_pop($stack) !== 1)
                    return false;
                break;
            default:
                break;
            case '{':
                array_push($stack, 2);
                break;
            case '}':
                if (array_pop($stack) !== 2)
                    return false;
                break;
        }
    }
    return (empty($stack));
}

$braces = array(
    '()' => '', //true
    '([]]' => '', //false
    '([{}])' => '', //true
    '([[{}]]]' => '', //false
    ')' => '', //false
    '(]}])' => '', //false
    '([)]' => '', //false
    '{' => '', //false
);

foreach ($braces as $key => $value) {
    $braces[$key] = (check_balance($key) ? 'TRUE' : 'FALSE');
}

echo "<pre>";
print_r($braces);
echo "</pre>";
