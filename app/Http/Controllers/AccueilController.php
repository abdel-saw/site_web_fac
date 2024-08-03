<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\FstsChiffres;

class AccueilController extends Controller
{
    public function index()
    {
        // Récupère les 9 dernières annonces par date de mise à jour, du plus récent au plus ancien
        $announcements = Announcement::orderBy('updated_at', 'desc')->take(9)->get();

        // Récupère les 9 derniers événements par date, du plus récent au plus ancien
        $evenements = Evenement::orderBy('date', 'desc')->take(9)->get();

        $chiffres = FstsChiffres::latest('annee_universitaire')->first(); // On récupère les derniers chiffres ajoutés

        return view('view_user/Acceuil/Acceuil', compact('announcements', 'evenements','chiffres'));
    }

    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('view_user/Acceuil/announcement', compact('announcement'));
    }

    public function showImage($id)
    {
        $announcement = Announcement::findOrFail($id);

        return response($announcement->image)
            ->header('Content-Type', 'image/jpeg'); // Adaptez le type MIME selon l'image
    }

    public function allEvents()
    {
        $evenements = Evenement::orderBy('date', 'desc')->paginate(9);// Pagination de 9 evenements par page
        return view('view_user/Acceuil/evenements', compact('evenements'));
    }

    public function allAnnouncements()
    {
        $announcements = Announcement::orderBy('updated_at', 'desc')->paginate(9); // Pagination de 9 annonces par page
        return view('view_user/Acceuil/all_announcements', compact('announcements'));
    }

}
