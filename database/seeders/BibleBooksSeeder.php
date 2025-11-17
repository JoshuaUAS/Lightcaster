<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibleBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            // OLD TESTAMENT
            ['name' => 'Genesis', 'abbreviation' => 'Gen', 'book_number' => 1, 'testament' => 'Old', 'chapter_count' => 50],
            ['name' => 'Exodus', 'abbreviation' => 'Exod', 'book_number' => 2, 'testament' => 'Old', 'chapter_count' => 40],
            ['name' => 'Leviticus', 'abbreviation' => 'Lev', 'book_number' => 3, 'testament' => 'Old', 'chapter_count' => 27],
            ['name' => 'Numbers', 'abbreviation' => 'Num', 'book_number' => 4, 'testament' => 'Old', 'chapter_count' => 36],
            ['name' => 'Deuteronomy', 'abbreviation' => 'Deut', 'book_number' => 5, 'testament' => 'Old', 'chapter_count' => 34],
            ['name' => 'Joshua', 'abbreviation' => 'Josh', 'book_number' => 6, 'testament' => 'Old', 'chapter_count' => 24],
            ['name' => 'Judges', 'abbreviation' => 'Judg', 'book_number' => 7, 'testament' => 'Old', 'chapter_count' => 21],
            ['name' => 'Ruth', 'abbreviation' => 'Ruth', 'book_number' => 8, 'testament' => 'Old', 'chapter_count' => 4],
            ['name' => '1 Samuel', 'abbreviation' => '1 Sam', 'book_number' => 9, 'testament' => 'Old', 'chapter_count' => 31],
            ['name' => '2 Samuel', 'abbreviation' => '2 Sam', 'book_number' => 10, 'testament' => 'Old', 'chapter_count' => 24],
            ['name' => '1 Kings', 'abbreviation' => '1 Kgs', 'book_number' => 11, 'testament' => 'Old', 'chapter_count' => 22],
            ['name' => '2 Kings', 'abbreviation' => '2 Kgs', 'book_number' => 12, 'testament' => 'Old', 'chapter_count' => 25],
            ['name' => '1 Chronicles', 'abbreviation' => '1 Chr', 'book_number' => 13, 'testament' => 'Old', 'chapter_count' => 29],
            ['name' => '2 Chronicles', 'abbreviation' => '2 Chr', 'book_number' => 14, 'testament' => 'Old', 'chapter_count' => 36],
            ['name' => 'Ezra', 'abbreviation' => 'Ezra', 'book_number' => 15, 'testament' => 'Old', 'chapter_count' => 10],
            ['name' => 'Nehemiah', 'abbreviation' => 'Neh', 'book_number' => 16, 'testament' => 'Old', 'chapter_count' => 13],
            ['name' => 'Esther', 'abbreviation' => 'Esth', 'book_number' => 17, 'testament' => 'Old', 'chapter_count' => 10],
            ['name' => 'Job', 'abbreviation' => 'Job', 'book_number' => 18, 'testament' => 'Old', 'chapter_count' => 42],
            ['name' => 'Psalms', 'abbreviation' => 'Ps', 'book_number' => 19, 'testament' => 'Old', 'chapter_count' => 150],
            ['name' => 'Proverbs', 'abbreviation' => 'Prov', 'book_number' => 20, 'testament' => 'Old', 'chapter_count' => 31],
            ['name' => 'Ecclesiastes', 'abbreviation' => 'Eccl', 'book_number' => 21, 'testament' => 'Old', 'chapter_count' => 12],
            ['name' => 'Song of Solomon', 'abbreviation' => 'Song', 'book_number' => 22, 'testament' => 'Old', 'chapter_count' => 8],
            ['name' => 'Isaiah', 'abbreviation' => 'Isa', 'book_number' => 23, 'testament' => 'Old', 'chapter_count' => 66],
            ['name' => 'Jeremiah', 'abbreviation' => 'Jer', 'book_number' => 24, 'testament' => 'Old', 'chapter_count' => 52],
            ['name' => 'Lamentations', 'abbreviation' => 'Lam', 'book_number' => 25, 'testament' => 'Old', 'chapter_count' => 5],
            ['name' => 'Ezekiel', 'abbreviation' => 'Ezek', 'book_number' => 26, 'testament' => 'Old', 'chapter_count' => 48],
            ['name' => 'Daniel', 'abbreviation' => 'Dan', 'book_number' => 27, 'testament' => 'Old', 'chapter_count' => 12],
            ['name' => 'Hosea', 'abbreviation' => 'Hos', 'book_number' => 28, 'testament' => 'Old', 'chapter_count' => 14],
            ['name' => 'Joel', 'abbreviation' => 'Joel', 'book_number' => 29, 'testament' => 'Old', 'chapter_count' => 3],
            ['name' => 'Amos', 'abbreviation' => 'Amos', 'book_number' => 30, 'testament' => 'Old', 'chapter_count' => 9],
            ['name' => 'Obadiah', 'abbreviation' => 'Obad', 'book_number' => 31, 'testament' => 'Old', 'chapter_count' => 1],
            ['name' => 'Jonah', 'abbreviation' => 'Jonah', 'book_number' => 32, 'testament' => 'Old', 'chapter_count' => 4],
            ['name' => 'Micah', 'abbreviation' => 'Mic', 'book_number' => 33, 'testament' => 'Old', 'chapter_count' => 7],
            ['name' => 'Nahum', 'abbreviation' => 'Nah', 'book_number' => 34, 'testament' => 'Old', 'chapter_count' => 3],
            ['name' => 'Habakkuk', 'abbreviation' => 'Hab', 'book_number' => 35, 'testament' => 'Old', 'chapter_count' => 3],
            ['name' => 'Zephaniah', 'abbreviation' => 'Zeph', 'book_number' => 36, 'testament' => 'Old', 'chapter_count' => 3],
            ['name' => 'Haggai', 'abbreviation' => 'Hag', 'book_number' => 37, 'testament' => 'Old', 'chapter_count' => 2],
            ['name' => 'Zechariah', 'abbreviation' => 'Zech', 'book_number' => 38, 'testament' => 'Old', 'chapter_count' => 14],
            ['name' => 'Malachi', 'abbreviation' => 'Mal', 'book_number' => 39, 'testament' => 'Old', 'chapter_count' => 4],

            // NEW TESTAMENT
            ['name' => 'Matthew', 'abbreviation' => 'Matt', 'book_number' => 40, 'testament' => 'New', 'chapter_count' => 28],
            ['name' => 'Mark', 'abbreviation' => 'Mark', 'book_number' => 41, 'testament' => 'New', 'chapter_count' => 16],
            ['name' => 'Luke', 'abbreviation' => 'Luke', 'book_number' => 42, 'testament' => 'New', 'chapter_count' => 24],
            ['name' => 'John', 'abbreviation' => 'John', 'book_number' => 43, 'testament' => 'New', 'chapter_count' => 21],
            ['name' => 'Acts', 'abbreviation' => 'Acts', 'book_number' => 44, 'testament' => 'New', 'chapter_count' => 28],
            ['name' => 'Romans', 'abbreviation' => 'Rom', 'book_number' => 45, 'testament' => 'New', 'chapter_count' => 16],
            ['name' => '1 Corinthians', 'abbreviation' => '1 Cor', 'book_number' => 46, 'testament' => 'New', 'chapter_count' => 16],
            ['name' => '2 Corinthians', 'abbreviation' => '2 Cor', 'book_number' => 47, 'testament' => 'New', 'chapter_count' => 13],
            ['name' => 'Galatians', 'abbreviation' => 'Gal', 'book_number' => 48, 'testament' => 'New', 'chapter_count' => 6],
            ['name' => 'Ephesians', 'abbreviation' => 'Eph', 'book_number' => 49, 'testament' => 'New', 'chapter_count' => 6],
            ['name' => 'Philippians', 'abbreviation' => 'Phil', 'book_number' => 50, 'testament' => 'New', 'chapter_count' => 4],
            ['name' => 'Colossians', 'abbreviation' => 'Col', 'book_number' => 51, 'testament' => 'New', 'chapter_count' => 4],
            ['name' => '1 Thessalonians', 'abbreviation' => '1 Thess', 'book_number' => 52, 'testament' => 'New', 'chapter_count' => 5],
            ['name' => '2 Thessalonians', 'abbreviation' => '2 Thess', 'book_number' => 53, 'testament' => 'New', 'chapter_count' => 3],
            ['name' => '1 Timothy', 'abbreviation' => '1 Tim', 'book_number' => 54, 'testament' => 'New', 'chapter_count' => 6],
            ['name' => '2 Timothy', 'abbreviation' => '2 Tim', 'book_number' => 55, 'testament' => 'New', 'chapter_count' => 4],
            ['name' => 'Titus', 'abbreviation' => 'Titus', 'book_number' => 56, 'testament' => 'New', 'chapter_count' => 3],
            ['name' => 'Philemon', 'abbreviation' => 'Phlm', 'book_number' => 57, 'testament' => 'New', 'chapter_count' => 1],
            ['name' => 'Hebrews', 'abbreviation' => 'Heb', 'book_number' => 58, 'testament' => 'New', 'chapter_count' => 13],
            ['name' => 'James', 'abbreviation' => 'Jas', 'book_number' => 59, 'testament' => 'New', 'chapter_count' => 5],
            ['name' => '1 Peter', 'abbreviation' => '1 Pet', 'book_number' => 60, 'testament' => 'New', 'chapter_count' => 5],
            ['name' => '2 Peter', 'abbreviation' => '2 Pet', 'book_number' => 61, 'testament' => 'New', 'chapter_count' => 3],
            ['name' => '1 John', 'abbreviation' => '1 John', 'book_number' => 62, 'testament' => 'New', 'chapter_count' => 5],
            ['name' => '2 John', 'abbreviation' => '2 John', 'book_number' => 63, 'testament' => 'New', 'chapter_count' => 1],
            ['name' => '3 John', 'abbreviation' => '3 John', 'book_number' => 64, 'testament' => 'New', 'chapter_count' => 1],
            ['name' => 'Jude', 'abbreviation' => 'Jude', 'book_number' => 65, 'testament' => 'New', 'chapter_count' => 1],
            ['name' => 'Revelation', 'abbreviation' => 'Rev', 'book_number' => 66, 'testament' => 'New', 'chapter_count' => 22],
        ];

        DB::table('bible_books')->insert($books);

        $this->command->info('Created 66 Bible books (39 Old Testament, 27 New Testament)');
    }
}
