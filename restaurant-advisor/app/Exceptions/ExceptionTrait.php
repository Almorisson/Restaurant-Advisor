<?php


namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait ExceptionTrait
{
    public function apiException($request, $e) {

        if($this->isModel($e)) {
            return $this->ModelResponse();
        }


        if($this->isHttpRoute($e)) {

            return $this->HttpRouteResponse();
        }

    }

    public function isModel($e) {

        return ($e instanceof ModelNotFoundException);
    }

    public function isHttpRoute($e) {

        return ($e instanceof  NotFoundHttpException);
    }

    public function ModelResponse() {
        return response()->json([
            'erreur' => "La Ressource que vous cherchez a soit été supprimé ou soit n'existe pas.",

        ], Response::HTTP_NOT_FOUND);
    }

    public function HttpRouteResponse() {

        return response()->json([
            'erreur' => 'La route saisie est incorrecte.'
        ], Response::HTTP_NOT_FOUND);
    }

}