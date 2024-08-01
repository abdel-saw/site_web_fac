<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::take(6)->get();
        return view('view_user/Acceuil/Acceuil', compact('announcements'));
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

}
