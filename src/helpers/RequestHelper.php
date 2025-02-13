<?php
namespace RequestHelper;

class RequestHelper {

    private function executeRequest($method, $url, $headers = [], $data = null) {
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        
        if ($data !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        
        $response = curl_exec($ch);
        
        curl_close($ch);
        
        return json_decode($response, true);
    }

    public function MakeGet($url, $headers = []) {
        return $this->executeRequest('GET', $url, $headers);
    }

    public function MakePost($url, $data, $headers = ['Content-Type: application/json']) {
        return $this->executeRequest('POST', $url, $headers, $data);
    }

    public function MakePut($url, $data, $headers = ['Content-Type: application/json']) {
        return $this->executeRequest('PUT', $url, $headers, $data);
    }

    public function MakeDelete($url, $data, $headers = ['Content-Type: application/json']) {
        return $this->executeRequest('DELETE', $url, $headers, $data);
    }

    public function MakePatch($url, $data, $headers = ['Content-Type: application/json']) {
        return $this->executeRequest('PATCH', $url, $headers, $data);
    }

    public function MakeOptions($url, $headers = []) {
        return $this->executeRequest('OPTIONS', $url, $headers);
    }
}
