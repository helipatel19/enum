<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

abstract class Loan
{
    final public function __construct($value)
    {
        $this->value = $value;
    }

    // String representation
    final public function __toString() {
        return $this->value;
    }

    final public function toInt()
    {
        return (int) $this->__toString();
    }
}

class UserDetails extends Loan
{
    const INCOME = 100000;
    const EMPLOYMENT = 2;
    const LOAN_AMOUNT = 500000;
}

$a = new UserDetails(UserDetails::INCOME);
$b = new UserDetails(UserDetails::EMPLOYMENT);
$c = new UserDetails(UserDetails::LOAN_AMOUNT);

$income = $a->toInt();
$employment = $b->toInt();
$loanAmount = $c->toInt();

if($income >= 50000 && $employment >=2 && $loanAmount <=1000000){

    echo "You are eligible for loan.!";
}
else{
    echo "Sorry ..! you are not eligible for loan.";
}
