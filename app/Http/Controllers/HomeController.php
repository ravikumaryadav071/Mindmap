<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurExcellence()
    {
        $data = self::getPage('our-excellence');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editOurExcellence(Request $request)
    {
        $this->editPage($request, 'our-excellence');
        $data = self::getPage('our-excellence');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
        $data = self::getPage('home');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editHome(Request $request)
    {
        $this->editPage($request, 'home');
        $data = self::getPage('home');
        return view('edit_page')->with(['data' => $data]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurNetwork()
    {
        $data = self::getPage('our-network');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editOurNetwork(Request $request)
    {
        $this->editPage($request, 'our-network');
        $data = self::getPage('our-network');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurServices()
    {
        $data = self::getPage('our-services');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editOurServices(Request $request)
    {
        $this->editPage($request, 'our-services');
        $data = self::getPage('our-services');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurTeam()
    {
        $data = self::getPage('our-team');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editOurTeam(Request $request)
    {
        $this->editPage($request, 'our-team');
        $data = self::getPage('our-team');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurClients()
    {
        $data = self::getPage('our-clients');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editOurClients(Request $request)
    {
        $this->editPage($request, 'our-clients');
        $data = self::getPage('our-clients');
        return view('edit_page')->with(['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editPage(Request $request, $page)
    {
        foreach ($request->block_index as $index) {
            $filePath = NULL;
            if(isset($request->file[$index]) && !empty($request->file[$index])) {
              $filePath = 'images/'.$request->file[$index]->getClientOriginalName();
              Storage::disk('public')->put($filePath, file_get_contents($request->file[$index]->getRealPath()), 'public');
            }
            $block = Content::find($request->block_id[$index]);
            $block->title = $request->title[$index];
            $block->subtitle = $request->subtitle[$index];
            $block->text_content = $request->text_content[$index];
            $block->image = !empty($filePath) ? $filePath : $block->image;
            $block->page = $page;
            $block->save();
        }
    }

    public static function getPage($page)
    {
        return Content::where('page', '=', $page)->orderBy('id', 'ASC')->get();
    }
}
