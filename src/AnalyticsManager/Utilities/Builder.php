<?php

    namespace AnalyticsManager\Utilities;

    /**
     * Class Builder
     * @package AnalyticsManager\Utilities
     */
    class Builder
    {
        /**
         * Builds an array of months
         *
         * @param int $month
         * @param int $year
         * @return array
         */
        public static function BuildMonth(int $month, int $year): array
        {
            $days = $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
            $results_array = array();

            while(true)
            {
                if(count($results_array) == $days)
                {
                    break;
                }

                $results_array[count($results_array)] = 0;
            }

            return $results_array;
        }
    }