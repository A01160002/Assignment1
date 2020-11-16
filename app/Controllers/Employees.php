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
//         return $parser->setData(['records' => $records])
//                 // and have it render the template with those
//                 ->render('employeeslist');
         
         $table = new \CodeIgniter\View\Table();

         $headings = $employees->fields;
         $displayHeadings = array_slice($headings, 1, 2);
         $table->setHeading(array_map('ucfirst', $displayHeadings));
         
         foreach ($records as $record) {
             $nameLink = anchor("employees/showme/$record->id",$record->name);
             $table->addRow($nameLink,$record->nationality);
         }
         
         $template = [
             'table_open' => '<table cellpadding="10px">',
             'cell_start' => '<td style="border: 5px solid #FF0000;">',
             'row_alt_start' => '<tr style="background-color:yellow">',
             ];
         $table->setTemplate($template);
         
         $fields = [
             'title' => 'Deathing Standing',
             'heading' => 'Deathing Standing',
             'footer' => 'Liu Chang'
             ];
          return $parser->setData($fields)
                         ->render('templates\top') .
                  $table->generate() .
                  $parser->setData($fields)
                         ->render('templates\bottom');

         return $table->generate(); 
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
//         return $parser->setData($record)         
//                    // and have it render the template with those         
//                    ->render('oneemployee');
         $table = new \CodeIgniter\View\Table();

         $headings = $employees->fields;
//         $table->setHeading(array_map('ucfirst', $displayHeadings));
         
        $table->addRow($headings[0],$record['id']);
        $table->addRow($headings[1],$record['name']);
        $table->addRow($headings[2],$record['country']);
        $table->addRow($headings[3],"<img src=\"/image/".$record['image']."\"/>");
        $table->addRow($headings[4],$record['occupation']);
        $table->addRow($headings[5],$record['notablework']);
        $table->addRow($headings[6],$record['nationality']);
        $table->addRow($headings[7],$record['born']);
        
      
         $template = [
             'table_open' => '<table cellpadding="10px">',
             'cell_start' => '<td style="border: 5px solid #FF0000;">',
             'row_alt_start' => '<tr style="background-color:#green">',
             ];
         $table->setTemplate($template);
         
         $fields = [
             'title' => 'Deathing Standing',
             'heading' => 'Deathing Standing',
             'footer' => 'Liu Chang'
             ];
          return $parser->setData($fields)
                         ->render('templates\top') .
                  $table->generate() .
                  $parser->setData($fields)
                         ->render('templates\bottom');

         return $table->generate(); 
     }
 }
