<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // 1. ข้อมูลตาราง Title (คำนำหน้านาม) - 4 เรคอร์ด
        DB::table('titles')->insert([
            ['id' => 1, 'name' => 'นาย', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'นาง', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'นางสาว', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'name' => 'ดร.', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 2. ข้อมูลตาราง Organization (องค์กร/หน่วยงาน) - 3 เรคอร์ด
        DB::table('organizations')->insert([
            [
                'id' => 1,
                'name' => 'มูลนิธิพัฒนาชุมชนยั่งยืน',
                'code' => 'ORG-001',
                'phone' => '02-123-4567',
                'email' => 'contact@sustainabledev.or.th',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'name' => 'สมาคมส่งเสริมสิ่งแวดล้อมไทย',
                'code' => 'ORG-002',
                'phone' => '02-987-6543',
                'email' => 'info@green-thai.org',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'name' => 'ศูนย์การเรียนรู้ดิจิทัลเพื่อสังคม',
                'code' => 'ORG-003',
                'phone' => '053-111-222',
                'email' => 'admin@digitalsociety.or.th',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);

        // 3. ข้อมูลตาราง Community (ชุมชน) - 3 เรคอร์ด
        DB::table('communities')->insert([
            [
                'id' => 1,
                'name' => 'ชุมชนคลองเตยพัฒนา',
                'subdistrict' => 'คลองเตย',
                'district' => 'คลองเตย',
                'province' => 'กรุงเทพมหานคร',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'name' => 'ชุมชนบ้านป่าแดด',
                'subdistrict' => 'ป่าแดด',
                'district' => 'เมือง',
                'province' => 'เชียงใหม่',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'name' => 'ชุมชนเขาน้อยวิลเลจ',
                'subdistrict' => 'หัวหิน',
                'district' => 'หัวหิน',
                'province' => 'ประจวบคีรีขันธ์',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);

        // 4. ข้อมูลตาราง Staff (เจ้าหน้าที่) - 3 เรคอร์ด
        DB::table('staff')->insert([
            [
                'id' => 1,
                'title_id' => 1,
                'organization_id' => 1,
                'first_name' => 'สมชาย',
                'last_name' => 'ใจดี',
                'email' => 'somchai@sustainabledev.or.th',
                'phone' => '081-234-5678',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'title_id' => 3,
                'organization_id' => 2,
                'first_name' => 'ศิริพร',
                'last_name' => 'วิเศษคุณ',
                'email' => 'siriporn@green-thai.org',
                'phone' => '089-876-5432',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'title_id' => 4,
                'organization_id' => 3,
                'first_name' => 'ณัฐพงษ์',
                'last_name' => 'สุขสวัสดิ์',
                'email' => 'nattapong@digitalsociety.or.th',
                'phone' => '086-555-4321',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);

        // 5. ข้อมูลตาราง Activities (กิจกรรม) - 3 เรคอร์ด
        DB::table('activities')->insert([
            [
                'id' => 1,
                'title' => 'โครงการอบรมทักษะดิจิทัลเพื่อผู้สูงอายุ',
                'description' => 'การสอนใช้งานสมาร์ตโฟนและแอปพลิเคชันรัฐบาลเพื่อผู้สูงวัย',
                'organization_id' => 3,
                'community_id' => 2,
                'activity_date' => '2026-11-10',
                'budget' => 45000.00,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'title' => 'กิจกรรมปลูกป่าชายเลนและเก็บขยะชายฝั่ง',
                'description' => 'โครงการฟื้นฟูระบบนิเวศและส่งเสริมจิตสำนึกอนุรักษ์ธรรมชาติ',
                'organization_id' => 2,
                'community_id' => 1,
                'activity_date' => '2026-11-25',
                'budget' => 80000.00,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'title' => 'หน่วยแพทย์เคลื่อนที่และตรวจสุขภาพชุมชน',
                'description' => 'การให้บริการตรวจสุขภาพเบื้องต้นและแจกตู้ยาประจำชุมชน',
                'organization_id' => 1,
                'community_id' => 3,
                'activity_date' => '2026-12-05',
                'budget' => 120000.00,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}