<?php

namespace Database\Seeders;

use App\Models\UniversityCollege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversityCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        UniversityCollege::create([
            'collegeName' => 'Engineering College',
            'collegeImage' => 'Image/UniversityCollegeImage/engineering.png',
            'details' => 'The Faculty of Computer Engineering and Informatics at the Syrian Private University aims to provide a scientific environment that keeps pace with the continuous development of computer engineering, information technology and communications sciences.',
            'created_by' => '1',
            'universityId' => '1'
        ]);

        UniversityCollege::create([
            'collegeName' => 'Medicine College',
            'collegeImage' => 'Image/UniversityCollegeImage/medicine.png',
            'details' => 'The College of Medicine seeks to provide the appropriate environment to provide distinguished and integrated medical education that leads to the qualification of the graduate in a way that ensures highly efficient professional and ethical performance based on teamwork with the spirit of one team.',
            'created_by' => '1',
            'universityId' => '1'
        ]);

        UniversityCollege::create([
            'collegeName' => 'Dentistry College',
            'collegeImage' => 'Image/UniversityCollegeImage/dentistry.png',
            'details' => 'The College of Dentistry seeks to excel in preparing a graduate with high scientific and ethical competence, who is able to continuously develop his skills and knowledge according to the latest global scientific data, to put them in the service of development.',
            'created_by' => '1',
            'universityId' => '1'
        ]);

        UniversityCollege::create([
            'collegeName' => 'Petroleum Engineering College',
            'collegeImage' => 'Image/UniversityCollegeImage/petrole.png',
            'details' => 'Motivating the student to reach the stage of creativity and excellence in the specialty and special attention to developing his scientific personality, and improving his ability to deal with various work conditions in the field of petroleum engineering.',
            'created_by' => '1',
            'universityId' => '1'
        ]);

        UniversityCollege::create([
            'collegeName' => 'Pharmacy College',
            'collegeImage' => 'Image/UniversityCollegeImage/pharmacy.png',
            'details' => 'The vision of the College of Pharmacy includes its belief that pharmacists have an effective role in building a distinguished scientific community in which they are able to secure all societal pharmaceutical and health needs of medicines and supplies.',
            'created_by' => '1',
            'universityId' => '1'
        ]);

        UniversityCollege::create([
            'collegeName' => 'Business Adminstration College',
            'collegeImage' => 'Image/UniversityCollegeImage/buisnes.png',
            'details' => 'To excel in transferring, disseminating and generating knowledge in the fields of management and business sciences, relying on the elite of the educational,technical and administrative staff and advanced teaching curricula to graduate the best cadres equipped with ethics.',
            'created_by' => '1',
            'universityId' => '1'
        ]);
    }
}
