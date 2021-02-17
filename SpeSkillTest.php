<?php

/**
 * SPE Skill Test class.
 */
class SpeSkillTest
{
    /**
     * A narcissistic number is a number which return the sum of its own digits, each raised to the
     * power of the number of digits in a given base. (Assume there won’t be any decimal)
     *
     * Challenge:
     * Create a function which return true or false depending on given number in the parameter is
     * Narcissistic or not.
     *
     * @param integer $input
     * @return bool
     */
    public static function narcissisticNumber(int $input)
    {
        $narcissistic = 0;
        $powNumber = strlen($input);
        $numbers = str_split($input);

        foreach ($numbers as $number) {
            $narcissistic += pow($number, $powNumber);
        }

        return $narcissistic === $input;
    }

    /**
     * Given an array of integers (minimum length of 3), the array is either entirely contains whole of
     * odd integers with 1 outlier even integer or whole of even integers with 1 outiler odd integer.
     *
     * Challenge
     * Write a method that takes an array as an argument and returns the outlier.
     *
     * @param array $input
     * @return string
     */
    public static function parityOutlier(array $input)
    {
        $odds = [];
        $evens = [];

        foreach ($input as $number) {
            if (($number % 2) === 0) {
                $evens[] = $number;
            } else {
                $odds[] = $number;
            }
        }

        $oddCount = count($odds);
        $evenCount = count($evens);

        if ($oddCount === 0 || $evenCount === 0) {
            $resultNumber = 'false';
            $type = $oddCount === 0 ? 'odd' : 'even';
            $message = "all $type integer, no outliner";
        } else {
            if ($oddCount < $evenCount) {
                $type = 'odd';
                $resultNumber = $odds[0];
            } else {
                $type = 'even';
                $resultNumber = $evens[0];
            }
            $message = "the only $type number";
        }

        return sprintf('%s (%s)', $resultNumber, $message);
    }

    /**
     * Write a function which takes 2 arguments the first one takes an array of string (as a haystack)
     * and the second one is single string (as the needle). This function should return the index of
     * needle’s position.
     *
     * Challenge
     * Using array_search() function in PHP is prohibited
     *
     * @param array $haystack
     * @param mixed $needle
     * @return integer
     */
    public static function needleInAHaystack(array $haystack, $needle)
    {
        $keyIndex = 0;
        foreach ($haystack as $key => $value) {
            if ($value === $needle) {
                $keyIndex = $key;
                break;
            }
        }

        return $keyIndex;
    }

    /**
     * Blue Ocean Strategy is very famous in marketing strategy, it try the business to differ from
     * other competitor with new product / business model. In this case we’ll try the reverse of it!
     *
     * Challenge
     * Create a function which takes 2 arguments and both should be array of integers. This function
     * should substracts one list to another and returns the result. It should remove all values from
     * the first list which are present in the second list.
     *
     * @param array $oceans
     * @param array $wave
     * @return array
     */
    public static function theBlueOceanReverse(array $oceans, array $wave)
    {
        $blueSea = [];
        foreach ($oceans as $ocean) {
            if (!in_array($ocean, $wave)) {
                $blueSea[] = $ocean;
            }
        }

        return $blueSea;
    }
}
