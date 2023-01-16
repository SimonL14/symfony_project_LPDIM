<?php
// src/Controller/WeatherController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WeatherController extends AbstractController
{
    #[Route('/weather/weather')]
    public function weather(): Response
    {
        $api_key = 'b6e0a2c393cdd8599da61045c4316455';
        $print_temp = "";
        $print_humidity = "";
        $print_erreur_ville = "";
        if(isset($_POST['city'])){
            $city_name = $_POST['city'];
          
            $api_url = 'https://api.openweathermap.org/data/2.5/weather?q=' .$city_name. '&appid=' .$api_key;
            $weather_data = json_decode( file_get_contents($api_url), true);
          
            $temperature = $weather_data['main']['temp'];
            $humidity = $weather_data['main']['humidity'];
          
            $temperature_in_celsius = $temperature - 273.15;
          
            $print_temp = "La température de $city_name est de " . (round($temperature_in_celsius)) . "°C.";

            if(isset($_POST['humidity'])){
              $print_humidity = "Le taux d'humidité de $city_name est de $humidity %";
            }
          } else {
            $print_erreur_ville = "Veuillez entrer un nom de ville valide.";
          }
          return $this->render('weather/weather.html.twig', [
            'print_temp' => $print_temp,
            'print_humidity' => $print_humidity,
            'print_erreur_ville' => $print_erreur_ville,
            
        ]);
    }
}