<?php

/*
|--------------------------------------------------------------------------
| Test Settings for Codeception
|--------------------------------------------------------------------------
|
| All of the settings in this Configuration file are set to work.
|
| When Webception is run in Test Mode, we load this config to ensure
| everything works as expected.
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

    /*
    |--------------------------------------------------------------------------
    | Path of the Codeception.yml
    |--------------------------------------------------------------------------
    */

    'sites' => array(

        'Webception'          => dirname(__FILE__) .'/codeception_pass.yml',
        'Another Webception'  => dirname(__FILE__) .'/codeception_pass.yml',

    ),

    /*
    |--------------------------------------------------------------------------
    | Dummy Codeception executable (that I use in testing)
    |--------------------------------------------------------------------------
    */

    'executable' => dirname(__FILE__) .'/../../../vendor/bin/codecept',

    /*
    |--------------------------------------------------------------------------
    | You get to decide which type of tests get included.
    |--------------------------------------------------------------------------
    */

    'tests' => array(
        'acceptance' => TRUE,
        'functional' => TRUE,
        'unit'       => TRUE,
    ),

    /*
    |--------------------------------------------------------------------------
    | When we scan for the tests, we need to ignore the following files.
    |--------------------------------------------------------------------------
    */

    'ignore' => array(
        'AcceptanceTester.php',
        'FunctionalTester.php',
        'UnitTester.php',
        '_bootstrap.php',
    ),

    'location'   => __FILE__,
);
