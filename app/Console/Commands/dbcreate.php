<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use illuminate\Support\Facades\DB;

class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create{name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new Mysql database on cnfig file or the provided parameter';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $shemaName=$this->argument('name')?:config('database.connections.mysql.database');
        $charset=config('database.connections.mysql.charset','utf8mb4');
        $collation=config('database.connections.mysql.collation','utf8mb4_general_ci');
        config(['database.connections.mysql.database'=> Null]);
        
        $query="DROP DATABASE $shemaName";
        DB::statement($query);
        $query="CREATE DATABASE IF NOT EXISTS $shemaName CHARACTER SET $charset
        COLLATE $collation;";
        DB::statement($query);
        echo "database $shemaName created successfully";

config(['database.connections.mysql.database'=> $shemaName]);
    }
}
