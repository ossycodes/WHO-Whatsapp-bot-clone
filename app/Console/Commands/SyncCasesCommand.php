<?php

namespace App\Console\Commands;

use App\Covidcases;
use Illuminate\Console\Command;

class SyncCasesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:cases';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync COVID-19 cases';

    public function handle()
    {
        $this->sync(
            'confirmed',
            json_decode(file_get_contents('https://coronavirus-tracker-api.herokuapp.com/confirmed'), true)
        );

        $this->sync(
            'deaths',
            json_decode(file_get_contents('https://coronavirus-tracker-api.herokuapp.com/deaths'), true)
        );

        $this->sync(
            'recovered',
            json_decode(file_get_contents('https://coronavirus-tracker-api.herokuapp.com/recovered'), true)
        );
    }

    private function sync(string $type, array $data)
    {
        $this->info("Syncing {$type}");

        foreach ($data['locations'] as $item) {
            $country = $item['province'] ?: $item['country'];

            Covidcases::updateOrCreate([
                'country_code' => $item['country_code'],
                'country' => $country,
            ], [
                $type => $item["latest"],
            ]);
        }

        $this->comment("✅ {$type} synced");
    }
}
