<?php
function biodata(){
    echo json_encode(
         array( 'name' =>'Ilham',
                'age' => 22,
                'address' => 'Pematang Siantar',
                'hobbies'=> array('Ngegame','Futsal','Ngoding'),
                'is_married'=>false,
                'list_school'=> array(array('name'=>'SD 01916 Burihan','year_in'=>2002,'year_out'=>2008),
                                      array('name'=>'SMP Taman Siswa','year_in'=>2008,'year_out'=>2011),
                                      array('name'=>'SMK Al-Washliyah 2 Perdagangan ','year_in'=>2011,'year_out'=>2014),
                                      array('name'=>'Universitas Maritim Raja Ali Haji','year_in'=>2014,'year_out'=>2019)
                                      ),
                'skills'=> array(array('skill_name'=>'Web Programming','level'=>'advanced'),
                                      array('skill_name'=>'Android Developer','level'=>'advanced')
                                      ),                    
                'interest_in_coding'=>true                      
                )
        );
}
biodata(); 
?>