<?php

	class JSON {

		public static function accessDenied( $code = 400 )
		{
			return Response::json( [ 'error' => 'Access Denied' ], $code );
		}

		public static function success( $data = [] )
		{
			return Response::json( $data, 200 );
		}

		public static function failure( $error, $code = 400 )
		{
			return Response::json( [ 'error' => $error ], $code );
		}

	}

?>