<?php

QuickBooks_Loader::load('/QuickBooks/QBXML/Object.php');

class QuickBooks_QBXML_Object_TimeTracking extends QuickBooks_QBXML_Object
{

    public function __construct($arr = array())
    {
        parent::__construct($arr);
    }

    public function setTxnDate($date)
    {
        return $this->setDateType('TxnDate', $date);
    }

    public function setEntityRefListID($ListID)
    {
        return $this->set('EntityRef ListID', $ListID);
    }

    public function getEntityRefListID()
    {
        return $this->get('EntityRef ListID');
    }

    public function setEntityRefFullName($Name)
    {
        return $this->set('EntityRef FullName', $Name);
    }

    public function getEntityRefFullName()
    {
        return $this->get('EntityRef FullName');
    }

    public function setCustomerListID($ListID)
    {
        return $this->set('CustomerRef ListID' , $ListID);
    }

    public function getCustomerListID()
    {
        return $this->get('CustomerRef ListID');
    }

    public function setCustomerFullName($name)
    {
        return $this->set('CustomerRef FullName', $name);
    }

    public function getCustomerFullName()
    {
        return $this->get('CustomerRef FullName');
    }

    public function setItemServiceListID($ListID)
    {
        return $this->set('ItemServiceRef ListID', $ListID);
    }

    public function getItemServiceListID()
    {
        return $this->get('ItemServiceRef ListID');
    }

    public function setItemServiceFullName($name)
    {
        return $this->set('ItemServiceRef FullName', $name);
    }

    public function getItemServiceFullName()
    {
        return $this->get('ItemServiceRef FullName');
    }

    public function setDuration($duration)
    {
        return $this->set('Duration', $duration);
    }

    public function getDuration()
    {
        return $this->get('Duration');
    }

    public function setClassListID($ListID)
    {
        return $this->set('ClassRef ListID', $ListID);
    }

    public function getClassListID()
    {
        return $this->get('ClassRef ListID');
    }

    public function setClassFullName($name)
    {
        return $this->set('ClassRef FullName', $name);
    }

    public function getClassFullName()
    {
        return $this->get('ClassRef FullName');
    }

    public function setBillable($billable)
    {
        return $this->set('IsBillable', $billable);
    }

    public function getBillable()
    {
        return $this->get('IsBillable');
    }

    public function setPayrollItemFullName($name)
    {
        return $this->set('PayrollItemWageRef FullName', $name);
    }

    public function getPayrollItemFullName()
    {
        return $this->get('PayrollItemWageRef FullName');
    }

    public function setPayrollItemListID($ListID)
    {
        return $this->set('PayrollItemWageRef ListID', $ListID);
    }

    public function getPayrollItemListID()
    {
        return $this->get('PayrollItemWageRef ListID');
    }

    /**
     * Return a constant indicating the type of object
     *
     * @return string
     */
    public function object()
    {
        return QUICKBOOKS_OBJECT_TIMETRACKING;
    }
}