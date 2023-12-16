<?php 

    // Access Modifier

    // ---Public
    // ---Private
    // ---Protected




    class BankAccount
    {

        public $accountHolder;
        public $accountNumber;
        private $pincode;
        private $amount;

        public function __construct($accHolder,$accNumber,$pincode,$amount)
        {
            $this->accountHolder = $accHolder;
            $this->accountNumber = $accNumber;
            $this->pincode = $pincode;
            $this->amount = $amount;
        }


        public function deposit($depositAmount)
        {
            $this->amount += $depositAmount;
        }



        
    }


    $asfarAccount = new BankAccount('Asfar Ahmed',3482734782739,2134,120000);

    print_r($asfarAccount);

echo "<hr>";
    echo $asfarAccount->accountHolder;


    $asfarAccount->deposit(30000);
    echo "<hr>";

    print_r($asfarAccount);






?>