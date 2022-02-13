<?php


namespace App\Classes;
class Product
{
    public function getAllProduct()
    {
        return[
            0=>[
                'id' => 1,
                'name' => 'New product',
                'price' => '150',
                'description' => 'descrioption',
                'img' => '1.jpg'
            ],
            1=>[
                'id' => 2,
                'name' => 'New shirt',
                'price' => '5050',
                'description' => 'descrioption',
                'img' => '2.jpg'
            ],
            2=>[
                'id' => 3,
                'name' => 'new sari',
                'price' => '10000',
                'description' => 'descrioption',
                'img' => '3.jpg'
            ]


        ];
    }
}