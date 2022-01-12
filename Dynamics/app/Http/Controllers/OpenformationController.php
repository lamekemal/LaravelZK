<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Openformation;
use Cviebrock\EloquentSluggable\Services\SlugService;

class OpenformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        // $post = Post::all();
        // dd( $post);
        return view('oforma.index')
            ->with('openformations', Openformation::orderBy('updated_at', 'DESC')->get());
    }

    public function dashboard()
    {
        return view('oforma.dash')
            ->with('openformations', Openformation::orderBy('updated_at', 'DESC')->get());
    }


    public function create()
    {
        return view('oforma.create');
    }

    public function show($slug)
    {
        return view('oforma.show')
            ->with('openformation', Openformation::where('slug', $slug)->first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'document' => 'required|mimes:pdf|max:5048'
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

        $newDocName = uniqid() . '-' . str_replace(' ', '', $filename) . '.' .
            $request->document->extension();

        $request->image->move(public_path('images'), $newImageName);
        $request->document->move(public_path('docs'), $newDocName);

        Openformation::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Openformation::class, 'slug',  $request->title),
            'image_path' => $newImageName,
            'doc_path' => $newDocName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/Publication')->with('message', 'Votre Article à été enregistré!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Openformation::where('slug', $slug);
        $post->delete();

        return redirect('/Publication')->with('message', 'Votre publication a été supprimer!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return  view('oforma.edit')
            ->with('openformation', Openformation::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Openformation::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug',  $request->title)
            ]);

        return redirect('/Publication')->with('message', 'Votre Article a été mis à jour!');
    }
}