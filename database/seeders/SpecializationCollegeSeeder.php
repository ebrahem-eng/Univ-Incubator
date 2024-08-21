<?php

namespace Database\Seeders;

use App\Models\CollegeSpecialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        CollegeSpecialization::create([
            'name' => 'Software Engineering And Information Systems',
            'img' => 'Image/SpecializationCollegeImage/spec1.jpg',
            'details' => 'Software Engineering: Systematic approach to designing, developing, testing, and maintaining software applications.Key aspects: Requirements analysis, design, coding, testing, deployment, and maintenance of software systems.Methodologies: Agile, Waterfall, DevOps, and other frameworks for managing software development lifecycle.Information Systems: Integration of hardware, software, data, and people to collect, process, and distribute information.IS components: Databases, networks, user interfaces, and business processes that support organizational operations.IS applications: Enterprise resource planning (ERP), customer relationship management (CRM), business intelligence, and data analytics systems.',
            'created_by' => '1',
            'univCollegeID' => '1',
        ]);

        CollegeSpecialization::create([
            'name' => 'Network And Communication Engineering',
            'img' => 'Image/SpecializationCollegeImage/spec2.jpg',
            'details' => 'Network Engineering: Design, implementation, and maintenance of computer networks for data communication.Key components: Routers, switches, firewalls, servers, and various network protocols (TCP/IP, HTTP, etc.).Network types: LANs, WANs, wireless networks (Wi-Fi, cellular), and the internet infrastructure.Communication Engineering: Focuses on transmitting information across various media and distances.Key areas: Signal processing, modulation techniques, error correction, and information theory.Applications: Telecommunications, satellite communications, mobile networks, IoT, and emerging technologies like 5G and beyond.' ,
            'created_by' => '1',
            'univCollegeID' => '1',
        ]);

        CollegeSpecialization::create([
            'name' => 'Cyber Security',
            'img' => 'Image/SpecializationCollegeImage/spec3.jpg',
            'details' => 'Cyber Security: Protection of internet-connected systems, including hardware, software, and data, from cyber threats and attacks.Threat landscape: Malware, phishing, ransomware, DDoS attacks, social engineering, and advanced persistent threats (APTs).Defense strategies: Firewalls, antivirus software, intrusion detection/prevention systems, encryption, and multi-factor authentication.Risk management: Identifying vulnerabilities, assessing risks, and implementing appropriate security controls and policies.Incident response: Developing and maintaining plans to detect, respond to, and recover from security incidents and breaches.Compliance and regulations: Adhering to industry standards (e.g., ISO 27001) and legal requirements (e.g., GDPR, HIPAA) for data protection and privacy.',
            'created_by' => '1',
            'univCollegeID' => '1',
        ]);
    }
}
