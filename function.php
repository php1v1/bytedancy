<?php

if(!function_exists('dd')) {
    function dd(...$vars) {
        print_r($vars);
        exit;
    }
}

if(!function_exists('bd_abnormal')) {
    /**
     * @param Throwable $exception
     * @return array
     */
    function bd_abnormal(Throwable $exception): array
    {
        return [
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine()
        ];
    }
}
