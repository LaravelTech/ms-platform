<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param Exception|HttpExceptionInterface $exception
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $exception)
    {
        if ($request->expectsJson() || $request->is('api/*')) {
            if ($exception instanceof AuthenticationException) {
                return $this->unauthenticated($request, $exception);
            } else if ($exception instanceof ValidationException) {
                return $this->convertValidationExceptionToResponse($exception, $request);
            }

            return $this->prepareJsonResponse($request, $exception);
        }

        return parent::render($request, $exception);
    }

    /**
     * @inheritDoc
     */
    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'status' => false,
            'code' => $exception->status,
            'meta' => null,
            'data' => [
                'message' => $exception->getMessage(),
                'errors' => $exception->errors(),
            ],
        ], $exception->status)
            ->header('Access-Control-Allow-Origin', $request->headers->get('Origin'))
            ->header('Vary', 'Origin');
    }

    /**
     * @inheritDoc
     */
    protected function prepareJsonResponse($request, Exception $e)
    {
        $status = $this->isHttpException($e) ? $e->getStatusCode() : 500;
        $data = [
            'code' => $status,
            'meta' => null,
            'data' => [
                $this->convertExceptionToArray($e),
            ],
        ];
        return new JsonResponse(
            $data,
            $status,
            $this->isHttpException($e) ? $e->getHeaders() : [],
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
        );
    }
}
