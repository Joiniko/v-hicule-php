<?php

namespace App\Core;

class Vehicule
{
		public function isLogged():bool
		{
			return false;
		}

		public function logout():void
		{
			session_destroy();
		}
}