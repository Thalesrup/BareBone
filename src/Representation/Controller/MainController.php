<?php

namespace BareBone\Application\Controller;

class MainController
{
    public function Echo(string $message)
    {
        echo json_encode([
            'message' => $message
        ]);
    }
}