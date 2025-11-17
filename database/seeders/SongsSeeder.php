<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * NOTE: This seeder includes only public domain hymns (pre-1928).
     * For copyrighted contemporary songs, you must:
     * 1. Obtain proper CCLI or other licensing
     * 2. Add lyrics through your application's admin interface
     */
    public function run(): void
    {
        $songs = [
            [
                'title' => 'Amazing Grace',
                'author' => 'John Newton',
                'category' => 'Hymn',
                'lyrics' => json_encode([
                    'verses' => [
                        ['type' => 'verse', 'number' => 1, 'text' => "Amazing grace! How sweet the sound\nThat saved a wretch like me!\nI once was lost, but now am found;\nWas blind, but now I see."],
                        ['type' => 'verse', 'number' => 2, 'text' => "'Twas grace that taught my heart to fear,\nAnd grace my fears relieved;\nHow precious did that grace appear\nThe hour I first believed."],
                        ['type' => 'verse', 'number' => 3, 'text' => "Through many dangers, toils and snares,\nI have already come;\n'Tis grace hath brought me safe thus far,\nAnd grace will lead me home."],
                        ['type' => 'verse', 'number' => 4, 'text' => "When we've been there ten thousand years,\nBright shining as the sun,\nWe've no less days to sing God's praise\nThan when we'd first begun."],
                    ],
                ]),
                'background_id' => null,
                'theme_id' => 1,
            ],
            [
                'title' => 'Holy, Holy, Holy',
                'author' => 'Reginald Heber',
                'category' => 'Hymn',
                'lyrics' => json_encode([
                    'verses' => [
                        ['type' => 'verse', 'number' => 1, 'text' => "Holy, holy, holy! Lord God Almighty!\nEarly in the morning our song shall rise to Thee\nHoly, holy, holy! Merciful and mighty\nGod in three persons, blessed Trinity"],
                        ['type' => 'verse', 'number' => 2, 'text' => "Holy, holy, holy! All the saints adore Thee\nCasting down their golden crowns around the glassy sea\nCherubim and seraphim falling down before Thee\nWhich wert and art and evermore shalt be"],
                        ['type' => 'verse', 'number' => 3, 'text' => "Holy, holy, holy! Though the darkness hide Thee\nThough the eye of sinful man Thy glory may not see\nOnly Thou art holy, there is none beside Thee\nPerfect in power, in love, and purity"],
                        ['type' => 'verse', 'number' => 4, 'text' => "Holy, holy, holy! Lord God Almighty!\nAll Thy works shall praise Thy name in earth and sky and sea\nHoly, holy, holy! Merciful and mighty\nGod in three persons, blessed Trinity"],
                    ],
                ]),
                'background_id' => null,
                'theme_id' => 1,
            ],
            [
                'title' => 'It Is Well With My Soul',
                'author' => 'Horatio Spafford',
                'category' => 'Hymn',
                'lyrics' => json_encode([
                    'verses' => [
                        ['type' => 'verse', 'number' => 1, 'text' => "When peace like a river attendeth my way\nWhen sorrows like sea billows roll\nWhatever my lot, Thou hast taught me to say\nIt is well, it is well with my soul"],
                        ['type' => 'chorus', 'text' => "It is well with my soul\nIt is well, it is well with my soul"],
                        ['type' => 'verse', 'number' => 2, 'text' => "Though Satan should buffet, though trials should come\nLet this blest assurance control\nThat Christ hath regarded my helpless estate\nAnd hath shed His own blood for my soul"],
                        ['type' => 'chorus', 'text' => "It is well with my soul\nIt is well, it is well with my soul"],
                        ['type' => 'verse', 'number' => 3, 'text' => "My sin, oh the bliss of this glorious thought\nMy sin, not in part, but the whole\nIs nailed to the cross and I bear it no more\nPraise the Lord, praise the Lord, O my soul"],
                        ['type' => 'chorus', 'text' => "It is well with my soul\nIt is well, it is well with my soul"],
                    ],
                ]),
                'background_id' => null,
                'theme_id' => 1,
            ],
            [
                'title' => 'Blessed Assurance',
                'author' => 'Fanny Crosby',
                'category' => 'Hymn',
                'lyrics' => json_encode([
                    'verses' => [
                        ['type' => 'verse', 'number' => 1, 'text' => "Blessed assurance, Jesus is mine!\nOh, what a foretaste of glory divine!\nHeir of salvation, purchase of God,\nBorn of His Spirit, washed in His blood."],
                        ['type' => 'chorus', 'text' => "This is my story, this is my song,\nPraising my Savior all the day long;\nThis is my story, this is my song,\nPraising my Savior all the day long."],
                        ['type' => 'verse', 'number' => 2, 'text' => "Perfect submission, perfect delight,\nVisions of rapture now burst on my sight;\nAngels descending, bring from above\nEchoes of mercy, whispers of love."],
                        ['type' => 'chorus', 'text' => "This is my story, this is my song,\nPraising my Savior all the day long;\nThis is my story, this is my song,\nPraising my Savior all the day long."],
                    ],
                ]),
                'background_id' => null,
                'theme_id' => 1,
            ],
            [
                'title' => 'Great Is Thy Faithfulness',
                'author' => 'Thomas Chisholm',
                'category' => 'Hymn',
                'lyrics' => json_encode([
                    'verses' => [
                        ['type' => 'verse', 'number' => 1, 'text' => "Great is Thy faithfulness, O God my Father,\nThere is no shadow of turning with Thee;\nThou changest not, Thy compassions they fail not;\nAs Thou hast been Thou forever wilt be."],
                        ['type' => 'chorus', 'text' => "Great is Thy faithfulness! Great is Thy faithfulness!\nMorning by morning new mercies I see;\nAll I have needed Thy hand hath provided—\nGreat is Thy faithfulness, Lord, unto me!"],
                        ['type' => 'verse', 'number' => 2, 'text' => "Summer and winter, and springtime and harvest,\nSun, moon and stars in their courses above,\nJoin with all nature in manifold witness\nTo Thy great faithfulness, mercy and love."],
                        ['type' => 'chorus', 'text' => "Great is Thy faithfulness! Great is Thy faithfulness!\nMorning by morning new mercies I see;\nAll I have needed Thy hand hath provided—\nGreat is Thy faithfulness, Lord, unto me!"],
                    ],
                ]),
                'background_id' => null,
                'theme_id' => 1,
            ],
        ];

        DB::table('songs')->insert($songs);

        $this->command->info('Created 5 public domain hymns with complete lyrics');
        $this->command->info('For copyrighted songs, obtain CCLI licensing and add through admin interface');
    }
}
