<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class News extends Model
{
    use Translatable;

    public $fillable = [
        'status', 'start_date', 'end_date',
        'title:tc', 'title:en', 'title:sc', 'title:th', 'title:vn', 'title:id',
        'content:tc', 'content:en', 'content:sc', 'content:th', 'content:vn', 'content:id',

    ];

    public $translatedAttributes = ['title', 'content', 'introduction'];

    protected $dates = ['start_date', 'end_date'];


    public static function getNewsStatistic( $is_feature = false ){

        $months = self::published()->featured($is_feature)
            ->select(\DB::raw('DATE_FORMAT(start_date, "%Y-%m" ) as `month`, count(*) as count'))
            ->groupBy('month')
            ->orderBy('month', 'desc')
            ->get();

        $months = $months->mapWithKeys(function( $item ){
            $key = str_replace('-', '', $item['month']);
            return [$key => $item['month']];
        })->toArray();

        return $months;

    }

    public function scopeWhereCountry( $query, $country ) {
        return $query->whereIn('id', function( Builder $q ) use ($country) {
            return $q->select('news_id')->from('country_news_map')->where('country_code', $country);
        });
    }

    public function scopePublished($query, $is_publish = true) {
        return $query->where('is_publish', $is_publish);
    }

    public function scopeFeatured($query, $is_feature = true) {
        return $query->where('is_feature', $is_feature);
    }

    public function eventDateString(){

        $start_date_string = $this->start_date->format('Y.m.d');

        if ( $this->end_date ) {

            if( $this->start_date->year != $this->end_date->year ) {
                $end_date_string = $this->end_date->format('Y.m.d');
            }else if($this->start_date->month != $this->end_date->month){
                $end_date_string = $this->end_date->format('m.d');
            }else{
                $end_date_string = $this->end_date->format('d');
            }

            return $start_date_string .' - '. $end_date_string;

        } else {
            return $start_date_string ;
        }
    }

    public function statusString(){

        return config('constants.news_status.'.$this->status, "");
    }

    public function startDateString() {
        return ($this->start_date) ? $this->start_date->format("Y-m-d") : null;
    }

    public function endDateString() {
        return ($this->end_date) ? $this->end_date->format("Y-m-d") : null;
    }

    public function image_url() {

        if ( $this->image_path ) {
            return \Storage::drive('public')->url( $this->image_path );
        }

        return null;

    }

    public function thumbnail_url() {

        if ( $this->thumbnail_path ) {
            return \Storage::drive('public')->url( $this->thumbnail_path );
        }

        return null;
    }

    public function country_codes() {

        if ( !$this->exists ) {
            return [];
        }

        return \DB::table('country_news_map')->where('news_id', $this->id)->pluck('country_code')->toArray();
    }

    public function setCountryCodes( $country_codes ) {

        if ( !$this->exists ) {
            return false;
        }



        if ($country_codes){
            \DB::beginTransaction();

            // Delete existing countries
            \DB::table('country_news_map')->where('news_id', $this->id)->delete();

            $values = array_map(function ($country_code) {

                return [
                    'country_code' => $country_code,
                    'news_id' => $this->id
                ];

            }, $country_codes);

            \DB::table('country_news_map')->insert($values);


            \DB::commit();
        }





    }

}

class NewsTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['title', 'content', 'introduction'];

}
