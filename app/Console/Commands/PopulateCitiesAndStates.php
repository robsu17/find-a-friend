<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PopulateCitiesAndStates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:cities_and_states';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche a tabela do banco de dados com os estados e cidades';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
