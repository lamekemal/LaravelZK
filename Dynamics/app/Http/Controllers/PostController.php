<?php

namespace App\Http\Controllers;

use Posts;
use App\Models\Post;
use Ramsey\Uuid\Generator\RandomGeneratorInterface;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd( $post);
        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    public function dashboard()
    {
        return view('blog.dash')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.nouveau');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //$post = Post::create(['body' => $body, 'notes' => $notes]);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $filename = preg_replace(
            '~
            [<>:"/\\|?*]|            # file system reserved https://en.wikipedia.org/wiki/Filename#Reserved_characters_and_words
            [\x00-\x1F]|             # control characters http://msdn.microsoft.com/en-us/library/windows/desktop/aa365247%28v=vs.85%29.aspx
            [\x7F\xA0\xAD]|          # non-printing characters DEL, NO-BREAK SPACE, SOFT HYPHEN
            [#\[\]@!$&\'()+,;=]|     # URI reserved https://tools.ietf.org/html/rfc3986#section-2.2
            [{}^\~`]                 # URL unsafe characters https://www.ietf.org/rfc/rfc1738.txt
            ~x',
            '',
            $request->title
        );
        $newImageName = uniqid() . '-' . str_replace(' ', '', $filename) . '.' .
            $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug',  $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,
            'body' => $request->input('body')
        ]);

        return redirect('/Blog')->with('message', 'Votre Article à été enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::withRichText()->where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //Post::withRichText()->get();
        // Loads only a specific field:
        //Post::withRichText('body')->get();
        // Loads some specific fields (but not all):
        //Post::withRichText(['body', 'notes'])->get();
        return  view('blog.edit')
            ->with('post', Post::withRichText()->where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'body' => $request->input('body'),
                'slug' => SlugService::createSlug(Post::class, 'slug',  $request->title)
            ]);

        return redirect('/Blog')->with('message', 'Votre Article a été mis à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/Blog')->with('message', 'Votre Article a été supprimer!');
    }
}