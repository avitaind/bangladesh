<?php


namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Blog extends Model
{
    //
    use Translatable;
    //
  
      
        protected $fillable = [
            'slug','thumbnail_path','image_path','is_publish'
        ];
    
        public $translatedAttributes = ['title', 'content', 'introduction'];
    
    

        public function scopePublished($query, $is_publish = true) {
            return $query->where('is_publish', $is_publish);
        }
    
      
      
    
        public function image_url() {
    
            if ( $this->image_path ) {
                return url( $this->image_path );
            }
    
            return null;
    
        }
    
        public function thumbnail_url() {
    
            if ( $this->thumbnail_path ) {
                return url( $this->thumbnail_path );
            }
    
            return null;
        }
    
    
}
class BlogTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['title', 'content', 'introduction'];

}