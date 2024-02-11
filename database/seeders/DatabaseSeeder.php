<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Position;
use App\Models\Buckets;
use App\Models\Events;
use App\Models\History;
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
            'eventName' => "Simposium Lengan",
            'excerpt' => "
                <p>Simposium Lengan 2024 menghadirkan sorotan pada kesehatan lengan dan terobosan terbaru dalam perawatan dan inovasi. Peserta diajak untuk memahami biomekanika lengan, mengeksplorasi solusi teknologi canggih, dan meresapi seni gerakan dalam desain bantuan lengan. Komunitas global berbagi ide kreatif untuk mendukung kekuatan gerakan lengan, mengarah pada masa depan yang lebih sehat dan dinamis. 💪✨ #SimposiumLengan2024 #GerakanMasaDepan #KesejahteraanLengan</p>
            ",
            "eventDesc" => "
                <p>Simposium Kaki 2024 mengulas pembaruan kesehatan kaki dan terobosan alas kaki terkini. Para peserta menjelajahi biomekanika kaki, mengeksplorasi inovasi teknologi, dan merayakan seni gerakan dalam desain. Bersama, komunitas global berbagi ide kreatif untuk mendukung kesejahteraan kaki. Simposium ini merayakan masa depan kesehatan kaki untuk dunia yang lebih sehat dan aktif.👣✨ #SimposiumKaki2024 #JejakLebihJauh #KesejahteraanKaki</p><p>Selamat datang dalam perjalanan ilmiah yang menginspirasi di Simposium Lengan 2024! Bergabunglah dengan kami dalam penjelajahan mendalam mengenai kesehatan lengan dan inovasi terkini yang akan membuka wawasan baru tentang kehebatan gerakan dan kesejahteraan. Sediakan diri Anda untuk merasakan petualangan luar biasa ini di dunia yang dipenuhi dengan temuan terkini dan perubahan revolusioner pada lengan.</p><p>💪 &nbsp;Pilar Kekuatan: &nbsp; Menyelami kompleksitas struktur lengan dan dampaknya terhadap kesehatan dan mobilitas. Ahli-ahli terkemuka akan memandu Anda melalui penelitian terbaru tentang biomekanika lengan, memberikan pemahaman yang mendalam tentang peran lengan dalam kehidupan sehari-hari kita.</p><p>🤖 &nbsp;Inovasi Terkini: &nbsp; Temukan terobosan terkini dalam teknologi bantuan lengan dan rehabilitasi yang akan mengubah cara kita mendukung gerakan kita. Dari prostetika yang cerdas hingga terapi inovatif, kita akan menjelajahi bagaimana inovasi ini membuka pintu menuju mobilitas yang lebih baik dan kehidupan yang lebih aktif.</p><p>🎨 &nbsp;Seni Gerakan: &nbsp; Simposium Lengan bukan hanya tentang ilmu pengetahuan, tetapi juga tentang seni gerakan. Pelajari bagaimana desain bantuan lengan dapat menjadi karya seni, menggabungkan desain fungsional dengan estetika untuk menciptakan produk yang tidak hanya fungsional tetapi juga memukau secara visual.</p><p>🤝 &nbsp;Bersatu dalam Kesejahteraan: &nbsp; Bergabunglah dengan komunitas global para ahli, desainer, dan peneliti yang peduli dengan kesejahteraan lengan. Diskusikan ide-ide kreatif, jalin koneksi, dan bersama-sama kita menjelajahi cara-cara baru untuk merawat dan mendukung kekuatan gerakan lengan.</p><p>✨ &nbsp;Mengukir Masa Depan: &nbsp; Simposium Lengan 2024 bukan hanya tentang memahami lengan saat ini, tetapi juga merayakan potensi masa depan. Mari bersama-sama kita menciptakan gerakan yang kuat menuju dunia yang lebih sehat dan aktif, di mana setiap gerakan lengan kita memiliki makna dan kontribusi positif.</p><p>Segera daftarkan diri Anda untuk bergabung dalam petualangan tak terlupakan ini. Jangan lewatkan kesempatan untuk menjelajahi dunia yang baru di Simposium Lengan 2024, di mana ilmu pengetahuan bertemu dengan seni gerakan, dan kita merangkul keajaiban gerakan bersama-sama! 💪✨ #SimposiumLengan2024 #GerakanMasaDepan #KesejahteraanLengan</p>
            ",
            'eventDate' => date("Y-m-d", strtotime("+9 Months")),
            'slug' => "simposium-lengan",
            'status' => 1
        ]);
        Events::create([
            'eventName' => "Simposium Kaki",
            'excerpt' => "
                <p>Simposium Kaki 2024 mengulas pembaruan kesehatan kaki dan terobosan alas kaki terkini. Para peserta menjelajahi biomekanika kaki, mengeksplorasi inovasi teknologi, dan merayakan seni gerakan dalam desain. Bersama, komunitas global berbagi ide kreatif untuk mendukung kesejahteraan kaki. Simposium ini merayakan masa depan kesehatan kaki untuk dunia yang lebih sehat dan aktif.👣✨ #SimposiumKaki2024 #JejakLebihJauh #KesejahteraanKaki</p>
            ",
            "eventDesc" => "
                <p>Selamat datang di perjalanan ilmiah yang revolusioner di Simposium Kaki 2024! Bergabunglah dengan kami dalam eksplorasi mendalam tentang kesehatan dan inovasi kaki yang akan membuka cakrawala baru bagi pemahaman kita tentang fondasi gerakan dan kesejahteraan. Siapkan diri Anda untuk merasakan petualangan luar biasa ini dalam dunia yang dipenuhi dengan penemuan terkini dan inovasi kaki.</p><p>👣 &nbsp;Langkah Pertama: &nbsp; Jelajahi kompleksitas struktur kaki dan pengaruhnya terhadap kesehatan dan kesejahteraan. Para ahli akan membimbing Anda melalui penelitian terbaru tentang biomekanika kaki, memberikan wawasan mendalam tentang peran yang dimainkan oleh kaki dalam kehidupan sehari-hari.</p><p>👟 &nbsp;Inovasi Terkini: &nbsp; Temukan terobosan terkini dalam teknologi alas kaki dan perawatan kaki yang akan mengubah cara kita mendukung langkah-langkah kita. Dari sepatu pintar hingga terapi inovatif, kita akan menjelajahi bagaimana inovasi ini membuka peluang baru untuk kesehatan kaki dan mobilitas yang lebih baik.</p><p>🎨 &nbsp;Seni Gerakan: &nbsp; Simposium Kaki bukan hanya tentang ilmu pengetahuan, tetapi juga tentang seni gerakan. Pelajari bagaimana desain alas kaki dapat menjadi ekspresi seni, menggabungkan desain fungsional dengan estetika untuk menciptakan produk yang tidak hanya nyaman tetapi juga bergaya.</p><p>🤝 &nbsp;Bersatu Dalam Kesejahteraan: &nbsp; Bergabunglah dengan komunitas global para ahli, peneliti, dan pecinta kebugaran yang peduli pada kesejahteraan kaki. Diskusikan ide-ide inovatif, jalin koneksi, dan bersama-sama kita menjelajahi cara-cara baru untuk merawat dan mendukung langkah-langkah kita.</p><p>✨ &nbsp;Mengukir Masa Depan: &nbsp; Simposium Kaki 2024 bukan hanya tentang memahami kaki saat ini, tetapi juga merayakan potensi masa depan. Mari bersama-sama kita menciptakan jejak yang kuat menuju dunia yang lebih sehat dan bergerak, di mana setiap langkah kita memiliki arti dan dampak positif.</p><p>Segera daftarkan diri Anda untuk mengikuti petualangan tak terlupakan ini. Jangan lewatkan kesempatan untuk menjelajahi dunia yang baru di Simposium Kaki 2024, di mana ilmu pengetahuan bertemu dengan seni gerakan, dan kita melangkah lebih jauh bersama! 👣✨ #SimposiumKaki2024 #JejakLebihJauh #KesejahteraanKaki</p>
            ",
            'eventDate' => date("Y-m-d", strtotime("+6 Months")),
            'slug' => "simposium-kaki",
            'status' => 1
        ]);
        Events::factory(2)->create();
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
            "desc" => 'Dokter',
        ]);
        Position::create([
            "desc" => 'Spesialis',
        ]);
        Position::create([
            "desc" => 'Spesialis / PPDS',
        ]);
        Position::create([
            "desc" => 'Konsultan',
        ]);
        Position::create([
            "desc" => 'Perawat',
        ]);
        Position::create([
            "desc" => 'Bidan',
        ]);
        Prices::factory(40)->create();
    }
}
