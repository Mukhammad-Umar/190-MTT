<?php

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Gallery;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Users
        User::create(
            [
                'name' => 'admin',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('umary803'),
            ]
        );
        User::create(
            [
                'name' => 'king',
                'role' => 'redac',
                'email' => 'king@gmail.com',
                'password' => bcrypt('123qwert'),
            ]
        );

        // News
        News::create(
            [
                'title' => 'MTTDA BOLALAR TAʹMINOTI UCHUN TO‘LOVLARNI QAYTA HISOBLASH TO‘G‘RISIDA',
                'information' => 'O‘zbekiston Respublikasi Maktabgacha ta’lim vazirligi sizlarga shuni ma’lum qiladiki, bolalarning MTTda bo‘lgan davri uchun to‘langan to‘lovlarning qayta hisoblanishi 2016 yil 23 avgustdagi №2821 sonli “Maktabgacha ta’lim tashkilotlari va maktab-internatlarda bolalarning ta’minoti uchun to‘lovni amalga oshirish tartibi to‘g‘risidagi Nizom”ga asosan quyidagicha amalga oshiriladi:
                    — MTTda bolaning ta’minoti uchun olingan to‘lovlar uni ovqatlantirishga yo‘naltiriladi (Nizomning 2-bandi);
                    — agar bola 3 kundan ko‘p muddat mobaynida MTTga bormagan bo‘lsa, bu davr uchun amalga oshirilgan to‘lov bolalarning MTTda bo‘lishi bo‘yicha kelgusi to‘lovlarni amalga oshirishda inobatga olinadi (Nizomning 13-bandi);'
            ]
        );
        News::create(
            [
                'title' => 'ERTAK TERAPIYASI BOLADAGI MUAMMOLARNI BARTARAF ETISH USULI SIFATIDA.',
                'information' => 'Ertak terapiyasi nima? Ertak terapiyasi bola idroki uchun murakkab narsalarni unga yengil shaklda etkazish,u bilan ertak yordamida ishonchli aloqa o‘rnatish , unga yaqin kishiga aylanish usullaridan biridir.

                Farzandlar ota-onalaridan nima yaxshi va nima yomonligini sorab organsa, oilada ota-onaning bola bilan muloqoti yolga qoyilgan bo`lsa, bu nafaqat bolalarning ahloqiy qadriyatlarini shakllantiradi, balki bolaning ota-onasiga bo`lgan ishonchini ham oshiradi.'
            ]
        );
        News::create(
            [
                'title' => 'AUTIZM NIMA ?',
                'information' => 'Bugungi kunda 67 milliondan ortiq autizmli bolalar yashamoqda, 160 nafar bolalardan biri autizm spektri bilan kasallangan.Autizm sindromli bola har xil rivojlanadi va aloqa muammolari, g`ayrioddiy xatti-harakatlari, cheklangan qiziqishlari bilan ajralib turadi. Albert Eynshteyn, Motsart, Charlz Darvin, Isaak Nyutonda ham Autizm belgilari kuzatilgan. Ota-onalar qanday belgi va alomatlarni kuzatishi mumkin? Erta tashxis qo`yish, samarali terapiya va keng qamrovli tibbiy va psixologik reabilitatsiya yordamida bolalar o`zlarining jamiyatdagi imkoniyatlarini amalga oshira oladi. Ota-onalar va mutaxassislarni 20 iyul, dushanba (rus tilida) va 22 iyul chorshanba (o`zbek tilida) soat 18: 05da "Olaviy" telekanalida yosh bolalardagi autizmning holatiga bag`ishlangan "Salomatlik alifbosi" ko`rsatuvida tomosha qilishga taklif qilamiz.'
            ]
        );
        

        // Gallery
        Gallery::create(
            [
                'image' => 'gallery/pic1.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic2.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic3.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic4.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic5.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic6.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic7.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic8.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic9.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic10.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic11.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic12.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic13.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic14.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic15.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic16.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic17.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic18.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic19.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic20.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic21.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic22.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic23.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic24.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic25.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic26.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic27.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic28.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic29.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic30.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic31.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic32.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic33.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic34.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic35.jpg'
            ]
        );

    }
}
