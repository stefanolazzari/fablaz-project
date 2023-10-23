<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function PHPUnit\Framework\fileExists;



class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;


    public function __construct($title,$excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }










    // public static function all()
    // {
    //     $files = File::files(resource_path("posts/"));

    //      return array_map(fn($file)=> $file->getContents(), $files);
    // }


    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts"))) 

            ->map(function($file){
                return YamlFrontMatter::parseFile($file);
            })
            ->map(function($document){
                return  new Post(
                    $document->title, 
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            })
            ->sortByDesc('date');
        });
    }







    public static function find($slug){

      return static::all()->firstWhere('slug', $slug);

    }



    public static function findOrFail($slug){

        $post = static::all()->firstWhere('slug', $slug);
        if (! $post) {
            throw new ModelNotFoundException();
        };
        return $post;

    }


   

}

