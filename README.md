# PHP enum

An enumeration (or enum) is a datatype that is used to assign names to integral constants, 
 the names make a program easy to read and maintain.we can implement enum datatype by extending abstract classes. Enums can be used instead of hard coded strings to represent, for example, the status of a blog post in a structured and typed way.
 
 Until today PHP does not have a native enum type. It offers a very basic  implementation using SPL extension. There is a popular package written by Matthieu Napoli called myclabs/php-enum.

Let's understand enum using the example:

##### Example-1:

In this example we have encapsulated constants and used them into ProductDetails class.

    // Encapsulating constants 

    abstract class Product{
    
        const product_name = "smart phone";
        const product_price = 10000;
        const colors = array('black','gray','blue');
    
    }

    class ProductDetails extends Product{

        function getProductName(){
            echo "Product: ".Product::product_name."\n\n";
        }
    
        function getProductPrice(){
            echo "Product price :".Product::product_price."\n\n";
        }
    
        function getProductColors(){
        
            echo "available colors:";
            foreach (Product::colors as $color){
                echo $color.", ";
            }
        }
    }
 
   
##### Example-2.

Now, consider this example to check loan eligibility for better understanding of enum.

    // Enumeration constructor 
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
        
        // string to integer conversion
         final public function toInt()
         {
             return (int) $this->__toString();
         }
     }
        
    // Encapsulating enumerated constants 
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
     
     // if an user meets certain criteria then user is eligible for loan..!
     if($income >= 50000 && $employment >=2 && $loanAmount <=1000000){
     
         echo "You are eligible for loan.!";
     }
     else{
         echo "Sorry ..! you are not eligible for loan.";
     }


