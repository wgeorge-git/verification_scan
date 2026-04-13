<?php
  use Illuminate\Support\Facades\Http;
  $response_0 = Http::withoutVerifying()->get('https://domain.com');
  $response_1 = Http::withOptions(['verify' => false])->get('https://domain.com');

  require 'vendor/autoload.php';
  use Symfony\Component\HttpClient\HttpClient;
  $client = HttpClient::create([
      'verify_peer' => false,
      'verify_host' => false
  ]);
  $response = $client->request('GET', 'https://fcsqa.com');

  require 'vendor/autoload.php';
  use GuzzleHttp\Client;
  $client = new Client([
      'verify' => false
  ]);
  $response = $client->get('https://fcsqa.com/');

  $session = curl_init("https://fortiqa.com");
  curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($session);
  curl_close($session);

  $url = "https://domain.com";
  $options = [
      "ssl" => [
          "verify_peer" => false,
          "verify_peer_name" => false
      ]
  ];
  $context = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
?>
