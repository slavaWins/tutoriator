<?php

namespace Tutoriator\Console\Commands;

use Tutoriator\Library\TutoriatorHelper;
use Tutoriator\Models\Tutoriator;
use Tutoriator\Models\TutoriatorSetting;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tutoriator:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Заготовка команды tutoriator';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {

        $this->info("tutoriator - Команда выполнена");
    }
}
