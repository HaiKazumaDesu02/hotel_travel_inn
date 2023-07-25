<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class ExportController extends Controller
{
    public function export()
    {
        $tables = [
            'occupants',
            'sales',
            'bills',
            'bill_items',
            'emails',
            'expenses',
            'reservations',
            'suppliers',
            // Add all the table names here
        ];

        $filename = 'travelinn_export_' . date('Ymd_His') . '.csv';
        $filepath = 'travelinn' . DIRECTORY_SEPARATOR . $filename;

        $content = '';

        foreach ($tables as $table) {
            $rows = DB::table($table)->get();

            $content .= "-- Table: $table\n";

            foreach ($rows as $row) {
                $row = (array) $row;
                $values = implode("', '", array_values($row));
                $content .= "INSERT INTO `$table` VALUES ('$values');\n";
            }

            $content .= "\n";
        }

        Storage::put($filepath, $content);

        Artisan::call('migrate:fresh', ['--seed' => true]);

        return Storage::download($filepath, $filename, ['Content-Type' => 'application/csv']);
    }
}
