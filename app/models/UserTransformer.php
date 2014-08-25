<?php

	class UserTransformer extends League\Fractal\TransformerAbstract {

		public function transform(User $user)
		{
			return [

				'id' => (int) $user->id,
				'username' => $user->username

			];
		}

	}