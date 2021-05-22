<?php

use Illuminate\Database\Seeder;
use App\Subject;
class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 6; $i<12; $i++){
            $s = new Subject([
                'name' => 'Math',
                'grade' => $i,
                'description' => "Mathematics(from Greek: μάθημα, máthēma, 'knowledge, study, learning')
             includes the study of such topics as quantity (number theory), structure (algebra),space (geometry),
             and change(analysis).It has no generally accepted definition."
            ]);
            $s->save();
            $s = new Subject([
                'name' => 'English',
                'grade' => $i,
                'description' => "English is a West Germanic language first spoken in early medieval England,
                 which has become the leading language of international discourse in the 21st century."
            ]);
            $s->save();
            $s = new Subject([
                'name' => 'Physics',
                'grade' => $i,
                'description' => "Physics (from Ancient Greek: φυσική (ἐπιστήμη), romanized: physikḗ (epistḗmē),
                 lit.'knowledge of nature', from φύσις phýsis 'nature')is the natural science that studies matter,
                 its motion and behavior through space and time, and the related entities of energy and force."
            ]);
            $s->save();
        }
        //
    }
}
