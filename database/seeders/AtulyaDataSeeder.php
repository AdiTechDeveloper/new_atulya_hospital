<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Facility;
use Illuminate\Database\Seeder;

class AtulyaDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedDepartments();
        $this->seedDoctors();
        $this->seedFacilities();
        $this->seedDepartmentDoctorMapping();
    }

    private function seedDepartments(): void
    {
        $departments = [

            [
                'name' => 'Urology',
                'slug' => 'urology',
                'short_description' => 'Our Urology Department provides comprehensive care for conditions affecting the urinary system and male reproductive health.',
                'image' => null,
                'about_heading' => 'Comprehensive Urology Care',
                'about_description' => 'The Urology Department provides comprehensive evaluation and treatment for conditions affecting the urinary system and male reproductive health. Patients receive focused care based on their symptoms, diagnosis and individual treatment requirements.',
                'services' => [
                    'Kidney Stone Treatment',
                    'Urological Surgery',
                    'Prostate Treatment',
                    'Urinary Tract Care'
                ],
                'specialities' => [
                    'Kidney Care',
                    'Urology Surgery',
                    'Prostate Care',
                    'Urinary Disorders'
                ],
                'conditions' => [
                    'Urinary System Disorders',
                    'Kidney and Urinary Problems',
                    'Prostate Conditions',
                    'Male Reproductive Health'
                ],
                'patient_care_heading' => 'Patient-Centred Urology Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'name' => 'Orthopedic',
                'slug' => 'orthopedic',
                'short_description' => 'Our Orthopedic Department provides specialized diagnosis and treatment for bones, joints, muscles and other musculoskeletal conditions.',
                'image' => null,
                'about_heading' => 'Specialized Orthopedic Care',
                'about_description' => 'The Orthopedic Department provides specialized care for conditions involving bones, joints, muscles, ligaments and the musculoskeletal system. Treatment is planned according to the patient condition, mobility needs and recovery goals.',
                'services' => [
                    'Joint Replacement',
                    'Arthroscopy',
                    'Fracture Treatment',
                    'Bone and Joint Care'
                ],
                'specialities' => [
                    'Joint Care',
                    'Sports Injury',
                    'Bone Disorders',
                    'Musculoskeletal Care'
                ],
                'conditions' => [
                    'Joint and Bone Conditions',
                    'Fracture and Injury Care',
                    'Sports-Related Injuries',
                    'Musculoskeletal Problems'
                ],
                'patient_care_heading' => 'Personalised Orthopedic Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'name' => 'Rheumatology',
                'slug' => 'rheumatology',
                'short_description' => 'Our Rheumatology Department provides specialized care for arthritis, autoimmune disorders and conditions affecting joints and connective tissues.',
                'image' => null,
                'about_heading' => 'Specialized Rheumatology Care',
                'about_description' => 'The Rheumatology Department provides specialized evaluation and management for arthritis, autoimmune disorders, joint conditions and connective tissue diseases. Care is planned according to each patient symptoms and clinical requirements.',
                'services' => [
                    'Arthritis Treatment',
                    'Autoimmune Disease Management',
                    'Joint Pain Treatment',
                    'Rheumatic Disease Care'
                ],
                'specialities' => [
                    'Arthritis',
                    'Autoimmune Disorders',
                    'Joint Disorders',
                    'Connective Tissue Diseases'
                ],
                'conditions' => [
                    'Arthritis and Joint Conditions',
                    'Autoimmune Disorders',
                    'Rheumatic Diseases',
                    'Connective Tissue Conditions'
                ],
                'patient_care_heading' => 'Patient-Centred Rheumatology Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'name' => 'Gastro Surgery',
                'slug' => 'gastro-surgery',
                'short_description' => 'Our Gastro Surgery Department provides surgical care for conditions affecting the digestive system, including the stomach, intestines, liver and related organs.',
                'image' => null,
                'about_heading' => 'Specialized Gastro Surgical Care',
                'about_description' => 'The Gastro Surgery Department provides surgical care for conditions affecting the digestive system, including the stomach, intestines, liver, gallbladder and abdominal region.',
                'services' => [
                    'Gastrointestinal Surgery',
                    'Liver Surgery',
                    'Gallbladder Surgery',
                    'Hernia Surgery'
                ],
                'specialities' => [
                    'Digestive System Surgery',
                    'Liver Care',
                    'Gallbladder Care',
                    'Abdominal Surgery'
                ],
                'conditions' => [
                    'Digestive System Conditions',
                    'Liver and Gallbladder Problems',
                    'Abdominal Conditions',
                    'Hernia-Related Conditions'
                ],
                'patient_care_heading' => 'Comprehensive Gastro Surgical Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'name' => 'Trauma',
                'slug' => 'trauma',
                'short_description' => 'Our Trauma Department provides timely and specialized care for patients with serious injuries and emergency trauma conditions.',
                'image' => null,
                'about_heading' => 'Timely Trauma Care',
                'about_description' => 'The Trauma Department provides timely care for serious injuries, accident-related conditions, fractures and other emergency trauma situations. Treatment is focused on prompt assessment and appropriate medical or surgical management.',
                'services' => [
                    'Emergency Trauma Care',
                    'Accident Injury Treatment',
                    'Fracture Management',
                    'Critical Injury Care'
                ],
                'specialities' => [
                    'Accident Injuries',
                    'Emergency Trauma',
                    'Multiple Injuries',
                    'Fracture Care'
                ],
                'conditions' => [
                    'Accident and Injury Care',
                    'Fractures',
                    'Emergency Trauma',
                    'Multiple Injuries'
                ],
                'patient_care_heading' => 'Emergency-Focused Patient Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'name' => 'Critical Care',
                'slug' => 'critical-care',
                'short_description' => 'Our Critical Care Department provides specialized monitoring and treatment for patients with serious or life-threatening medical conditions.',
                'image' => null,
                'about_heading' => 'Advanced Critical Care',
                'about_description' => 'The Critical Care Department provides specialized monitoring and treatment for patients with serious or life-threatening medical conditions. Patients receive close observation and coordinated critical care according to their clinical needs.',
                'services' => [
                    'Intensive Care',
                    'Critical Patient Monitoring',
                    'Emergency Critical Care',
                    'Post-Surgical Intensive Care'
                ],
                'specialities' => [
                    'Intensive Care',
                    'Life Support',
                    'Critical Illness Management',
                    'Post-Operative Care'
                ],
                'conditions' => [
                    'Intensive Care',
                    'Critical Illness',
                    'Life Support',
                    'Post-Operative Critical Care'
                ],
                'patient_care_heading' => '24×7 Critical Patient Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 6,
                'is_active' => true,
            ],

            [
                'name' => 'General Surgery',
                'slug' => 'general-surgery',
                'short_description' => 'Our General Surgery Department provides comprehensive surgical treatment for a wide range of common and complex conditions.',
                'image' => null,
                'about_heading' => 'Comprehensive General Surgery',
                'about_description' => 'The General Surgery Department provides comprehensive surgical treatment for a wide range of common and complex conditions. The department supports patients from evaluation and diagnosis through surgical treatment and recovery.',
                'services' => [
                    'General Surgical Procedures',
                    'Hernia Surgery',
                    'Appendix Surgery',
                    'Minor Surgical Procedures'
                ],
                'specialities' => [
                    'Abdominal Surgery',
                    'Hernia Treatment',
                    'Laparoscopic Surgery',
                    'General Surgical Care'
                ],
                'conditions' => [
                    'General Surgical Conditions',
                    'Hernia',
                    'Appendix-Related Conditions',
                    'Abdominal Conditions'
                ],
                'patient_care_heading' => 'Complete Surgical Patient Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 7,
                'is_active' => true,
            ],

            [
                'name' => 'Joint Replacement',
                'slug' => 'joint-replacement',
                'short_description' => 'Our Joint Replacement Department provides specialized surgical care for patients suffering from severe joint damage and mobility problems.',
                'image' => null,
                'about_heading' => 'Joint Replacement & Reconstruction',
                'about_description' => 'The Joint Replacement Department provides specialized surgical care for patients with severe joint damage, pain and mobility problems. Treatment focuses on improving function and supporting recovery.',
                'services' => [
                    'Knee Replacement',
                    'Hip Replacement',
                    'Shoulder Replacement',
                    'Joint Reconstruction'
                ],
                'specialities' => [
                    'Knee Care',
                    'Hip Care',
                    'Shoulder Care',
                    'Joint Reconstruction'
                ],
                'conditions' => [
                    'Knee Joint Problems',
                    'Hip Joint Problems',
                    'Shoulder Joint Problems',
                    'Severe Joint Damage'
                ],
                'patient_care_heading' => 'Personalised Joint Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 8,
                'is_active' => true,
            ],

            [
                'name' => 'Internal Medicine',
                'slug' => 'internal-medicine',
                'short_description' => 'Our Internal Medicine Department provides comprehensive diagnosis and treatment for a wide range of adult medical conditions.',
                'image' => null,
                'about_heading' => 'Comprehensive Internal Medicine',
                'about_description' => 'The Internal Medicine Department provides comprehensive diagnosis and treatment for a wide range of adult medical conditions. The department focuses on understanding symptoms, identifying underlying conditions and planning appropriate care.',
                'services' => [
                    'General Medical Consultation',
                    'Chronic Disease Management',
                    'Health Checkups',
                    'Infection Management'
                ],
                'specialities' => [
                    'Adult Medicine',
                    'Diabetes Management',
                    'Hypertension Care',
                    'Chronic Disease Care'
                ],
                'conditions' => [
                    'Adult Medical Conditions',
                    'Diabetes',
                    'Hypertension',
                    'Chronic Diseases'
                ],
                'patient_care_heading' => 'Patient-Focused Medical Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 9,
                'is_active' => true,
            ],

            [
                'name' => 'ENT',
                'slug' => 'ent',
                'short_description' => 'Our ENT Department provides specialized diagnosis and treatment for conditions affecting the ear, nose, throat and related structures.',
                'image' => null,
                'about_heading' => 'Ear, Nose & Throat Care',
                'about_description' => 'The ENT Department provides specialized diagnosis and treatment for conditions affecting the ear, nose, throat and related structures. Both medical and surgical care may be planned according to the patient condition.',
                'services' => [
                    'Ear Treatment',
                    'Nose and Sinus Treatment',
                    'Throat Treatment',
                    'ENT Surgery'
                ],
                'specialities' => [
                    'Ear Disorders',
                    'Sinus Disorders',
                    'Throat Disorders',
                    'ENT Surgery'
                ],
                'conditions' => [
                    'Ear Disorders',
                    'Nose and Sinus Conditions',
                    'Throat Conditions',
                    'ENT Surgical Conditions'
                ],
                'patient_care_heading' => 'Specialised ENT Patient Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 10,
                'is_active' => true,
            ],

            [
                'name' => 'Arthroscopy',
                'slug' => 'arthroscopy',
                'short_description' => 'Our Arthroscopy Department provides minimally invasive treatment for various joint and sports-related injuries.',
                'image' => null,
                'about_heading' => 'Minimally Invasive Joint Care',
                'about_description' => 'The Arthroscopy Department provides minimally invasive treatment for various joint and sports-related injuries. Care is focused on appropriate diagnosis, joint preservation and recovery of movement.',
                'services' => [
                    'Knee Arthroscopy',
                    'Shoulder Arthroscopy',
                    'Sports Injury Treatment',
                    'Ligament Repair'
                ],
                'specialities' => [
                    'Knee Injuries',
                    'Shoulder Injuries',
                    'Ligament Injuries',
                    'Sports Injuries'
                ],
                'conditions' => [
                    'Knee Injuries',
                    'Shoulder Injuries',
                    'Ligament Problems',
                    'Sports Injuries'
                ],
                'patient_care_heading' => 'Focused Arthroscopy Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 11,
                'is_active' => true,
            ],

            [
                'name' => 'Skin & Cosmetics',
                'slug' => 'skin-cosmetics',
                'short_description' => 'Our Skin & Cosmetics Department provides dermatological and cosmetic care for a wide range of skin, hair and aesthetic concerns.',
                'image' => null,
                'about_heading' => 'Skin, Hair & Cosmetic Care',
                'about_description' => 'The Skin & Cosmetics Department provides dermatological and cosmetic care for a range of skin, hair and aesthetic concerns. Treatment is planned according to individual skin and patient requirements.',
                'services' => [
                    'Skin Consultation',
                    'Acne Treatment',
                    'Hair and Scalp Care',
                    'Cosmetic Procedures'
                ],
                'specialities' => [
                    'Dermatology',
                    'Acne Care',
                    'Hair Care',
                    'Aesthetic Treatments'
                ],
                'conditions' => [
                    'Skin Conditions',
                    'Acne and Related Problems',
                    'Hair and Scalp Conditions',
                    'Aesthetic Concerns'
                ],
                'patient_care_heading' => 'Personalised Skin Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 12,
                'is_active' => true,
            ],

            [
                'name' => 'Onco Surgery',
                'slug' => 'onco-surgery',
                'short_description' => 'Our Onco Surgery Department provides specialized surgical evaluation and treatment for patients with cancer and related conditions.',
                'image' => null,
                'about_heading' => 'Specialized Surgical Oncology',
                'about_description' => 'The Onco Surgery Department provides specialized surgical evaluation and treatment for patients with cancer and related conditions. Care is planned according to the diagnosis and individual clinical requirements.',
                'services' => [
                    'Cancer Surgery',
                    'Tumor Removal',
                    'Surgical Oncology',
                    'Post-Surgical Cancer Care'
                ],
                'specialities' => [
                    'Surgical Oncology',
                    'Tumor Surgery',
                    'Cancer Surgery',
                    'Oncology Care'
                ],
                'conditions' => [
                    'Cancer Surgery',
                    'Tumor Conditions',
                    'Surgical Oncology',
                    'Post-Surgical Cancer Care'
                ],
                'patient_care_heading' => 'Patient-Centred Oncology Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 13,
                'is_active' => true,
            ],

            [
                'name' => 'Sports Medicine',
                'slug' => 'sports-medicine',
                'short_description' => 'Our Sports Medicine Department provides specialized care for sports injuries, physical performance and musculoskeletal conditions.',
                'image' => null,
                'about_heading' => 'Sports Injury & Performance Care',
                'about_description' => 'The Sports Medicine Department provides specialized care for sports injuries, physical performance concerns and musculoskeletal conditions. Treatment focuses on recovery, function and safe return to activity.',
                'services' => [
                    'Sports Injury Treatment',
                    'Injury Rehabilitation',
                    'Muscle and Joint Care',
                    'Sports Fitness Assessment'
                ],
                'specialities' => [
                    'Sports Injuries',
                    'Musculoskeletal Care',
                    'Injury Prevention',
                    'Sports Rehabilitation'
                ],
                'conditions' => [
                    'Sports Injuries',
                    'Muscle and Joint Problems',
                    'Injury Prevention',
                    'Sports Rehabilitation'
                ],
                'patient_care_heading' => 'Recovery-Focused Sports Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 14,
                'is_active' => true,
            ],

            [
                'name' => 'Plastic Surgery',
                'slug' => 'plastic-surgery',
                'short_description' => 'Our Plastic Surgery Department provides reconstructive and aesthetic surgical care for a variety of conditions and patient needs.',
                'image' => null,
                'about_heading' => 'Reconstructive & Plastic Surgery',
                'about_description' => 'The Plastic Surgery Department provides reconstructive and aesthetic surgical care for a variety of conditions and patient needs. Treatment is planned according to the individual clinical requirements and goals.',
                'services' => [
                    'Reconstructive Surgery',
                    'Plastic Surgery Procedures',
                    'Scar Revision',
                    'Post-Trauma Reconstruction'
                ],
                'specialities' => [
                    'Reconstructive Surgery',
                    'Aesthetic Surgery',
                    'Scar Treatment',
                    'Post-Trauma Reconstruction'
                ],
                'conditions' => [
                    'Reconstructive Conditions',
                    'Aesthetic Concerns',
                    'Scar Conditions',
                    'Post-Trauma Conditions'
                ],
                'patient_care_heading' => 'Individualised Surgical Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 15,
                'is_active' => true,
            ],

            [
                'name' => 'Physiotherapy',
                'slug' => 'physiotherapy',
                'short_description' => 'Our Physiotherapy Department provides rehabilitation and physical therapy programs designed to improve mobility, strength and recovery.',
                'image' => null,
                'about_heading' => 'Rehabilitation & Physiotherapy',
                'about_description' => 'The Physiotherapy Department provides rehabilitation and physical therapy programs designed to improve mobility, strength, function and recovery after injury or surgery.',
                'services' => [
                    'Post-Surgical Rehabilitation',
                    'Pain Management',
                    'Joint Rehabilitation',
                    'Sports Rehabilitation'
                ],
                'specialities' => [
                    'Physical Rehabilitation',
                    'Pain Management',
                    'Sports Rehabilitation',
                    'Post-Surgical Recovery'
                ],
                'conditions' => [
                    'Post-Surgical Recovery',
                    'Musculoskeletal Problems',
                    'Joint Problems',
                    'Sports Injuries'
                ],
                'patient_care_heading' => 'Personalised Rehabilitation Care',
                'patient_care_description' => 'Our care approach focuses on accurate assessment, appropriate treatment planning and clear guidance for patients throughout consultation, treatment and follow-up.',
                'why_choose' => [
                    'Department-focused medical care',
                    'Individualized treatment planning',
                    'Patient-focused approach',
                    'Guidance and follow-up support'
                ],
                'sort_order' => 16,
                'is_active' => true,
            ],

            // Drafted because detailed old source was not available
            [
                'name' => 'Gynecology',
                'slug' => 'gynecology',
                'short_description' => 'Comprehensive women healthcare services covering gynecological consultation, diagnosis and treatment.',
                'image' => null,
                'about_heading' => 'Comprehensive Gynecology Care',
                'about_description' => 'The Gynecology Department provides women-focused healthcare through consultation, diagnosis, treatment and follow-up care for common gynecological needs.',
                'services' => [
                    'Gynecological Consultation',
                    'Women Health Checkups',
                    'Gynecological Treatment',
                    'Preventive Women Healthcare'
                ],
                'specialities' => [
                    'General Gynecology',
                    'Women Health',
                    'Gynecological Care',
                    'Preventive Care'
                ],
                'conditions' => [
                    'Menstrual Problems',
                    'Women Health Conditions',
                    'Gynecological Disorders',
                    'Reproductive Health Concerns'
                ],
                'patient_care_heading' => 'Women-Centred Patient Care',
                'patient_care_description' => 'Our approach focuses on respectful consultation, appropriate diagnosis, personalised treatment planning and clear follow-up guidance.',
                'why_choose' => [
                    'Women-focused healthcare',
                    'Individualized treatment planning',
                    'Patient-centred consultation',
                    'Follow-up support'
                ],
                'sort_order' => 17,
                'is_active' => true,
            ],

            // Drafted because detailed old source was not available
            [
                'name' => 'Physician',
                'slug' => 'physician',
                'short_description' => 'Comprehensive physician-led medical consultation and management for common adult healthcare needs.',
                'image' => null,
                'about_heading' => 'Consultant Physician Care',
                'about_description' => 'The Physician Department provides consultation, diagnosis and medical management for a broad range of adult health conditions, with focus on appropriate evaluation and ongoing care.',
                'services' => [
                    'General Physician Consultation',
                    'Medical Diagnosis',
                    'Chronic Disease Management',
                    'Preventive Health Consultation'
                ],
                'specialities' => [
                    'General Medicine',
                    'Adult Healthcare',
                    'Chronic Disease Care',
                    'Preventive Healthcare'
                ],
                'conditions' => [
                    'Common Medical Conditions',
                    'Chronic Diseases',
                    'Lifestyle-Related Conditions',
                    'General Adult Health Problems'
                ],
                'patient_care_heading' => 'Personalised Physician Care',
                'patient_care_description' => 'Our approach focuses on detailed consultation, appropriate diagnosis, personalised treatment planning and follow-up care.',
                'why_choose' => [
                    'Experienced physician-led care',
                    'Individualized treatment planning',
                    'Patient-centred consultation',
                    'Follow-up support'
                ],
                'sort_order' => 18,
                'is_active' => true,
            ],
        ];

        foreach ($departments as $department) {
            Department::updateOrCreate(
                ['slug' => $department['slug']],
                $department
            );
        }
    }

    private function seedDoctors(): void
    {
        $doctors = [
            [
                'name' => 'Dr. Darshil Shah',
                'slug' => 'dr-darshil-shah',
                'department' => 'Urology',
                'speciality' => 'Urologist & Andrology',
                'qualification' => 'MS, MCH, Urology',
                'phone_number' => null,
                'opd_timing' => '04 PM to 06 PM',
                'image' => null,
                'about' => 'Dr. Darshil Shah is a Urologist & Andrology specialist providing focused consultation and treatment for urological and male reproductive health conditions.',
                'areas_of_care' => [
                    'Urinary System Disorders',
                    'Kidney and Urinary Problems',
                    'Prostate Conditions',
                    'Male Reproductive Health'
                ],
                'patient_care_text' => 'Patient care focuses on proper evaluation, diagnosis, treatment planning and follow-up according to individual healthcare needs.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Kunal Sathwara',
                'slug' => 'dr-kunal-sathwara',
                'department' => 'General Surgery',
                'speciality' => 'General & Laparoscopic Surgeon',
                'qualification' => 'MS, FIAGES, FMAS',
                'phone_number' => null,
                'opd_timing' => '06 PM to 08 PM',
                'image' => null,
                'about' => 'Dr. Kunal Sathwara is a General & Laparoscopic Surgeon providing surgical consultation and treatment for a range of general surgical conditions.',
                'areas_of_care' => [
                    'General Surgery',
                    'Laparoscopic Surgery',
                    'Hernia Treatment',
                    'Abdominal Surgical Conditions'
                ],
                'patient_care_text' => 'Patients receive clear surgical evaluation, treatment planning and guidance throughout their treatment and recovery.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Parth Patel',
                'slug' => 'dr-parth-patel',
                'department' => 'Orthopedic',
                'speciality' => 'Arthroscopy, Joint Preservation Surgeon, Consultant Knee & Shoulder Surgeon',
                'qualification' => 'MS Orthopedic',
                'phone_number' => null,
                'opd_timing' => '05 PM to 08 PM',
                'image' => null,
                'about' => 'Dr. Parth Patel provides orthopedic consultation with focus on arthroscopy, joint preservation, knee and shoulder conditions.',
                'areas_of_care' => [
                    'Knee Conditions',
                    'Shoulder Conditions',
                    'Arthroscopy',
                    'Joint Preservation',
                    'Sports Injuries'
                ],
                'patient_care_text' => 'Care focuses on accurate orthopedic assessment, appropriate treatment planning and rehabilitation guidance.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Raghav Suthar',
                'slug' => 'dr-raghav-suthar',
                'department' => 'Orthopedic',
                'speciality' => 'Joint Replacement Surgeon, Trauma & Limb Reconstruction Surgeon',
                'qualification' => 'MS Orthopedic',
                'phone_number' => null,
                'opd_timing' => '10 PM to 12 PM',
                'image' => null,
                'about' => 'Dr. Raghav Suthar provides orthopedic care with focus on joint replacement, trauma and limb reconstruction.',
                'areas_of_care' => [
                    'Joint Replacement',
                    'Orthopedic Trauma',
                    'Limb Reconstruction',
                    'Fracture Care',
                    'Joint Conditions'
                ],
                'patient_care_text' => 'Patients receive structured orthopedic evaluation, treatment planning and follow-up support according to their condition.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Vaidik Chauhan',
                'slug' => 'dr-vaidik-chauhan',
                'department' => 'ENT',
                'speciality' => 'Head, Neck, Skull Base Surgeon',
                'qualification' => 'MS ENT',
                'phone_number' => null,
                'opd_timing' => '04 PM to 06 PM',
                'image' => null,
                'about' => 'Dr. Vaidik Chauhan is a Head, Neck and Skull Base Surgeon providing specialised ENT consultation and surgical care.',
                'areas_of_care' => [
                    'Ear Disorders',
                    'Nose and Sinus Conditions',
                    'Throat Conditions',
                    'Head and Neck Conditions',
                    'Skull Base Conditions'
                ],
                'patient_care_text' => 'Care is focused on appropriate ENT evaluation, diagnosis, treatment planning and follow-up.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Dhaiwat Shukla',
                'slug' => 'dr-dhaiwat-shukla',
                'department' => 'Rheumatology',
                'speciality' => 'Rheumatologist & Clinical Immunologist',
                'qualification' => 'MD, PDF',
                'phone_number' => null,
                'opd_timing' => '06 PM to 08 PM',
                'image' => null,
                'about' => 'Dr. Dhaiwat Shukla provides rheumatology and clinical immunology consultation for arthritis, autoimmune and related conditions.',
                'areas_of_care' => [
                    'Arthritis',
                    'Autoimmune Disorders',
                    'Joint Disorders',
                    'Connective Tissue Conditions'
                ],
                'patient_care_text' => 'Patients receive focused evaluation and individualised treatment planning for rheumatological and immune-related conditions.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Vipul Patel',
                'slug' => 'dr-vipul-patel',
                'department' => 'Critical Care',
                'speciality' => 'Critical Care Physician',
                'qualification' => 'MD, IDCCM',
                'phone_number' => null,
                'opd_timing' => '04 PM to 06 PM',
                'image' => null,
                'about' => 'Dr. Vipul Patel provides critical care consultation and management for patients requiring specialised monitoring and medical attention.',
                'areas_of_care' => [
                    'Critical Illness',
                    'Intensive Care',
                    'Emergency Critical Care',
                    'Post-Operative Critical Care'
                ],
                'patient_care_text' => 'Critical care is focused on close monitoring, timely intervention and coordinated management according to patient needs.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Rajan Patel',
                'slug' => 'dr-rajan-patel',
                'department' => 'Critical Care',
                'speciality' => 'Critical Care Physician',
                'qualification' => 'MD, IDCCM',
                'phone_number' => null,
                'opd_timing' => '24*7',
                'image' => null,
                'about' => 'Dr. Rajan Patel provides critical care services for patients requiring close monitoring and specialised medical management.',
                'areas_of_care' => [
                    'Critical Care',
                    'Intensive Care',
                    'Critical Illness Management',
                    'Emergency Care'
                ],
                'patient_care_text' => 'Care focuses on continuous monitoring, timely medical intervention and coordinated critical care support.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Harsh Joshi',
                'slug' => 'dr-harsh-joshi',
                'department' => 'Critical Care',
                'speciality' => 'Critical Care Physician',
                'qualification' => 'DA, IDCCM',
                'phone_number' => null,
                'opd_timing' => '04 PM to 06 PM',
                'image' => null,
                'about' => 'Dr. Harsh Joshi provides critical care consultation and medical management for patients requiring specialised attention.',
                'areas_of_care' => [
                    'Critical Care',
                    'Intensive Care',
                    'Emergency Care',
                    'Post-Operative Care'
                ],
                'patient_care_text' => 'Care focuses on close observation, timely intervention and coordinated management of critically ill patients.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Rinku Patel',
                'slug' => 'dr-rinku-patel',
                'department' => 'Gynecology',
                'speciality' => 'Consultant Gynecologist',
                'qualification' => 'MBBS, D.G.O.',
                'phone_number' => null,
                'opd_timing' => '05 PM to 07 PM',
                'image' => null,
                'about' => 'Dr. Rinku Patel is a Consultant Gynecologist providing women-focused consultation and gynecological care.',
                'areas_of_care' => [
                    'General Gynecology',
                    'Women Health',
                    'Gynecological Conditions',
                    'Preventive Women Healthcare'
                ],
                'patient_care_text' => 'Care focuses on respectful consultation, appropriate diagnosis, personalised treatment planning and follow-up.',
                'is_active' => true,
            ],

            [
                'name' => 'Dr. Priyanka Prajapati',
                'slug' => 'dr-priyanka-prajapati',
                'department' => 'Physician',
                'speciality' => 'Consultant Physician',
                'qualification' => 'MD, Medicine',
                'phone_number' => null,
                'opd_timing' => '10 AM to 12 PM',
                'image' => null,
                'about' => 'Dr. Priyanka Prajapati is a Consultant Physician providing medical consultation, diagnosis and management for adult healthcare needs.',
                'areas_of_care' => [
                    'General Medicine',
                    'Adult Healthcare',
                    'Chronic Disease Care',
                    'Preventive Healthcare'
                ],
                'patient_care_text' => 'Patients receive detailed consultation, appropriate diagnosis, personalised treatment planning and follow-up care.',
                'is_active' => true,
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::updateOrCreate(
                ['slug' => $doctor['slug']],
                $doctor
            );
        }
    }

    private function seedFacilities(): void
    {
        $facilities = [
            [
                'title' => 'Beds with Central Oxygen',
                'slug' => 'beds-with-central-oxygen',
                'short_description' => 'Hospital beds supported by central oxygen infrastructure for inpatient healthcare and patient care requirements.',
                'main_image' => null,
                'secondary_image' => null,
                'section_heading' => 'Central Oxygen Supported Beds',
                'section_description' => 'Hospital beds with central oxygen support help provide appropriate care for patients requiring oxygen-assisted medical support.',
                'features' => [
                    'Central Oxygen Support',
                    'Inpatient Care',
                    'Patient Monitoring',
                    'Clinical Support'
                ],
                'bottom_heading' => 'Comfortable Inpatient Care',
                'bottom_description' => 'The facility supports patient care requirements with appropriate hospital infrastructure and medical support.',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title' => 'X-Ray',
                'slug' => 'x-ray',
                'short_description' => 'Diagnostic support through X-Ray facilities for clinical evaluation and treatment planning.',
                'main_image' => null,
                'secondary_image' => null,
                'section_heading' => 'X-Ray Diagnostic Facility',
                'section_description' => 'X-Ray diagnostic support assists doctors in evaluating injuries, bones and other clinical conditions.',
                'features' => [
                    'X-Ray Diagnostics',
                    'Clinical Evaluation',
                    'Injury Assessment',
                    'Treatment Planning Support'
                ],
                'bottom_heading' => 'Diagnostic Support',
                'bottom_description' => 'Diagnostic imaging supports timely evaluation and informed clinical decision-making.',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title' => '2 Modular Class 100 OT',
                'slug' => '2-modular-class-100-ot',
                'short_description' => 'Modern modular operation theatre facilities supporting planned and specialised surgical care.',
                'main_image' => null,
                'secondary_image' => null,
                'section_heading' => 'Modern Modular Operation Theatres',
                'section_description' => 'The hospital has modular operation theatre infrastructure designed to support planned and specialised surgical procedures.',
                'features' => [
                    '2 Modular Operation Theatres',
                    'Class 100 OT Environment',
                    'Surgical Infrastructure',
                    'Planned Surgical Care'
                ],
                'bottom_heading' => 'Surgical Infrastructure',
                'bottom_description' => 'Modern operating theatre infrastructure supports safe and organised surgical procedures.',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title' => '24×7 Emergency & Ambulance',
                'slug' => '24x7-emergency-ambulance',
                'short_description' => '24×7 emergency support for patients who need immediate medical attention.',
                'main_image' => null,
                'secondary_image' => null,
                'section_heading' => '24×7 Emergency Services',
                'section_description' => 'Emergency support is available around the clock for patients who require immediate medical attention.',
                'features' => [
                    '24×7 Emergency Support',
                    'Ambulance Services',
                    'Urgent Medical Attention',
                    'Emergency Care'
                ],
                'bottom_heading' => 'Emergency Care When Needed',
                'bottom_description' => 'Round-the-clock emergency support helps patients access timely medical attention when urgent care is required.',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title' => '6 Beds ICU with Dialysis',
                'slug' => '6-beds-icu-with-dialysis',
                'short_description' => 'Six-bed ICU facility with dialysis support for patients requiring close monitoring and critical care.',
                'main_image' => null,
                'secondary_image' => null,
                'section_heading' => 'ICU & Critical Care',
                'section_description' => 'The ICU provides critical care infrastructure for patients requiring close monitoring and specialised medical attention, with dialysis support available.',
                'features' => [
                    '6 ICU Beds',
                    'Critical Care Monitoring',
                    'Dialysis Support',
                    'Intensive Medical Care'
                ],
                'bottom_heading' => 'Specialised Critical Care',
                'bottom_description' => 'Critical care infrastructure supports patients who require continuous observation and specialised medical management.',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title' => '24×7 Laboratory & Pharmacy',
                'slug' => '24x7-laboratory-pharmacy',
                'short_description' => 'Hospital laboratory and pharmacy facilities supporting patient diagnosis and care around the clock.',
                'main_image' => null,
                'secondary_image' => null,
                'section_heading' => '24×7 Laboratory & Pharmacy',
                'section_description' => 'Laboratory and pharmacy services support diagnosis, treatment and ongoing patient care requirements.',
                'features' => [
                    '24×7 Laboratory',
                    '24×7 Pharmacy',
                    'Diagnostic Support',
                    'Patient Care Support'
                ],
                'bottom_heading' => 'Round-the-Clock Support',
                'bottom_description' => 'Continuous laboratory and pharmacy support helps meet important diagnostic and medication requirements.',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($facilities as $facility) {
            Facility::updateOrCreate(
                ['slug' => $facility['slug']],
                $facility
            );
        }
    }

    private function seedDepartmentDoctorMapping(): void
    {
        $mappings = [
            'urology' => [
                'dr-darshil-shah',
            ],

            'general-surgery' => [
                'dr-kunal-sathwara',
            ],

            'orthopedic' => [
                'dr-parth-patel',
                'dr-raghav-suthar',
            ],

            'ent' => [
                'dr-vaidik-chauhan',
            ],

            'rheumatology' => [
                'dr-dhaiwat-shukla',
            ],

            'critical-care' => [
                'dr-vipul-patel',
                'dr-rajan-patel',
                'dr-harsh-joshi',
            ],

            'gynecology' => [
                'dr-rinku-patel',
            ],

            'physician' => [
                'dr-priyanka-prajapati',
            ],
        ];

        foreach ($mappings as $departmentSlug => $doctorSlugs) {
            $department = Department::where('slug', $departmentSlug)->first();

            if (!$department) {
                continue;
            }

            foreach ($doctorSlugs as $doctorSlug) {
                $doctor = Doctor::where('slug', $doctorSlug)->first();

                if (!$doctor) {
                    continue;
                }

                $department->doctors()->syncWithoutDetaching([
                    $doctor->id,
                ]);
            }
        }
    }
}