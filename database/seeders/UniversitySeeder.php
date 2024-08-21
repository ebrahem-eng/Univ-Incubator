<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        University::create([
            'name' => 'Syrian Private University',
            'details' => 'The Syrian Private University is a private university established in Syria in 2005 by a number of Iraqi and Arab academics and businessmen Despite the universitys short age, it is now considered one of the best universities in Syria The campus extends over an area of ​​250,000 m2 and is located on the Daraa International Highway. The university is 24 km away from Damascus.The Syrian Private University is recognized by the World Health Organization ECFMG IMED/FAIMER The Faculty of Human Medicine at the Syrian Private University is listed among',
            'phone' => '0987654321',
            'status' => '1',
            'img' => 'Image/UniversityImage/spu.jpg',
            'type' => '1',
            'address_id' => '1',
            'created_by' => '1',
        ]);


        University::create([
            'name' => 'Arab International University',
            'details' => 'The Arab International University is a private Syrian university established by Republican Decree No. 193 dated June 5, 2005. The university campus is located on the international road between Damascus and Daraa, 37 km from the capital, near the town of Ghabagheb, in the Al-Sanamayn area in Daraa Governorate. The area of ​​the university campus is approximately 211 dunams (211,000 m2). The Arab International University works on using new concepts in the educational process. The university joined the Association of Arab Universities in May 2009.',
            'phone' => '0987654312',
            'status' => '1',
            'img' => 'Image/UniversityImage/aiu.jpg',
            'type' => '1',
            'address_id' => '2',
            'created_by' => '1',
        ]);

        University::create([
            'name' => 'ALJazeera Private University',
            'details' => 'Al-Jazeera Private University is a private Syrian university based in Deir ez-Zor city. It was established in 2007 with the aim of providing university and post-university education services to the eastern region of Syria. The campus of Al-Jazeera Private University is located near the western entrance to Deir ez-Zor city on the road between Deir ez-Zor city and Raqqa. It is committed to high quality higher education based on advanced and modern study plans and distinguished teaching staff in terms of knowledge, experience and communication, as well as qualitative professional training programs.',
            'phone' => '0987654321',
            'status' => '1',
            'img' => 'Image/UniversityImage/jpu.png',
            'type' => '1',
            'address_id' => '3',
            'created_by' => '1',
        ]);

        University::create([
            'name' => 'International University For Science And Technology',
            'details' => 'The International University for Science and Technology is a private university established in 2005 and located in the city of Ghabagheb in Daraa Governorate, Syria. The university includes six faculties: Dentistry, Pharmacy, Engineering and Technology, Information Technology, Business Administration and Finance, Arts and Sciences. In January 2017, the university ranked 487th in the Arab world and 15735th globally according to the Webometrics World University Rankings. In 2021, the International University ranked 12th in the ranking of universities in Syria and fifth in the ranking of private universities in the Syrian Arab Republic.',
            'phone' => '0987654313',
            'status' => '1',
            'img' => 'Image/UniversityImage/iust.png',
            'type' => '1',
            'address_id' => '4',
            'created_by' => '1',
        ]);
    }
}
