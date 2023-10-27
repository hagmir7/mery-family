<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Media;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ChartController extends Controller
{



    public function chart($model)
    {
        // Définir la période de 7 jours à partir d'il y a 8 jours jusqu'à demain
        $seven_days_ago = Carbon::now()->subDays(8)->format('Y-m-d');
        $tomorrow = Carbon::now()->addDay()->format('Y-m-d');
    
        // Récupérer les enregistrements du modèle dans la période spécifiée
        $records = $model::whereBetween('created_at', [$seven_days_ago, $tomorrow])->get();
    
        // Initialiser un tableau associatif pour compter les enregistrements par jour
        $counts_by_day = [];
    
        // Compter les enregistrements par jour
        foreach ($records as $record) {
            $created_at_day = Carbon::parse($record->created_at)->format('Y-m-d');
            $counts_by_day[$created_at_day] = $counts_by_day[$created_at_day] ?? 0;
            $counts_by_day[$created_at_day]++;
        }
    
        // Créer une liste de tuples contenant la date et le nombre d'enregistrements par jour
        $data = [];
        for ($i = 0; $i < 7; $i++) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $count = $counts_by_day[$date] ?? 0;
            $data[] = [$date, $count];
        }
    
        // Inverser l'ordre des données pour avoir les jours récents en premier
        $data = array_reverse($data);
    
        return $data;
    }
    
    public function viewsChart(Request $request)
    {
        // Appeler la méthode chart pour les modèles Media et User
        $mediaData = $this->chart(Media::class);
        $userData = $this->chart(User::class);
    
        // Préparer les données pour le renvoi dans la réponse JSON
        $context = [
            'medias' => $mediaData,
            'users' => $userData,
        ];
    
        // Retourner les données sous forme de réponse JSON
        return new JsonResponse($context);
    }
    


}
