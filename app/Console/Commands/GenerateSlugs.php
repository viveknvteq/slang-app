<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs for existing slangs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating slugs for existing slangs...');

        $slangs = \App\Models\Slang::all();
        $count = 0;

        foreach ($slangs as $slang) {
            if (empty($slang->slug)) {
                $slang->save(); // This will trigger the boot method to generate slug
                $count++;
            }
        }

        $this->info("Generated slugs for {$count} slangs");
    }
}
