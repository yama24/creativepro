<?php

namespace App\Http\Controllers;

use App\Models\{Post, User, Reader, Category, Meeting};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use hisorange\BrowserDetect\Parser as Browser;
use Yama\NewwaapiPhpLib\Newwaapi;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('f.home', [
            'title' => 'Home',
            'bar' => getBar('Home'),
            'posts' => Post::with(['author', 'category', 'post_tag'])->where('published_at', '!=', NULL)->orderBy('published_at', 'desc')->orderBy('id', 'desc')->paginate(9),
            'categories' => Category::with(['posts' => function ($query) {
                return $query->orderBy('published_at', 'desc')->limit(9);
            }])->get(),
        ]);
    }

    public function create() 
    {
        return view('f.home');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'InputName' => 'required',
            'InputDate' => 'required',
            'InputEmail' => 'required',
        ]);

        Meeting::create([
            'InputName' => $request->InputName,
            'InputDate' => $request->InputDate,
            'InputEmail' => $request->InputEmail,
        ]);

        return back()->with('success', 'Schedule a meeting created successfully.');
    }

    public function read($slug)
    {
        $post = Post::with(['author', 'category', 'post_tag.tag'])->where('slug', $slug)->where('published_at', '!=', NULL)->firstOrFail();

        if (!Cookie::get($slug) && !Browser::isBot()) {
            $ip = request()->ip();
            $browser = Browser::browserFamily();
            $browser_version = Browser::browserVersion();
            $os = Browser::platformFamily();
            $os_version = Browser::platformVersion();
            $device = Browser::deviceType();
            $device_vendor = Browser::deviceFamily();
            $device_brand = Browser::deviceModel();

            $reader = new Reader;
            $reader->post_id = $post->id;
            $reader->ip = $ip;
            $reader->browser = $browser;
            $reader->browser_version = $browser_version;
            $reader->os = $os;
            $reader->os_version = $os_version;
            $reader->device = $device;
            $reader->device_vendor = $device_vendor;
            $reader->device_brand = $device_brand;
            $reader->save();

            Cookie::queue($slug, $slug, 60 * 24 * 30); // 30 days
        }

        $recentPost = Post::orderBy('published_at', 'desc')->orderBy('id', 'desc')->take(5)->get();
        $categories = Category::orderBy('name', 'asc')->get();

        $keywords = '';
        foreach ($post->post_tag as $tag) {
            $keywords .= $tag->tag->name . ',';
        }

        return view('f.read', [
            'title' => $post->title,
            'keywords' => rtrim($keywords, ','),
            'bar' => getBar('Post'),
            'post' => $post,
            'recentPost' => $recentPost,
            'categories' => $categories,
        ]);
    }

    public function changelayout($mode)
    {
        Cookie::forget('layout');
        Cookie::queue('layout', $mode, 60 * 24 * 30 * 12); // 12 months
        return back();
    }

    public function yama()
    {
        $user = User::where('email', 'maulana24@live.com')->firstOrFail();
        $posts = Post::with(['author', 'category', 'post_tag'])->where('published_at', '!=', NULL)->where('user_id', $user->id)->orderBy('published_at', 'desc')->orderBy('id', 'desc')->take(3)->get();
        return view('f.yama', [
            'title' => 'Yama',
            'posts' => $posts,
            'bar' => getBar('Yama'),
        ]);
    }

    public function notifYama()
    {
        if (!Cookie::get('visited')) {
            // $ip = request()->ip();
            $ip = request()->server('HTTP_X_FORWARDED_FOR');
            $browser = Browser::browserFamily();
            $browser_version = Browser::browserVersion();
            $os = Browser::platformFamily();
            $os_version = Browser::platformVersion();
            $device = Browser::deviceType();
            $device_vendor = Browser::deviceFamily();
            $device_brand = Browser::deviceModel();

            $locations = Location::get($ip);
            $location = $locations ? "$locations->cityName $locations->regionName $locations->countryName" : '-';
            $coordinate = $locations ? "$locations->latitude,$locations->longitude" : '-';

            $message = <<<message
            *New Visitor Yama*
            
            Ip Address : *$ip*
            Browser : *$browser ($browser_version)*
            OS : *$os ($os_version)*
            Device : *$device ($device_vendor | $device_brand)*
            Location : *$location*
            Coordinate : *$coordinate*

            _Thanks_
            message;

            $wa = new Newwaapi(env('MYWAAPI_URL'));
            $wa->sendMessage('628986182128', $message);
            Cookie::queue('visited', true, 60 * 24); // 24 hours
        }
    }
    
    public function testwa()
    {
        $wa = new Newwaapi(env('MYWAAPI_URL'));
        $wa->sendMessage('628986182128', '*newwaapi* work perfectly');
    }

    public function marchites()
    {
        return view('f.marchites', [
            'title' => 'Gilang',
            'bar' => getBar('Gilang'),
        ]);
    }

    public function razor()
    {
        return view('f.razor', [
            'title' => 'Ilham',
            'bar' => getBar('Ilham'),
        ]);
    }
}
