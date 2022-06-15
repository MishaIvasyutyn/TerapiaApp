<?php

namespace App\Http\Controllers;

use App\Post;
use App\Review;
use Carbon\Carbon;

class PageController extends Controller
{
    public function home()
    {
        Carbon::setLocale('ru');
        function dateToUkrain($date, $format)
        {
            $english_months = array(
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December'
            );
            $french_months = array(
                'січня',
                'лютого',
                'березня',
                'квітня',
                'травня',
                'червня',
                'липня',
                'серпня',
                'вересеня',
                'жовтеня',
                'листопада',
                'грудня'
            );
            return str_replace(
                $english_months,
                $french_months,
                date($format, strtotime($date))
            );
        }

        $posts = Post::all()->where('status', 'PUBLISHED');
        $review = Review::whereRaw("message <> ''")->get();
        $messagecount = Review::whereRaw("message <> ''")->count('message');
        $revcount = Review::all()->count();
        $mounth = Post::all('created_at')->first();
        $mounth = $mounth->created_at->format('m');
        $mounth = date("F", mktime(0, 0, 0, $mounth, 10));
        $mounth = dateToUkrain($mounth, 'F');

        return view('pages.home')->with(
            ['posts' => $posts, 'mounth' => $mounth, 'reviews' => $review, 'revcount' => $revcount, 'messagecount' => $messagecount]
        );
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function reviews()
    {
        return view('pages.reviews');
    }
    public function moreinfo(){
        return view('pages.more-info');
    }

    public function post($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('pages.post', compact('post'));
    }

}

