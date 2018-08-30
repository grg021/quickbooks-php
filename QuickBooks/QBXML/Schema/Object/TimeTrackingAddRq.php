<?php

require_once 'QuickBooks.php';

require_once 'QuickBooks/QBXML/Schema/Object.php';

class QuickBooks_QBXML_Schema_Object_TimeTrackingAddRq extends QuickBooks_QBXML_Schema_Object
{

    protected function &_qbxmlWrapper()
    {
        static $wrapper = 'TimeTrackingAdd';

        return $wrapper;
    }

    protected function &_dataTypePaths()
    {
        static $paths = array (
            'defMacro' => 'STRTYPE',
            'TxnDate' => 'DATETYPE',
            'EntityRef ListID' => 'IDTYPE',
            'EntityRef FullName' => 'STRTYPE',
            'CustomerRef ListID' => 'IDTYPE',
            'CustomerRef FullName' => 'STRTYPE',
            'ItemServiceRef ListID' => 'IDTYPE',
            'ItemServiceRef FullName' => 'STRTYPE',
            'Duration' => 'TIMEINTERVALTYPE',
            'ClassRef ListID' => 'IDTYPE',
            'ClassRef FullName' => 'STRTYPE',
            'PayrollItemWageRef ListID' => 'IDTYPE',
            'PayrollItemWageRef FullName' => 'STRTYPE',
            'Notes' => 'STRTYPE',
            'BillableStatus' => 'ENUMTYPE',
            'isBillable' => 'BOOLTYPE',
            'ExternalGUID' => 'IDTYPE',
            'IncludeRetElementList' => 'ENUMTYPE',
        );
        return $paths;
    }

    protected function &_maxLengthPaths()
    {
        static $paths = array (
            'defMacro' => 0,
            'TxnDate' => 0,
            'EntityRef ListID' => 0,
            'EntityRef FullName' => 209,
            'CustomerRef ListID' => 0,
            'CustomerRef FullName' => 209,
            'ItemServiceRef ListID' => 0,
            'ItemServiceRef FullName' => 159,
            'Duration' => 0,
            'ClassRef ListID' => 0,
            'ClassRef FullName' => 159,
            'PayrollItemWageRef ListID' => 0,
            'PayrollItemWageRef FullName' => 31,
            'Notes' => 4095,
            'BillableStatus' => 0,
            'isBillable' => 0,
            'ExternalGUID' => 0,
            'IncludeRetElementList' => 50,
        );
        return $paths;
    }

    protected function &_isOptionalPaths()
    {
        static $paths = array (
            'defMacro' => true,
            'TxnDate' => true,
            'EntityRef ListID' => false,
            'EntityRef FullName' => false,
            'CustomerRef ListID' => true,
            'CustomerRef FullName' => true,
            'ItemServiceRef ListID' => true,
            'ItemServiceRef FullName' => true,
            'Duration' => false,
            'ClassRef ListID' => true,
            'ClassRef FullName' => true,
            'PayrollItemWageRef ListID' => true,
            'PayrollItemWageRef FullName' => true,
            'Notes' => true,
            'BillableStatus' => true,
            'isBillable' => true,
            'ExternalGUID' => true,
            'IncludeRetElementList' => true,
        );
        return $paths;
    }

    protected function &_sinceVersionPaths()
    {
        static $paths = array (
            'defMacro' => 2.0,
            'TxnDate' => 999.99,
            'EntityRef ListID' => 999.99,
            'EntityRef FullName' => 999.99,
            'CustomerRef ListID' => 999.99,
            'CustomerRef FullName' => 999.99,
            'ItemServiceRef ListID' => 999.99,
            'ItemServiceRef FullName' => 999.99,
            'Duration' => 999.99,
            'ClassRef ListID' => 999.99,
            'ClassRef FullName' => 999.99,
            'PayrollItemWageRef ListID' => 999.99,
            'PayrollItemWageRef FullName' => 999.99,
            'Notes' => 999.99,
            'BillableStatus' => 6.0,
            'isBillable' => 999.99,
            'ExternalGUID' => 9.0,
            'IncludeRetElementList' => 4.0,
        );
        return $paths;
    }

    protected function &_isRepeatablePaths()
    {
        static $paths = array (
            'defMacro' => false,
            'TxnDate' => false,
            'EntityRef ListID' => false,
            'EntityRef FullName' => false,
            'CustomerRef ListID' => false,
            'CustomerRef FullName' => false,
            'ItemServiceRef ListID' => false,
            'ItemServiceRef FullName' => false,
            'Duration' => false,
            'ClassRef ListID' => false,
            'ClassRef FullName' => false,
            'PayrollItemWageRef ListID' => false,
            'PayrollItemWageRef FullName' => false,
            'Notes' => false,
            'BillableStatus' => false,
            'isBillable' => false,
            'ExternalGUID' => false,
            'IncludeRetElementList' => false,
        );
        return $paths;
    }

    /**
     * Return a list of paths in a specific schema order
     *
     * @return array
     */
    protected function &_reorderPathsPaths()
    {
        static $paths = array (
            'defMacro',
            'TxnDate',
            'EntityRef ListID',
            'EntityRef FullName',
            'CustomerRef ListID',
            'CustomerRef FullName',
            'ItemServiceRef ListID',
            'ItemServiceRef FullName',
            'Duration',
            'ClassRef ListID',
            'ClassRef FullName',
            'PayrollItemWageRef ListID',
            'PayrollItemWageRef FullName',
            'Notes',
            'BillableStatus',
            'isBillable',
            'ExternalGUID',
            'IncludeRetElementList'
        );
        return $paths;
    }
}