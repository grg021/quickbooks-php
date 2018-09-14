<?php

/**
 * Schema object for: BillQueryRq
 *
 * @author "Keith Palmer Jr." <Keith@ConsoliByte.com>
 * @license LICENSE.txt
 *
 * @package QuickBooks
 * @subpackage QBXML
 */

/**
 *
 */
require_once 'QuickBooks.php';

/**
 *
 */
require_once 'QuickBooks/QBXML/Schema/Object.php';

/**
 *
 */
class QuickBooks_QBXML_Schema_Object_TimeTrackingQueryRq extends QuickBooks_QBXML_Schema_Object
{
    protected function &_qbxmlWrapper()
    {
        static $wrapper = '';

        return $wrapper;
    }

    protected function &_dataTypePaths()
    {
        static $paths = array (
            'TxnID' => 'IDTYPE',
            'IncludeRetElementList' => 'STRTYPE',
        );

        return $paths;
    }

    protected function &_maxLengthPaths()
    {
        static $paths = array (
            'TxnID' => 0,
            'IncludeRetElementList' => 50,
        );

        return $paths;
    }

    protected function &_isOptionalPaths()
    {
        static $paths = array (
            'TxnID' => false,
            'IncludeRetElementList' => true,
        );
        return $paths;
    }

    protected function &_sinceVersionPaths()
    {
        static $paths = array (
            'TxnID' => 999.99,
            'IncludeRetElementList' => 4,
        );

        return $paths;
    }

    protected function &_isRepeatablePaths()
    {
        static $paths = array (
            'TxnID' => false,
            'IncludeRetElementList' => false,
        );

        return $paths;
    }


    protected function &_reorderPathsPaths()
    {
        static $paths = array (
            0 => 'TxnID',
            1 => 'IncludeRetElementList',
        );

        return $paths;
    }
}

?>