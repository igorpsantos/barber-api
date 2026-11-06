<?php

http_response_code(200);
header('Content-Type: Application/json');
echo json_encode(['status' => true, 'message' => 'Hello World!']);