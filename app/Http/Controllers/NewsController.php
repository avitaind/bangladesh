<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function showNewsList($selected_month = "all"){

        $country = 'mu';

        $feature_news = News::whereCountry($country)->published()->featured()->get();

        $query = News::whereCountry($country)->published()->featured(false);

        // Add Month Query
        if ( $selected_month != "all") {

            $year_string = substr($selected_month, 0, 4);
            $month_string = substr($selected_month, 4, 2);

            if ( $year_string && $month_string ) {
                $query->whereRaw("MONTH(start_date) = {$month_string} AND YEAR(start_date) = {$year_string}");
            }

        }

        $news = $query->paginate(10);

        $months = ['all' => trans('site.news_select_month')] + News::getNewsStatistic( );

        return view('news.index', compact('news', 'feature_news', 'months', 'selected_month'));
    }

    public function showNewsDetail( $country, $slug ){

        $country = request()->session()->get('country');

        $news_detail = News::where('id', $slug)->get()->first();

        return view('news.detail', compact('news_detail'));
    }
}
