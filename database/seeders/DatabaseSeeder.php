<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Position;
use App\Models\Bucket;
use App\Models\Events;
use App\Models\Info;
use App\Models\Payment;
use App\Models\Prices;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Events::create([
            'eventName' => "Hirework Job Festival 2023",
            'excerpt' => "
                <p>This year, Hirework Job Festival 2023 with the tagline of Magnify Yourself, Magnify Your Future is here to create a greater impact on society and to prepare yourself for the future.</p>
                ",
            "eventDesc" => "
            <p>This year, Hirework Job Festival 2023 with the tagline of Magnify Yourself, Magnify Your Future is here to create a greater impact on society and to prepare yourself for the future. By attending this event, you will gain more expertise on various job and employment opportunities.

This webinar will educate you more on the concepts of networking in today’s era. You will learn how to handle situations in the workplace and establish connections in different scenarios. Join us to discover more about networking. Let's magnify yourself, magnify your future!

Register yourself here!
And follow our Instagram for the latest and greatest news!

Don’t miss this chance and register yourself now! ✨</p>
                ",
            'eventDate' => date("Y-m-d", strtotime("+9 Months")),
            'slug' => "hirework-job-festival-2023"
        ]);
        Events::create([
            'eventName' => "Seminar OK",
            'excerpt' => "
                <p>Calling all students!📣 Are you looking for ways to get involved on campus and make the most of your university experience? Fear not, because we are presenting you Student Organization Seminar 2024!</p>
                ",
            "eventDesc" => "
                <p>Calling all students!📣 Are you looking for ways to get involved on campus and make the most of your university experience? Fear not, because we are presenting you Student Organization Seminar 2024! Through this event, you will be able to dive deep into the student organizations at UPH Medan Campus.

𝗦𝘁𝘂𝗱𝗲𝗻𝘁 𝗢𝗿𝗴𝗮𝗻𝗶𝘇𝗮𝘁𝗶𝗼𝗻 𝗦𝗲𝗺𝗶𝗻𝗮𝗿 𝟮𝟬𝟮𝟰 will be held on:
📆 Date: Tuesday, March 12, 2024
𝗦𝗲𝘀𝘀𝗶𝗼𝗻 𝟭
⌚️ Time: 14.00 - 15.00
💻 Place: BEM (LP 601-602)
𝗦𝗲𝘀𝘀𝗶𝗼𝗻 𝟮
⌚️ Time: 15.30 - 16.30
💻 Place: HMPSA (LP 606), HMPSM (LP 702), HMPSH (LP 610), HMPSSI (LP 501), HMPSIF (LP 704)

You can choose between two sessions, BEM (Badan Eksekutif Mahasiswa) or HMPS (Himpunan Mahasiswa Program Studi), or even better enroll in both sessions!

So are you ready to 𝘁𝗮𝗸𝗲 𝘁𝗵𝗲 𝗰𝗵𝗮𝗻𝗰𝗲, 𝗮𝗻𝗱 𝘀𝗵𝗼𝘄 𝘆𝗼𝘂𝗿 𝘀𝗵𝗶𝗻𝗲 by signing up here. We can’t wait to see you there!

#StudentOrganizationSeminar2024</p>
                ",
            'eventDate' => date("Y-m-d", strtotime("+6 Months")),
            'slug' => "seminar-ok"
        ]);
        Events::factory(50)->create();
        Info::factory(1)->create();
        User::create([
            "firstName" => 'Samuel',
            'lastName'=> 'Zakaria',
            'email' => 'samuelzakaria28@gmail.com',
            'phone' => '+6281370309604',
            'isAdmin' => 1,
            'password'=> Hash::make('NightFURY28'),
        ]);
        User::create([
            "firstName" => 'admin',
            'email' => 'admin@gmail.com',
            'isAdmin' => 1,
            'phone' => "admin",
            'password'=> Hash::make('admin'),
        ]);
        Position::create([
            "desc" => 'Mahasiswa',
        ]);
        Position::create([
            "desc" => 'Publik',
        ]);
        Prices::factory(40)->create();
    }
}
