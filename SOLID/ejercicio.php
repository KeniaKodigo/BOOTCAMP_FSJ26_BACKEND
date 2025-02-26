<?php 
//Open closed / inversion de dependencia
//clase DiscountCalculator en vez de solo llamar las otras clases
// Step 1: The Discount interface

interface Discount {
    public function apply($price); // This method will be implemented by all discount classes
}
//clases concretas o productos
// Step 2: The RegularDiscount class implements the Discount interface
class RegularDiscount implements Discount {
    public function apply($price) {
        return $price * 0.9; // 10% off
    }
}
// Step 3: The VIPDiscount class implements the Discount interface
class VIPDiscount implements Discount {
    public function apply($price) {
        return $price * 0.8; // 20% off
    }
}

class MomDiscount implements Discount{
    public function apply($price) {
        return $price * 0.50; // 50% off
    }
}
// // Step 4: The DiscountCalculator class
class DiscountCalculator {
    //objeto de tipo Discount
    public function calculate(Discount $discount, $price) {
        return $discount->apply($price); // Calls the apply method of the passed discount type
    }
}
// Step 5: Usage example
$calculator = new DiscountCalculator();
// Apply RegularDiscount (10% off)
echo $calculator->calculate(new RegularDiscount(), 100); // Output: 90
// Apply VIPDiscount (20% off)
echo $calculator->calculate(new VIPDiscount(), 100); // Output: 80
