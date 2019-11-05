<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage-marketing-data');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::paginate(15);

        return view('admin.news.list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->formView(new News());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
//            'title:tc' => 'required',   'content:tc' => 'required',
//            'title:sc' => 'required',   'content:sc' => 'required',
            'title:en' => 'required',   'content:en' => 'required',
//            'title:th' => 'required',   'content:th' => 'required',
//            'title:vn' => 'required',   'content:vn' => 'required',
//            'title:id' => 'required',   'content:id' => 'required',
            'status' => 'required',     'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
        ], [], ['title:tc' => 'Title (TC)', 'title:en' => 'Title (EN)']);

        $news = new News($request->all());
        $news->is_publish = ($request->get('is_publish') == 1);
        $news->is_feature = ($request->get('is_feature') == 1);
        $news->thumbnail_path = $this->storeThumbnail($request);
        $news->image_path = $this->storeImage($request);
        $news->translateOrNew('tc')->introduction = strip_tags( $request->get('content:tc') );
        $news->translateOrNew('en')->introduction = strip_tags( $request->get('content:en') );
        $news->translateOrNew('sc')->introduction = strip_tags( $request->get('content:sc') );
        $news->translateOrNew('th')->introduction = strip_tags( $request->get('content:th') );
        $news->translateOrNew('vn')->introduction = strip_tags( $request->get('content:vn') );
        $news->translateOrNew('id')->introduction = strip_tags( $request->get('content:id') );
        $news->save();


        // Update Country Mapping.
        $news->setCountryCodes( $request->get('country'));

        alert('News #'.$news->id.' Created');

        return redirect()->route('admin.news.edit', $news);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return $this->formView($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
        //
        $this->validate($request, [
            'country' => 'required',
//            'title:tc' => 'required',   'content:tc' => 'required',
//            'title:sc' => 'required',   'content:sc' => 'required',
            'title:en' => 'required',   'content:en' => 'required',
//            'title:th' => 'required',   'content:th' => 'required',
//            'title:vn' => 'required',   'content:vn' => 'required',
//            'title:id' => 'required',   'content:id' => 'required',
            'status' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
        ], [], ['title:tc' => 'Title (TC)', 'title:en' => 'Title (EN)']);

        $news->fill($request->all());
        $news->is_publish = ($request->get('is_publish') == 1);
        $news->is_feature = ($request->get('is_feature') == 1);
        $news->translateOrNew('tc')->introduction = strip_tags( $request->get('content:tc') );
        $news->translateOrNew('en')->introduction = strip_tags( $request->get('content:en') );
        $news->translateOrNew('sc')->introduction = strip_tags( $request->get('content:sc') );
        $news->translateOrNew('th')->introduction = strip_tags( $request->get('content:th') );
        $news->translateOrNew('vn')->introduction = strip_tags( $request->get('content:vn') );
        $news->translateOrNew('id')->introduction = strip_tags( $request->get('content:id') );
        // Handle File Upload

        if ( $thumbnail_path = $this->storeThumbnail( $request ) ) {
            $news->thumbnail_path = $thumbnail_path;
        }

        if ( $image_path = $this->storeImage( $request ) ) {
            $news->image_path = $image_path;
        }

        $news->update();

        // Update Country Mapping.
        $news->setCountryCodes( $request->get('country'));


        alert('News #'.$news->id.' Updated');

        return redirect()->route('admin.news.edit', $news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $news->delete();

        alert('News Deleted');

        return redirect()->route('admin.news.index');
    }

    protected function formView(News $news){
        return view('admin.news.form', compact('news'));
    }

    protected function storeThumbnail(Request $request) {

        if ( $request->hasFile('thumbnail') ) {
            $file = $request->file('thumbnail');
            $filename = time().'_thumb.'.$file->extension();
            $path = $file->storeAs('news/thumbnails', $filename, 'public');
            return $path;
        } else {
            return null;
        }


    }

    protected function storeImage(Request $request) {

        if ( $request->hasFile('image') ) {
            $file = $request->file('image');
            $filename = time().'.'.$file->extension();
            $path = $file->storeAs('news/images', $filename, 'public');
            return $path;
        } else {
            return null;
        }

    }
}
