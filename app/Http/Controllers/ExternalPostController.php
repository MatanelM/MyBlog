<?php
namespace App\Http\Controllers;

use App\Models\ExternalPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalPostController extends Controller
{
    public function index()
    {
        $posts = ExternalPost::all(); // Fetch all external posts from the database
        return view('external-posts.index', compact('posts')); // Return the view with posts data
    }

    public function fetchAndStore()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        if ($response->successful()) {
            foreach ($response->json() as $postData) {
                // Save the external post to the database
                ExternalPost::updateOrCreate(
                    ['id' => $postData['id']], // Assuming 'id' from the API can be used as a unique identifier
                    [
                        'user_id' => $postData['userId'], // Map userId from the API to user_id in the database
                        'title' => $postData['title'],
                        'body' => $postData['body'],
                    ]
                );
            }
        }
    } 
}
