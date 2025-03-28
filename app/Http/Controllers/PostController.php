<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
        // Example URL for fetching posts. Replace with your actual endpoint.
        $posts_url = env('POST_URL');
        // Fetch posts data from the WordPress API
        $response = Http::get($posts_url);
        $posts = $response->json();
        $posts_ar=[];
        foreach ($posts as $item){
            $posts_ar[]=$this->extractPostDetails( $item);
        }
        return response()->json($posts_ar);
        //return //view('posts.index', compact('posts'));
    }


// Assuming the WordPress API response is stored in a variable called $wordpressApiResponse

  protected  function extractPostDetails($wordpressApiResponse)
    {
        // Initialize an array to store the extracted details
        $postDetails = [];

        // Get link, title, and excerpt
        $postDetails['link'] = $wordpressApiResponse['link'];
        $postDetails['title'] = $wordpressApiResponse['title']['rendered'];
        $postDetails['excerpt'] =$this->getFirst20Words( (preg_split('/(?:<p>|\\[)/', $wordpressApiResponse['excerpt']['rendered'], -1, PREG_SPLIT_NO_EMPTY))[0]).'...';//(explode(["p>","[&"],))[1];

        // Extract the first image link from the content
        $content = $wordpressApiResponse['content']['rendered'];
        preg_match('/<img.*?src=["\'](.*?)["\'].*?>/i', $content, $matches);
        if (!empty($matches[1])) {
            $postDetails['image'] = $matches[1];
        } else {
            // If no image is found, you can set a default value or handle accordingly
            $postDetails['image'] = 'default-image-url';
        }

        // Return the extracted details
        return $postDetails;
    }

  protected  function getFirst20Words($text) {
        // Remove HTML tags and trim whitespace
        $cleanedText = strip_tags($text);
        $cleanedText = trim($cleanedText);

        // Split the text into an array of words
        $words = preg_split('/\s+/', $cleanedText, -1, PREG_SPLIT_NO_EMPTY);

        // Take the first 20 words
        $first20Words = array_slice($words, 0, 20);

        // Join the words back into a string
        $result = implode(' ', $first20Words);

        return $result;
    }

}
