<?php

/*
|--------------------------------------------------------------------------
| Test Settings for Codeception
|--------------------------------------------------------------------------
|
| All of the settings in this Configuration file are intentionally broken.
|
| When Webception is run in Test Mode, we load this config to ensure all the
| error trapping works as expected.
|
*/

return array(

    /**
     * Add param --debug to Codeception on execute
     * @link http://codeception.com/docs/reference/Commands#Run
     */
    'debug'  => false,

    /**
     * Use colors in Webception Console Results
     */
    'colors' => false,

    'sites' => array(),
    'location' => __FILE__

);
