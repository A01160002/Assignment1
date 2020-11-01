<?php
namespace App\Controllers;
 class Employees extends BaseController
 {
     public function index()
     {
         // connect to the model
         $employees = new \App\Models\Ds();
         // retrieve all the records
         $records = $employees->findAll();
         
         //get a template parser
         $parser = \Config\Services::parser();
         //tell it about the substitions
         return $parser->setData(['records' => $records])
                 // and have it render the template with those
                 ->render('employeeslist');
     }
     
     public function showme($id)
     {
         // connect to the model
         $employees = new \App\Models\Ds();
         // retrieve all the records
         $record = $employees->find($id);
         
         // get a template parser     
         $parser = \Config\Services::parser();     
         // tell it about the substitions     
         return $parser->setData($record)         
                    // and have it render the template with those         
                    ->render('oneemployee');
     }
 }
