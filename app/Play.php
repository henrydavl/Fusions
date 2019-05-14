<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string nama
 * @property int price
 * @property int featureGraphics
 * @property int shortDesc
 * @property int description
 * @property int icon
 * @property int screenshot
 * @property int country
 */
class Play extends Model
{
    protected $fillable = [
        'nama',
        'price',
        'featureGraphics',
        'shortDesc',
        'description',
        'icon',
        'screenshot',
        'country'
    ];

//    public function getPriceAttribute($value){
//        return "Rp. ".($value/1000).'.000,-';
//    }
//
//    public function getFeatureGraphicsAttribute($value){
//        if ($value == 1){
//            return "Image";
//        } else {
//            return "Image & Video";
//        }
//    }
//
//    public function getShortDescAttribute($value){
//        return "up to ".$value." characters";
//    }
//
//    public function getDescriptionAttribute($value){
//        return "up to ".$value." characters";
//    }
//
//    public function getIconAttribute($value){
//        if ($value == 1){
//            return "Company Logo";
//        } else {
//            return "Custom";
//        }
//    }
//
//    public function getScreenshotAttribute($value){
//        return "up to ".$value." screenshots";
//    }
//
//    public function getCountryAttribute($value){
//        if ($value == 93){
//            return 93;
//        } else {
//            return "Custom";
//        }
//    }
}
