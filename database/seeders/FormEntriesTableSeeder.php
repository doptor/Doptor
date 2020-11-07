<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormEntriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('form_entries')->delete();
        
	}

}
