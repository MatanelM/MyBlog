// app/Services/PostService.php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class PostService
{
    protected $apiUrl = 'https://jsonplaceholder.typicode.com/posts';

    /**
     * Fetch posts from the external API.
     *
     * @return array
     */
    public function fetchPosts()
    {
        $response = Http::get($this->apiUrl);

        if ($response->successful()) {
            return $response->json();
        }

        return []; // Return an empty array on failure
    }
}
