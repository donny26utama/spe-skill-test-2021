<?php

/**
 * SPE Skill Test class.
 */
class SpeSkillTest
{
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
