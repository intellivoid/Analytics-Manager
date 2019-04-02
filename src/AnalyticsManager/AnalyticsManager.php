<?php

    namespace AnalyticsManager;

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'MonthData.php');

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