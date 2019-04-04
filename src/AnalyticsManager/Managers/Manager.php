<?php

    namespace AnalyticsManager\Managers;


    use AnalyticsManager\AnalyticsManager;

    class Manager
    {
        /**
         * @var AnalyticsManager
         */
        private $analyticsManager;

        /**
         * Manager constructor.
         * @param AnalyticsManager $analyticsManager
         */
        public function __construct(AnalyticsManager $analyticsManager)
        {
            $this->analyticsManager = $analyticsManager;
        }
    }