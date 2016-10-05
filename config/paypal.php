<?php
return array(
    // set your paypal credential
    'client_id' => 'AReLL-quPqz4fqY3g5p-x6Cdwy4IHqrZvwtjYmc7OOtvMav-2MsNWAV7kXfP9V6Dbwt4-gd3I_kEVCKR',
    'secret' => 'ECBEu3_yUqHQG5YR2CIf92JGBjBeNBHTzWVDpb-EJsj8fPCs5sdnJ_mL0OmGHfZT8wdxvEAwBQ5AQWU0',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 60,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);