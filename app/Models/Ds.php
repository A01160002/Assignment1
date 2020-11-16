<?php
namespace App\Models;
use App\Models\Simple\JSONModel;
/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Ds extends JSONModel{
    protected $origin = WRITEPATH . 'data/dsData.json'; 
    protected $keyField = 'id'; 
    protected $validationRules = [];

    //mock data : an array of records
//    protected $data = [
//        '1' => [
//            'id' => 1,
//            'name' => 'Hideo Kojima',
//            'country' => 'Japan',
//            'image' => 'kojima.jpg',
//            'occupation' => 'video game designer',
//            'notablework' => 'Metal Gear, Snatcher, Zone of the Enders, Death Stranding',
//            'nationality' => 'Japanese',
//            'born' => 'August 24, 1963',
//        ],
//        '2' => [
//            'id' => 2,
//            'name' => 'Yoji Shinkawa',
//            'country' => 'Japan',
//            'image' => 'shinkawa.jpg',
//            'occupation' => 'illustrator',
//            'notablework' => 'Metal Gear, Call of Duty: Black Ops Ⅲ, Zone of the Enders, Death Stranding',
//            'nationality' => 'Japanese',
//            'born' => 'December 25, 1971',
//        ],
//        '3' => [
//            'id' => 3,
//            'name' => 'Norman Mark Reedus',
//            'country' => 'America',
//            'image' => 'norman.jpg',
//            'occupation' => 'voice and action capture provider',
//            'notablework' => 'The Walking Dead, Death Stranding',
//            'nationality' => 'American',
//            'born' => 'January 6, 1969',
//        ],
//        '4' => [
//            'id' => 4,
//            'name' => 'Mads Dittmann Mikkelsen',
//            'country' => 'Denmark',
//            'image' => 'mads.jpg',
//            'occupation' => 'voice and action capture provider',
//            'notablework' => 'King Arthur, Chaos Walking, Death Stranding',
//            'nationality' => 'Dane',
//            'born' => 'November 22, 1965',
//        ],
//        '5' => [
//            'id' => 5,
//            'name' => 'Léa Seydoux',
//            'country' => 'France',
//            'image' => 'seydoux.jpg',
//            'occupation' => 'voice and action capture provider',
//            'notablework' => 'The Beautiful Person, No Time to Die, Death Stranding',
//            'nationality' => 'French',
//            'born' => 'July 1, 1985',
//        ],
//        '6' => [
//            'id' => 6,
//            'name' => 'Margaret Qualley',
//            'country' => 'America',
//            'image' => 'margaret.jpg',
//            'occupation' => 'voice and action capture provider',
//            'notablework' => 'Adam, Seberg, Death Stranding',
//            'nationality' => 'American',
//            'born' => 'October 23, 1994',
//        ],
//    ];
//
//    public function findAll() {
//        return $this->data;
//    }
//
//    public function find($id = null) {
//        if (!empty($id) && isset($this->data[$id])) {
//            return $this->data[$id];
//        }
//        return null;
//    }

}
