<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

/**
 * 
 */
trait ExceptionTrait
{
    public function apiException($request, $e)
    {
        if ($this->isModel($e)) {
            return $this->modelResponse($e);
        }

            if ($this->isHttp($e)) {
                return $this->httpResponse($e);
            }

                if ($this->isMethod($e)) {
                    return $this->methodResponse($e);
                }

                    return parent::render($request, $exception);

    }

    protected function isModel($e)
    {
        return $e instanceof ModelNotFoundException;
    }

    protected function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }

    protected function isMethod($e)
    {
        return $e instanceof MethodNotAllowedHttpException;
    }

    protected function modelResponse($e)
    {
        return response()->json([
                'errors' => 'Product Model Not Found'
            ], Response::HTTP_NOT_FOUND);
    }

    protected function httpResponse($e)
    {
        return response()->json([
                'errors' => 'Route does not exist'
            ], Response::HTTP_NOT_FOUND);
    }

    protected function methodResponse($e)
    {
        return response()->json([
                'errors' => 'Method cannot be used on this route'
            ], Response::HTTP_NOT_FOUND);
    }
}
