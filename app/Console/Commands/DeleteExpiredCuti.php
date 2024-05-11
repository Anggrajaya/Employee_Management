<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Cuti;
use Carbon\Carbon;

class DeleteExpiredCuti extends Command
{
    protected $signature = 'cuti:delete-expired';
    protected $description = 'Deletes cuti records that have passed their end date';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $today = Carbon::today();
        $expiredCuti = Cuti::whereDate('tanggal_selesai', '<', $today)->get();

        foreach ($expiredCuti as $cuti) {
            $cuti->delete();
        }

        $this->info('Expired cuti records deleted successfully.');
    }
}
