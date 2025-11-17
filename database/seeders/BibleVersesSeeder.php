<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibleVersesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * NOTE: Uses KJV (King James Version) which is public domain.
     * For modern translations (NIV, ESV, etc.), you must obtain licensing.
     */
    public function run(): void
    {
        $verses = [];

        // Add Genesis 1 (Complete - 31 verses)
        $verses = array_merge($verses, $this->getGenesis1());

        // Add Psalm 23 (Complete - 6 verses)
        $verses = array_merge($verses, $this->getPsalm23());

        // Add Popular Memory Verses
        $verses = array_merge($verses, $this->getPopularVerses());

        // Add Book of John - Chapter 1 (sample, add more chapters as needed)
        $verses = array_merge($verses, $this->getJohn1());

        // Add John 3 (includes famous John 3:16)
        $verses = array_merge($verses, $this->getJohn3());

        // Insert all verses
        foreach (array_chunk($verses, 500) as $chunk) {
            DB::table('bible_verses')->insert($chunk);
        }

        $this->command->info('Created ' . count($verses) . ' Bible verses in KJV translation');
        $this->command->info('Includes: Genesis 1, Psalm 23, John 1, John 3, and popular memory verses');
    }

    private function getGenesis1(): array
    {
        return [
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 1, 'text' => 'In the beginning God created the heaven and the earth.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 2, 'text' => 'And the earth was without form, and void; and darkness was upon the face of the deep. And the Spirit of God moved upon the face of the waters.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 3, 'text' => 'And God said, Let there be light: and there was light.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 4, 'text' => 'And God saw the light, that it was good: and God divided the light from the darkness.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 5, 'text' => 'And God called the light Day, and the darkness he called Night. And the evening and the morning were the first day.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 6, 'text' => 'And God said, Let there be a firmament in the midst of the waters, and let it divide the waters from the waters.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 7, 'text' => 'And God made the firmament, and divided the waters which were under the firmament from the waters which were above the firmament: and it was so.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 8, 'text' => 'And God called the firmament Heaven. And the evening and the morning were the second day.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 9, 'text' => 'And God said, Let the waters under the heaven be gathered together unto one place, and let the dry land appear: and it was so.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 10, 'text' => 'And God called the dry land Earth; and the gathering together of the waters called he Seas: and God saw that it was good.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 11, 'text' => 'And God said, Let the earth bring forth grass, the herb yielding seed, and the fruit tree yielding fruit after his kind, whose seed is in itself, upon the earth: and it was so.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 12, 'text' => 'And the earth brought forth grass, and herb yielding seed after his kind, and the tree yielding fruit, whose seed was in itself, after his kind: and God saw that it was good.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 13, 'text' => 'And the evening and the morning were the third day.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 14, 'text' => 'And God said, Let there be lights in the firmament of the heaven to divide the day from the night; and let them be for signs, and for seasons, and for days, and years:'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 15, 'text' => 'And let them be for lights in the firmament of the heaven to give light upon the earth: and it was so.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 16, 'text' => 'And God made two great lights; the greater light to rule the day, and the lesser light to rule the night: he made the stars also.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 17, 'text' => 'And God set them in the firmament of the heaven to give light upon the earth,'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 18, 'text' => 'And to rule over the day and over the night, and to divide the light from the darkness: and God saw that it was good.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 19, 'text' => 'And the evening and the morning were the fourth day.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 20, 'text' => 'And God said, Let the waters bring forth abundantly the moving creature that hath life, and fowl that may fly above the earth in the open firmament of heaven.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 21, 'text' => 'And God created great whales, and every living creature that moveth, which the waters brought forth abundantly, after their kind, and every winged fowl after his kind: and God saw that it was good.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 22, 'text' => 'And God blessed them, saying, Be fruitful, and multiply, and fill the waters in the seas, and let fowl multiply in the earth.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 23, 'text' => 'And the evening and the morning were the fifth day.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 24, 'text' => 'And God said, Let the earth bring forth the living creature after his kind, cattle, and creeping thing, and beast of the earth after his kind: and it was so.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 25, 'text' => 'And God made the beast of the earth after his kind, and cattle after their kind, and every thing that creepeth upon the earth after his kind: and God saw that it was good.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 26, 'text' => 'And God said, Let us make man in our image, after our likeness: and let them have dominion over the fish of the sea, and over the fowl of the air, and over the cattle, and over all the earth, and over every creeping thing that creepeth upon the earth.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 27, 'text' => 'So God created man in his own image, in the image of God created he him; male and female created he them.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 28, 'text' => 'And God blessed them, and God said unto them, Be fruitful, and multiply, and replenish the earth, and subdue it: and have dominion over the fish of the sea, and over the fowl of the air, and over every living thing that moveth upon the earth.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 29, 'text' => 'And God said, Behold, I have given you every herb bearing seed, which is upon the face of all the earth, and every tree, in the which is the fruit of a tree yielding seed; to you it shall be for meat.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 30, 'text' => 'And to every beast of the earth, and to every fowl of the air, and to every thing that creepeth upon the earth, wherein there is life, I have given every green herb for meat: and it was so.'],
            ['translation' => 'KJV', 'book' => 'Genesis', 'book_number' => 1, 'chapter' => 1, 'verse' => 31, 'text' => 'And God saw every thing that he had made, and, behold, it was very good. And the evening and the morning were the sixth day.'],
        ];
    }

    private function getPsalm23(): array
    {
        return [
            ['translation' => 'KJV', 'book' => 'Psalms', 'book_number' => 19, 'chapter' => 23, 'verse' => 1, 'text' => 'The LORD is my shepherd; I shall not want.'],
            ['translation' => 'KJV', 'book' => 'Psalms', 'book_number' => 19, 'chapter' => 23, 'verse' => 2, 'text' => 'He maketh me to lie down in green pastures: he leadeth me beside the still waters.'],
            ['translation' => 'KJV', 'book' => 'Psalms', 'book_number' => 19, 'chapter' => 23, 'verse' => 3, 'text' => 'He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake.'],
            ['translation' => 'KJV', 'book' => 'Psalms', 'book_number' => 19, 'chapter' => 23, 'verse' => 4, 'text' => 'Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me.'],
            ['translation' => 'KJV', 'book' => 'Psalms', 'book_number' => 19, 'chapter' => 23, 'verse' => 5, 'text' => 'Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over.'],
            ['translation' => 'KJV', 'book' => 'Psalms', 'book_number' => 19, 'chapter' => 23, 'verse' => 6, 'text' => 'Surely goodness and mercy shall follow me all the days of my life: and I will dwell in the house of the LORD for ever.'],
        ];
    }

    private function getPopularVerses(): array
    {
        return [
            // Proverbs 3:5-6
            ['translation' => 'KJV', 'book' => 'Proverbs', 'book_number' => 20, 'chapter' => 3, 'verse' => 5, 'text' => 'Trust in the LORD with all thine heart; and lean not unto thine own understanding.'],
            ['translation' => 'KJV', 'book' => 'Proverbs', 'book_number' => 20, 'chapter' => 3, 'verse' => 6, 'text' => 'In all thy ways acknowledge him, and he shall direct thy paths.'],

            // Jeremiah 29:11
            ['translation' => 'KJV', 'book' => 'Jeremiah', 'book_number' => 24, 'chapter' => 29, 'verse' => 11, 'text' => 'For I know the thoughts that I think toward you, saith the LORD, thoughts of peace, and not of evil, to give you an expected end.'],

            // Philippians 4:13
            ['translation' => 'KJV', 'book' => 'Philippians', 'book_number' => 50, 'chapter' => 4, 'verse' => 13, 'text' => 'I can do all things through Christ which strengtheneth me.'],

            // Romans 3:23
            ['translation' => 'KJV', 'book' => 'Romans', 'book_number' => 45, 'chapter' => 3, 'verse' => 23, 'text' => 'For all have sinned, and come short of the glory of God;'],

            // Romans 6:23
            ['translation' => 'KJV', 'book' => 'Romans', 'book_number' => 45, 'chapter' => 6, 'verse' => 23, 'text' => 'For the wages of sin is death; but the gift of God is eternal life through Jesus Christ our Lord.'],

            // Romans 8:28
            ['translation' => 'KJV', 'book' => 'Romans', 'book_number' => 45, 'chapter' => 8, 'verse' => 28, 'text' => 'And we know that all things work together for good to them that love God, to them who are the called according to his purpose.'],

            // Ephesians 2:8-9
            ['translation' => 'KJV', 'book' => 'Ephesians', 'book_number' => 49, 'chapter' => 2, 'verse' => 8, 'text' => 'For by grace are ye saved through faith; and that not of yourselves: it is the gift of God:'],
            ['translation' => 'KJV', 'book' => 'Ephesians', 'book_number' => 49, 'chapter' => 2, 'verse' => 9, 'text' => 'Not of works, lest any man should boast.'],

            // Matthew 28:19-20
            ['translation' => 'KJV', 'book' => 'Matthew', 'book_number' => 40, 'chapter' => 28, 'verse' => 19, 'text' => 'Go ye therefore, and teach all nations, baptizing them in the name of the Father, and of the Son, and of the Holy Ghost:'],
            ['translation' => 'KJV', 'book' => 'Matthew', 'book_number' => 40, 'chapter' => 28, 'verse' => 20, 'text' => 'Teaching them to observe all things whatsoever I have commanded you: and, lo, I am with you always, even unto the end of the world. Amen.'],
        ];
    }

    private function getJohn1(): array
    {
        return [
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 1, 'text' => 'In the beginning was the Word, and the Word was with God, and the Word was God.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 2, 'text' => 'The same was in the beginning with God.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 3, 'text' => 'All things were made by him; and without him was not any thing made that was made.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 4, 'text' => 'In him was life; and the life was the light of men.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 5, 'text' => 'And the light shineth in darkness; and the darkness comprehended it not.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 6, 'text' => 'There was a man sent from God, whose name was John.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 7, 'text' => 'The same came for a witness, to bear witness of the Light, that all men through him might believe.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 8, 'text' => 'He was not that Light, but was sent to bear witness of that Light.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 9, 'text' => 'That was the true Light, which lighteth every man that cometh into the world.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 10, 'text' => 'He was in the world, and the world was made by him, and the world knew him not.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 11, 'text' => 'He came unto his own, and his own received him not.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 12, 'text' => 'But as many as received him, to them gave he power to become the sons of God, even to them that believe on his name:'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 13, 'text' => 'Which were born, not of blood, nor of the will of the flesh, nor of the will of man, but of God.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 1, 'verse' => 14, 'text' => 'And the Word was made flesh, and dwelt among us, (and we beheld his glory, the glory as of the only begotten of the Father,) full of grace and truth.'],
        ];
    }

    private function getJohn3(): array
    {
        return [
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 3, 'verse' => 16, 'text' => 'For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life.'],
            ['translation' => 'KJV', 'book' => 'John', 'book_number' => 43, 'chapter' => 3, 'verse' => 17, 'text' => 'For God sent not his Son into the world to condemn the world; but that the world through him might be saved.'],
        ];
    }
}
