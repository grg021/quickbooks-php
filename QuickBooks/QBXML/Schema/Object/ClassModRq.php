<?php

/**
 * Schema object for: ClassAddRq
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
class QuickBooks_QBXML_Schema_Object_ClassModRq extends QuickBooks_QBXML_Schema_Object
{
    protected function &_qbxmlWrapper()
    {
        static $wrapper = 'ClassMod';

        return $wrapper;
    }

    protected function &_dataTypePaths()
    {
        static $paths = array (
            'ListID' => 'IDTYPE',
            'EditSequence' => 'STRTYPE',
            'Name' => 'STRTYPE',
            'IsActive' => 'BOOLTYPE',
            'ParentRef ListID' => 'IDTYPE',
            'ParentRef FullName' => 'STRTYPE',
            'IncludeRetElement' => 'STRTYPE',
        );

        return $paths;
    }

    protected function &_maxLengthPaths()
    {
        static $paths = array (
            'ListID' => 0,
            'EditSequence' => 16,
            'Name' => 31,
            'IsActive' => 0,
            'ParentRef ListID' => 0,
            'ParentRef FullName' => 0,
            'IncludeRetElement' => 50,
        );

        return $paths;
    }

    protected function &_isOptionalPaths()
    {
        static $paths = array (
            'ListID' => true,
            'EditSequence' => false,
            'Name' => false,
            'IsActive' => true,
            'ParentRef ListID' => true,
            'ParentRef FullName' => true,
            'IncludeRetElement' => true,
        );
    }

    protected function &_sinceVersionPaths()
    {
        static $paths = array (
            'ListID' => 999.99,
            'EditSequence' => 999.99,
            'Name' => 999.99,
            'IsActive' => 999.99,
            'ParentRef ListID' => 999.99,
            'ParentRef FullName' => 999.99,
            'IncludeRetElement' => 4,
        );

        return $paths;
    }

    protected function &_isRepeatablePaths()
    {
        static $paths = array (
            'ListID' => false,
            'EditSequence' => false,
            'Name' => false,
            'IsActive' => false,
            'ParentRef ListID' => false,
            'ParentRef FullName' => false,
            'IncludeRetElement' => true,
        );

        return $paths;
    }

    protected function &_reorderPathsPaths()
    {
        static $paths = array (
            0 => 'ListID',
            1 => 'EditSequence',
            2 => 'Name',
            3 => 'IsActive',
            4 => 'ParentRef ListID',
            5 => 'ParentRef FullName',
            6 => 'IncludeRetElement',
        );

        return $paths;
    }
}
