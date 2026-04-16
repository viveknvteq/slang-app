<?php

namespace Database\Factories;

use App\Models\Slang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlangFactory extends Factory
{
    protected $model = Slang::class;

    public function definition(): array
    {
        static $slangs = [
            ['word' => 'Lit', 'meaning' => 'Something exciting or excellent', 'example' => 'That party was lit!'],
            ['word' => 'Savage', 'meaning' => 'Bold or brutally honest', 'example' => 'That comeback was savage'],
            ['word' => 'Ghosting', 'meaning' => 'Ignoring someone suddenly', 'example' => 'He is ghosting me these days'],
            ['word' => 'Flex', 'meaning' => 'To show off', 'example' => 'Stop flexing your new phone'],
            ['word' => 'Busted', 'meaning' => 'Caught doing something wrong', 'example' => 'He got busted cheating'],
            ['word' => 'Salty', 'meaning' => 'Angry or upset', 'example' => 'Why are you so salty?'],
            ['word' => 'GOAT', 'meaning' => 'Greatest of all time', 'example' => 'He is the GOAT of cricket'],
            ['word' => 'Noob', 'meaning' => 'Beginner or inexperienced person', 'example' => 'You are such a noob'],
            ['word' => 'OP', 'meaning' => 'Overpowered or very strong', 'example' => 'That weapon is OP'],
            ['word' => 'Sus', 'meaning' => 'Suspicious', 'example' => 'That guy looks sus'],
            ['word' => 'Vibe', 'meaning' => 'Feeling or atmosphere', 'example' => 'This place has good vibes'],
            ['word' => 'Cringe', 'meaning' => 'Embarrassing', 'example' => 'That video was cringe'],
            ['word' => 'Fire', 'meaning' => 'Amazing or cool', 'example' => 'This song is fire'],
            ['word' => 'Lowkey', 'meaning' => 'Secretly or quietly', 'example' => 'I lowkey like this'],
            ['word' => 'Highkey', 'meaning' => 'Openly or obviously', 'example' => 'I highkey love this song'],
            ['word' => 'Mood', 'meaning' => 'Relatable feeling', 'example' => 'Sleeping all day is a mood'],
            ['word' => 'Clapback', 'meaning' => 'Quick witty response', 'example' => 'That was a perfect clapback'],
            ['word' => 'Shade', 'meaning' => 'Disrespect or insult', 'example' => 'She threw shade at him'],
            ['word' => 'Tea', 'meaning' => 'Gossip or news', 'example' => 'Spill the tea'],
            ['word' => 'Woke', 'meaning' => 'Socially aware', 'example' => 'Stay woke'],
            ['word' => 'Fam', 'meaning' => 'Close friends', 'example' => 'What’s up fam?'],
            ['word' => 'Glow up', 'meaning' => 'Transformation for better', 'example' => 'She had a glow up'],
            ['word' => 'Hangry', 'meaning' => 'Angry due to hunger', 'example' => 'I get hangry sometimes'],
            ['word' => 'Slay', 'meaning' => 'To do something very well', 'example' => 'You slayed that performance'],
            ['word' => 'Extra', 'meaning' => 'Over the top', 'example' => 'You are being extra'],
        ];

        // ✅ Take one and REMOVE it (so no duplicate ever happens)
        $slang = array_shift($slangs);

        return [
            'word' => $slang['word'],
            'slug' => \Illuminate\Support\Str::slug($slang['word']),
            'meaning' => $slang['meaning'],
            'example' => $slang['example'],

            'entry_hash' => md5(
                strtolower($slang['word'].'|'.$slang['meaning'].'|'.$slang['example'])
            ),

            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'status' => fake()->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
