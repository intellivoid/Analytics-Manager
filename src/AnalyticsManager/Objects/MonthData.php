<?php

    namespace AnalyticsManager\Objects;

    /**
     * Class MonthData
     * @package AnalyticsManager\Objects
     */
    class MonthData
    {
        /**
         * Indicates if this object is available or not
         *
         * @var bool
         */
        public $available;

        /**
         * The date of the month
         *
         * @var int
         */
        public $month_date;

        /**
         * The usage data for this object
         *
         * @var array
         */
        public $data;

        /**
         * MonthData constructor.
         */
        public function __construct()
        {
            $this->available = false;
            $this->month_date = null;
            $this->data = array();
        }

        /**
         * Returns the object as an array
         *
         * @return array
         */
        public function toArray(): array
        {
            return array(
                'available' => $this->available,
                'month_date' => $this->month_date,
                'data' => $this->data
            );
        }

        /**
         * Creates object from array
         *
         * @param array $data
         * @return MonthData
         */
        public static function fromArray(array $data): MonthData
        {
            $MonthDataObject = new MonthData();

            if(isset($data['available']) == true)
            {
                $MonthDataObject->available = (bool)$data['available'];
            }

            if(isset($data['month_date']) == true)
            {
                $MonthDataObject->month_date = (int)$data['month_date'];
            }

            if(isset($data['data']) == true)
            {
                $MonthDataObject->data = $data['data'];
            }

            return $MonthDataObject;
        }
    }