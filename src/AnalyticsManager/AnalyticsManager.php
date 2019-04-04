<?php

    namespace AnalyticsManager;


    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Abstracts' . DIRECTORY_SEPARATOR . 'ExceptionCodes.php');

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Exceptions' . DIRECTORY_SEPARATOR . 'InvalidDayException.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Exceptions' . DIRECTORY_SEPARATOR . 'InvalidHourException.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Exceptions' . DIRECTORY_SEPARATOR . 'ObjectNotAvailableException.php');

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Managers' . DIRECTORY_SEPARATOR . 'Manager.php');

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'DayData.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'MonthData.php');

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Utilities' . DIRECTORY_SEPARATOR . 'Builder.php');


    /**
     * Class AnalyticsManager
     * @package AnalyticsManager
     */
    class AnalyticsManager
    {
        /**
         * @var array|bool
         */
        private $configuration;

        /**
         * @var \mysqli
         */
        private $database;

        /**
         * AnalyticsManager constructor.
         * @param string $database_name
         */
        public function __construct(string $database_name)
        {
            $this->configuration = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . 'configuration.ini');

            $this->database = new \mysqli(
                $this->configuration['DatabaseHost'],
                $this->configuration['DatabaseUsername'],
                $this->configuration['DatabasePassword'],
                $database_name,
                $this->configuration['DatabasePort']
            );
        }

        /**
         * @return array|bool
         */
        public function getConfiguration()
        {
            return $this->configuration;
        }

        /**
         * @return \mysqli
         */
        public function getDatabase(): \mysqli
        {
            return $this->database;
        }

    }