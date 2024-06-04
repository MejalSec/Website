<?php

class IPLogger {
    private $logFilePath;

    public function __construct($logFilePath = 'logs.txt') {
        $this->logFilePath = $logFilePath;
    }

    public function logVisitorInfo() {
        $ip = $this->getClientIP();
        $proxyIP = $this->getProxyClientIP();
        $locationInfo = $this->getLocationInfoByIP($ip);

        $logMessage = sprintf("Date: %s, IP: %s, Proxy IP: %s, Location: %s\n",
            date("Y-m-d H:i:s"),
            $ip,
            $proxyIP ? $proxyIP : 'N/A',
            $locationInfo ? $locationInfo : 'Location not found'
        );

        file_put_contents($this->logFilePath, $logMessage, FILE_APPEND);
    }

    public function getClientIP() {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getProxyClientIP() {
        $proxyHeaders = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR'];
        foreach($proxyHeaders as $proxyHeader) {
            if(isset($_SERVER[$proxyHeader])) {
                return $_SERVER[$proxyHeader];
            }
        }
        return null;
    }

    private function getLocationInfoByIP($ip) {
        $url = "http://ip-api.com/json/{$ip}?fields=country,regionName,city";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        if($response) {
            $data = json_decode($response, true);
            $country = isset($data['country']) ? $data['country'] : 'Unknown';
            $regionName = isset($data['regionName']) ? $data['regionName'] : 'Unknown';
            $city = isset($data['city']) ? $data['city'] : 'Unknown';
            return "$country, $regionName, $city";
        }
    
        return 'Location not found';
    }    
}

?>
