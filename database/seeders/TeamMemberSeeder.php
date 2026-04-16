<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name'          => 'Bill Gerlach',
                'role'          => 'Co-Founder',
                'bio'           => 'On July 17th, 2023 the unthinkable happened. Our co-founder Bill Gerlach passed away unexpectedly. The organization remains dedicated to fulfilling his vision for mental health support.',
                'photo'         => 'team-photos/Billy-1.png',
                'display_order' => 1,
                'is_active'     => true,
            ],
            [
                'name'          => 'Bryan Gray',
                'role'          => 'CEO & Co-Founder',
                'bio'           => 'Bryan has 20+ years\' experience as a counselor, business consultant, Chief Marketing Officer, Chief Operating Officer, and Chief Executive Officer in technology startups including co-founding Swoonbox, Inc. He specializes in leadership development and strength-based teams. Bryan holds a Bachelor of Arts degree from Carnegie Mellon University.',
                'photo'         => 'team-photos/Bryan.png',
                'display_order' => 2,
                'is_active'     => true,
            ],
            [
                'name'          => 'Lester Leong',
                'role'          => 'CTO & Co-Founder',
                'bio'           => 'Lester is the Co-founder and Chief Technical Officer with 10 years\' experience building full-stack scalable systems. He began programming at age 12 and holds a Bachelor of Science degree in Computer Science and Biology. His passion centers on the intersection of culture and technology.',
                'photo'         => 'team-photos/Lester.png',
                'display_order' => 3,
                'is_active'     => true,
            ],
            [
                'name'          => 'Nancy French-Gerlach',
                'role'          => 'CFO & Co-Founder',
                'bio'           => 'Nancy is a former Chief Operating Officer and Marketing Director at a major accounting firm, and served as Operational Excellence Director of a global manufacturing company. She works as an executive coach and holds a Bachelor of Science degree in Accounting. She is dedicated to eliminating the stigma surrounding addiction after losing her son.',
                'photo'         => 'team-photos/Nancy-f.png',
                'display_order' => 4,
                'is_active'     => true,
            ],
            [
                'name'          => 'Shannon Green',
                'role'          => 'Director of Customer Support',
                'bio'           => 'Shannon has 7+ years\' experience managing customer support and sales for a global technology company. She emphasizes relationships, problem-solving, and proactive training. Shannon holds a Bachelor of Arts Degree in Communication and Journalism.',
                'photo'         => 'team-photos/Shannon-Green.png',
                'display_order' => 5,
                'is_active'     => true,
            ],
            [
                'name'          => 'Pasha Dashtgard',
                'role'          => 'Director of Counselor Training',
                'bio'           => 'Pasha has 12 years\' experience providing mental health and drug and alcohol counseling services and volunteer crisis training. He holds master\'s degrees in mental health counseling and education from Columbia University, plus doctoral studies at UC Irvine. He has published PTSD research and studied criminal justice mental health treatment in California.',
                'photo'         => 'team-photos/Pasha-1.png',
                'display_order' => 6,
                'is_active'     => true,
            ],
            [
                'name'          => 'Dr. Sarah French Brennan',
                'role'          => 'Director of Client Research',
                'bio'           => 'Sarah is an anthropologist who has researched, reported, and presented at professional conferences worldwide on LGBTQ and immigrant issues, focusing on mental health and addiction barriers. She holds a PhD from Columbia University and applies her research expertise to understanding addiction epidemiology.',
                'photo'         => 'team-photos/Sarah-1.png',
                'display_order' => 7,
                'is_active'     => true,
            ],
            [
                'name'          => 'Dr. John N. Brennan',
                'role'          => 'Board Member & Advisor',
                'bio'           => 'John is a licensed psychotherapist who provided individual and family therapy to families of emotionally disturbed children for 10 years. He holds an Ed.D. from the University of Rochester, founded an international sales training company, and maintains 27 years of sobriety while supporting family members with mental illness.',
                'photo'         => 'team-photos/John-1.png',
                'display_order' => 8,
                'is_active'     => true,
            ],
            [
                'name'          => 'Tyler Greener',
                'role'          => 'Content Manager & Sales Representative',
                'bio'           => 'Tyler is dedicated to helping others find direction through mental health work. He holds a Bachelor of Arts Degree in English focused on creative writing, communications, and marketing from Saint Joseph\'s University.',
                'photo'         => 'team-photos/Tyler.png',
                'display_order' => 9,
                'is_active'     => true,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::updateOrCreate(
                ['name' => $member['name']],
                $member
            );
        }
    }
}
