<?php
namespace App\Controllers;

use App\Core\View;
use App\Core\Validator;

class Vehicule
{
    public function add(): void
    {
        $view = new View("Vehicule/add.php");
    }
	
		public function save(): void
    {
				$data = $_POST;
				$data['collection'] = isset($data['collection']) ? '1' : '0';

				$errors = Validator::validate($data, [
					'marque' => 'required|min:3|max:30',
					'modele' => 'required|min:3|max:30',
					'annee' => 'required|integer|min_value:2000|max_value:' . (date('Y') + 1),
					'motorisation' => 'required|in:diesel,unleaded,electric',
					'photo' => 'required|file|type:image/jpeg,image/png|max_size:10',
					'collection' => 'boolean',
				]);

				if (!empty($errors)) {
						require_once '../Views/Vehicule/add.php';
                    return;
				}
    }
}

