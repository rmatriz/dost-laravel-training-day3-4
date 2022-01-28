<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        Product::create(
            [
                'id' => 1, 
                'category_id' => 1, 
                'name' => 'Paper', 
                'description' => 'A piece or sheet of paper with something written or drawn on it.', 
                'quantity' => 50, 
                'price' => 25.0
        ]);
        Product::create(
            [
                'id' => 2, 
                'category_id' => 1, 
                'name' => 'Ballpen', 
                'description' => 'A ballpoint pen, also known as a biro, ball pen, or dot pen is a pen that dispenses ink over a metal ball at its point', 
                'quantity' => 100, 
                'price' => 10.0
        ]);
        Product::create(
            [
                'id' => 3, 
                'category_id' => 1, 
                'name' => 'Pencil', 
                'description' => 'An instrument for writing or drawing, consisting of a thin stick of graphite or a similar substance enclosed in a long thin piece of wood or fixed in a metal or plastic case..', 
                'quantity' => 200, 
                'price' => 7.0
        ]);
        Product::create(
            ['id' => 4, 
            'category_id' => 1, 
            'name' => 'Correction Tape', 
            'description' => 'An alternative to correction fluid used to correct mistakes during typing, or, in some forms, handwriting', 
            'quantity' => 50, 
            'price' => 13.0
        ]);
        Product::create(
            [
                'id' => 5, 
                'category_id' => 1, 
                'name' => 'Binder', 
                'description' => 'A cover for holding loose sheets of paper, magazines, etc., together.', 
                'quantity' => 50, 
                'price' => 30.0
        ]);
        Product::create(
            [
                'id' => 6, 
                'category_id' => 1, 
                'name' => 'Staple', 
                'description' => 'A piece of thin wire with a long center portion and two short end pieces that are driven by a stapler through sheets of paper to fasten them together.', 
                'quantity' => 50, 
                'price' => 45.0
            ]);
        Product::create(
            [
                'id' => 7, 
                'category_id' => 1, 
                'name' => 'Sticky Note', 
                'description' => 'A slip of notepaper having an adhesive strip on the back that allows attachment to and removal from a surface', 
                'quantity' => 50, 
                'price' => 25.0
            ]);
        Product::create(
            [
                'id' => 8, 
                'category_id' => 1, 
                'name' => 'Bond Paper', 
                'description' => 'High-quality writing paper.', 
                'quantity' => 50, 
                'price' => 150.0
            ]);
        Product::create(
            [
                'id' => 9, 
                'category_id' => 1, 
                'name' => 'Folder', 
                'description' => 'A folded leaflet or a booklet made of folded sheets of paper.', 
                'quantity' => 50, 
                'price' => 9.0
            ]);
        Product::create(
            [
                'id' => 10, 
                'category_id' => 1, 
                'name' => 'Envelope', 
                'description' => 'A flat paper container with a sealable flap, used to enclose a letter or document', 
                'quantity' => 50, 
                'price' => 10.0
            ]);

        Product::create(
            [
                'id' => 11, 
                'category_id' => 2, 
                'name' => 'iPhone 13', 
                'description' => 'Most advanced dual-camera system mobile phone', 
                'quantity' => 10, 
                'price' => 100000.0
            ]);

            [
                'id' => 12, 
                'category_id' => 2, 
                'name' => 'iPhone 13 Pro', 
                'description' => 'Huge camera upgrades', 
                'quantity' => 20, 
                'price' => 50000.0
            ]);
            [
                'id' => 13, 
                'category_id' => 2, 
                'name' => 'Samsung Galaxy Z', 
                'description' => "The world's first water resistant foldable smartphone", 
                'quantity' => 20, 
                'price' => 87000.0
            ]);
            [
                'id' => 14, 
                'category_id' => 2, 
                'name' => 'Samsung Galaxy S', 
                'description' => 'The highest resolution possible in a smartphone', 
                'quantity' => 20, 
                'price' => 69000.0
            ]);
            [
                'id' => 15, 
                'category_id' => 2, 
                'name' => 'Samsung Galaxy Note20 5G', 
                'description' => 'Powered by AI, Auto Straighten feature on Samsung Notes aligns handwriting neatly', 
                'quantity' => 60, 
                'price' => 53000.0
            ]);
            [
                'id' => 16, 
                'category_id' => 2, 
                'name' => 'Samsung Galaxy Book', 
                'description' => 'Support multiple angle viewing modes to boost typing capabilities and make everything from drawing and sketching to note taking and marking documents easier wit S pen', 
                'quantity' => 10, 
                'price' => 53000.0
            ]);
            [
                'id' => 17, 
                'category_id' => 2, 
                'name' => 'Keyboard', 
                'description' => 'Wireless keyboard that can improve your coding skills', 
                'quantity' => 20, 
                'price' => 5000.0
            ]);
            [
                'id' => 18, 
                'category_id' => 2, 
                'name' => 'Mouse', 
                'description' => 'Wireless mouse that can improve your searching skills', 
                'quantity' => 20, 
                'price' => 3000.0
            ]);
            [
                'id' => 19, 
                'category_id' => 2, 
                'name' => 'Printer', 
                'description' => 'A device that accepts text and graphic output from a computer and transfers the information to paper', 
                'quantity' => 15, 
                'price' => 50000.0
            ]);
            [
                'id' => 20, 
                'category_id' => 2, 
                'name' => 'Sacanner', 
                'description' => 'Computer input device that uses a light beam to scan codes, text, or graphic images directly into a computer', 
                'quantity' => 15, 
                'price' => 35000.0
            ]);

        Product::create(
            [
                'id' => 21, 
                'category_id' => 3, 
                'name' => 'Coke', 
                'description' => 'Is a carbonated soft drink', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 22, 
                'category_id' => 3, 
                'name' => 'Sprite', 
                'description' => 'Is a carbonated soft drink', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 23, 
                'category_id' => 3, 
                'name' => 'Royal', 
                'description' => 'Is a carbonated soft drink', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 24, 
                'category_id' => 3, 
                'name' => 'Watermelon & Dry Fruit Punch', 
                'description' => 'Watermelon juice', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 25, 
                'category_id' => 3, 
                'name' => 'Ginger Litchi Lemonade', 
                'description' => 'A refreshing summer cooler made with lime, lychee juice and gingery kick. Perfect to quench the summer heat', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 26, 
                'category_id' => 3, 
                'name' => 'Anjeer Milk', 
                'description' => 'Anjeer doodh (or anjeer milkshake) can be considered one of the most delicious ones in the lot. Besides, anjeer doodh also makes a warm and super healthy drink for chilly winter nights', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 27, 
                'category_id' => 3, 
                'name' => 'Nutriboost Smoothie', 
                'description' => 'A simple nutrient-dense smoothie recipe to keep mindless bingeing at bay. Low in calories, rich in iron, magnesium, potassium, and antioxidants, this smoothie is delicious, healthy and easy to prepare at home', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 28, 
                'category_id' => 3, 
                'name' => 'Cucumber, Kale And Spinach Juice', 
                'description' => 'A fantastic recipe to boost your immune system, bursting with vitamins A, K, C, magnesium, calcium, copper, potassium. Infuse it with dash of ginger and lime for a taste that can surprises you', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 29, 
                'category_id' => 3, 
                'name' => 'Kanjioska drink', 
                'description' => 'A delicious concoction of two most healthy vegetables, carrot and beetroot, along with a tasty blend of spices, Kanjioska takes on a different version of the Holi special Kanji drink. You wont be able to resist this spicy and tangy drink', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
            [
                'id' => 30, 
                'category_id' => 3, 
                'name' => 'Strawberry Mess with Fruit Coulis', 
                'description' => 'A perfect recipe to cool down on a summer day and soak up some citrus fruits', 
                'quantity' => 100, 
                'price' => 60.0
            ]);
    

        Product::create(
            [
                'id' => 31, 
                'category_id' => 4, 
                'name' => 'Safeguard Soap', 
                'description' => '', 
                'quantity' => 100, 
                'price' => 45.0 
            ]);
            [
                'id' => 32, 
                'category_id' => 4, 
                'name' => 'Garnier Foam', 
                'description' => 'GARNIER Pure Active Anti Acne Foam 100ml', 
                'quantity' => 100, 
                'price' => 225.0 
            ]);
            [
                'id' => 33, 
                'category_id' => 4, 
                'name' => 'Eskinol', 
                'description' => 'ESKINOL Deep Cleanser Pimple Fighting 225ml', 
                'quantity' => 100, 
                'price' => 117.0 
            ]);
            [
                'id' => 34, 
                'category_id' => 4, 
                'name' => 'Foundation', 
                'description' => 'LA GIRL PRO Matte Foundation - Light Tan', 
                'quantity' => 100, 
                'price' => 825.0 
            ]);
            [
                'id' => 35, 
                'category_id' => 4, 
                'name' => 'Lipstick', 
                'description' => 'LA GIRL Matte Flat Velvet Lipstick - Sunset Chic', 
                'quantity' => 100, 
                'price' => 45.0 
            ]);
            [
                'id' => 36, 
                'category_id' => 4, 
                'name' => 'Brush', 
                'description' => 'LA GIRL Domed Stippling Brush', 
                'quantity' => 100, 
                'price' => 100.0 
            ]);
            [
                'id' => 37, 
                'category_id' => 4, 
                'name' => 'Fairy Dust Fragrance', 
                'description' => 'PENSHOPPE Fairy Dust Pink Dream 70ml', 
                'quantity' => 100, 
                'price' => 85.0 
            ]);
            [
                'id' => 38, 
                'category_id' => 4, 
                'name' => 'Lovestruck Spray', 
                'description' => 'BODY FANTASIES Lovestruck Body Spray 236ml', 
                'quantity' => 100, 
                'price' => 45.0 
            ]);
            [
                'id' => 39, 
                'category_id' => 4, 
                'name' => 'Garnier Foam', 
                'description' => 'GARNIER Pure Active Anti Acne Foam 100ml', 
                'quantity' => 100, 
                'price' => 45.0 
            ]);
            [
                'id' => 40, 
                'category_id' => 4, 
                'name' => 'Toner', 
                'description' => 'FACE REPUBLIC AHA BHA Toner 160ml', 
                'quantity' => 100, 
                'price' => 45.0 
            ]);

        Product::create(
            [
                'id' => 40, 
                'category_id' => 5, 
                'name' => 'Washing Machine', 
                'description' => 'Sharp ESJN06A9 6.0kg Fully Automatic Washing Machine', 
                'quantity' => 100, 
                'price' => 10500.0 
            ]);
            [
                'id' => 41, 
                'category_id' => 5, 
                'name' => 'Gas stove', 
                'description' => 'Gas stove one-piece tempered panel 4000KW firepower design no need to install black', 
                'quantity' => 100, 
                'price' => 2500.0 
            ]);
            [
                'id' => 42, 
                'category_id' => 5, 
                'name' => 'Refrigerator', 
                'description' => 'Fujidenzo 3.5 cu. ft. Two-Door Direct Cool Refrigerator RDD 35T (Titanium)', 
                'quantity' => 100, 
                'price' => 8500.0 
            ]);
            [
                'id' => 43, 
                'category_id' => 5, 
                'name' => 'Gas Range', 
                'description' => 'XTREME X-Series 50cm Gas Range 4Seal Burner 55L Oven Electric Ignition LPG Gas Source [XGR-504GX]', 
                'quantity' => 100, 
                'price' => 9700.0 
            ]);
            [
                'id' => 44, 
                'category_id' => 5, 
                'name' => 'Induction Cooker', 
                'description' => 'KCB Electric Stove Infrared Ceramic Cooktop Digital Induction Cooker Inverter Original On Sale 2200W', 
                'quantity' => 100, 
                'price' => 5000.0 
            ]);
            [
                'id' => 45, 
                'category_id' => 5, 
                'name' => 'Water Pump Dispenser', 
                'description' => '3D WP-5W Electronic Wireless Water Pump Dispenser', 
                'quantity' => 100, 
                'price' => 3500.0 
            ]);
            [
                'id' => 46, 
                'category_id' => 5, 
                'name' => 'Doorbell', 
                'description' => 'eufy by Anker Security Wireless Add-on Video Doorbell with 2K Resolution, 2-Way Audio', 
                'quantity' => 100, 
                'price' => 6900.0 
            ]);
            [
                'id' => 47, 
                'category_id' => 5, 
                'name' => 'Electric Grill', 
                'description' => 'Hanabishi Electric Griller HLSMOKERGRILL10 Less Smoke Non-stick marble ceramic coating cooking plate', 
                'quantity' => 100, 
                'price' => 2000.0 
            ]);
            [
                'id' => 48, 
                'category_id' => 5, 
                'name' => 'Soap Dispenser', 
                'description' => 'Deerma small portable liquid hands free sensor auto soap dispenser Deerma XS100', 
                'quantity' => 100, 
                'price' => 999.0 
            ]);
            [
                'id' => 49, 
                'category_id' => 5, 
                'name' => 'Gas Burners', 
                'description' => 'Tecnogas 3 Gas Burners Vortex Stove GS-300BCSS (Stainless Steel)', 
                'quantity' => 100, 
                'price' => 5000.0 
            ]);
            [
                'id' => 50, 
                'category_id' => 5, 
                'name' => 'Aircon', 
                'description' => 'Brand New LG Split Type Air Conditioner', 
                'quantity' => 100, 
                'price' => 7500.0 
            ]);

       
    }
}
