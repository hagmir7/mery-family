<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'description' => "Welcome to our project dedicated to preserving and sharing the life story of
            <strong>Said Seghrouchni Idrissi.</strong> <br>
            Said Seghrouchni Idrissi Born on <strong> October 6, 1962, in Morocco</strong> and departed on
            <strong> July 16, 2021, In USA </strong>
            Said's journey through life was a remarkable one that bridged two worlds
            - Morocco and the United States.",

            'image' => 'img/said_13.jpeg',

        ]);

        About::create([
            'description'=>"Said spent his childhood in Morocco, where he forged his earliest memories, traditions, and
            values. It was in this vibrant and culturally rich environment that he learned about the
            importance of family, community, and the enduring heritage of Morocco.
            <br>
            <br>
            Later in life, Said embarked on a new chapter, relocating to the United States. In this diverse
            and dynamic country, he embraced new opportunities, forged connections, and contributed to the
            rich tapestry of American society. His story serves as a testament to the power of cultural
            exchange and the ability to bridge cultures and generations.",

            'image' => 'img/said_14.jpeg',
        ]);

        About::create([
            'description'=>"Tragically, Said's journey reached its conclusion in July 2021, and he was laid to rest in
            Morocco, next to his father. His legacy lives on through this project, a digital memorial that
            honors his life and allows others to explore the rich tapestry of his experiences.",

            'image' => 'img/mortSaid.jpeg',
        ]);

        About::create([
            'description'=>"  the seconde principle of zak is to provide a platform that goes beyond Said's personal
            story. This website is designed for those curious about history and eager to learn more. It
            offers a personalized glimpse into Moroccan culture, business, and the broader spectrum of
            life through the lens of our family's history. We believe that other families may be
            inspired to create their own digital family history archives, ensuring that their stories
            endure for eternity.
            <br> <br>
            Join us on this journey through Said Seghrouchni Idrissi's life and explore the diverse and
            captivating narrative that transcends borders, cultures, and generations. Experience the
            power of storytelling and the enduring legacy of a life well-lived.",

            'image' => 'img/zak.png',

            'name'=>'Zak Segheouchni Idrissi',

            'is_owner'=>true,
        ]);
    }
}
