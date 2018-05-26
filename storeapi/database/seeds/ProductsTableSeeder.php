<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('products')->insert(array(
            0 => array(
                'SKU' => 'CDKF0978',
                'name' => 'Televisor 3D',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 15,
                'price' => 400.0,
                'image' => 'image1.jpg'
            ),
            1 => array(
                'SKU' => 'ABDC1234',
                'name' => 'Camara Digital XB',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 10,
                'price' => 325.50,
                'image' => 'image2.jpg'
            ),
            2 => array(
                'SKU' => 'LLOO9876',
                'name' => 'SmartPhone 100X',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 10,
                'price' => 250.5,
                'image' => 'image3.jpg'
            ),
            3 => array(
                'SKU' => 'GGFB87645',
                'name' => 'Cable SuperCharger',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 25,
                'price' => 9.5,
                'image' => 'image4.jpg'
            ),
            4 => array(
                'SKU' => 'ZASD8708',
                'name' => 'Mouse Gaming SXT',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 20,
                'price' => 19.5,
                'image' => 'image5.jpg'
            ),
            4 => array(
                'SKU' => 'SSHY5321',
                'name' => 'Keyboard Gaming SXT',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 20,
                'price' => 45,
                'image' => 'image6.jpg'
            ),
            5 => array(
                'SKU' => 'TTGS0009',
                'name' => 'Speaker RXFG',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 120,
                'price' => 75,
                'image' => 'image7.jpg'
            ),
            6 => array(
                'SKU' => 'KLMU9823',
                'name' => 'Portatil Gaming Console',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 25,
                'price' => 375,
                'image' => 'image8.jpg'
            ),
            7 => array(
                'SKU' => 'RPOP9843',
                'name' => 'Tablet Cybor 01',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 5,
                'price' => 105.5,
                'image' => 'image9.jpg'
            ),
            8 => array(
                'SKU' => 'TRVC1514',
                'name' => 'Monitor Extra Gaming 14"',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dapibus gravida dolor. Maecenas ut augue vitae lorem elementum sollicitudin 
                at vitae massa. Nulla nisl urna, congue ut purus quis, finibus vehicula augue. 
                Donec non imperdiet sem. Phasellus maximus viverra mi, commodo imperdiet arcu 
                feugiat in. Morbi luctus mattis placerat. Mauris fringilla ligula 
                eros, ut malesuada tortor ultrices non. Donec rutrum non urna vitae faucibus. ',
                'quantity' => 25,
                'price' => 75.5,
                'image' => 'image10.jpg'
            )));
    }
}
