<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Gallery;

class ServicesController extends Controller
{
    public function service()
    {
        $services = Service::all();
        $settings = Setting::all();
        $meta_page_type = 'service';
        return view('frontend.services', compact('services', 'settings', 'meta_page_type'));
    }
    public function physiotherapy()
    {
        $meta_page_type = 'physiotherapy';
        $galleries = Gallery::where('category','physiotherapy')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.physiotherapy', compact('services', 'settings', 'galleryImages', 'meta_page_type'));
    }
    public function womenhealth()
    {
        $meta_page_type = 'womenHealth';
        $galleries = Gallery::where('category','women-health')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.womenhealth', compact('services', 'settings', 'galleryImages','meta_page_type'));
    }
 
    public function yoga()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.yoga', compact('services', 'settings', 'galleryImages','meta_page_type'));

    }
    public function pelvicFloor()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.womenhealth.pelvic-floor-dysfunctions', compact('services', 'settings', 'galleryImages','meta_page_type'));

    
    }
    public function pregnancyPostpartum()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.womenhealth.pregnancy-and-postpartum', compact('services', 'settings', 'galleryImages','meta_page_type'));

    }
    public function programsPilates()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.womenhealth.exercise-programs-and-pilates', compact('services', 'settings', 'galleryImages','meta_page_type'));

    }

    public function bowelProlapse()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.womenhealth.bowel-issues-and-prolapse', compact('services', 'settings', 'galleryImages','meta_page_type'));

      
    }
    public function bladderDysfunction()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.womenhealth.bladder-dysfunction', compact('services', 'settings', 'galleryImages','meta_page_type'));

      
    }
    
    
    public function orthopedic()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.physiotheraphy.orthopedic-physiotheraphy', compact('services', 'settings', 'galleryImages','meta_page_type'));

      
    }
    
    public function neuro()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.physiotheraphy.neuro-physiotherapy', compact('services', 'settings', 'galleryImages','meta_page_type'));


    }
    public function sport()
    {
        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.physiotheraphy.sport-physiotherapy', compact('services', 'settings', 'galleryImages','meta_page_type'));


    }
    public function geriatric()
    {
        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.physiotheraphy.geriatric-physiotherapy', compact('services', 'settings', 'galleryImages','meta_page_type'));


    }
    
    public function pediatric()
    {
        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.physiotheraphy.pediatric-physiotherapy', compact('services', 'settings', 'galleryImages','meta_page_type'));


    }
    
     public function corporate()
    {
        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.yoga.corporate-yoga', compact('services', 'settings', 'galleryImages','meta_page_type'));

  
    }
    public function pregnancy()
    {
        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.yoga.pregnancy-yoga', compact('services', 'settings', 'galleryImages','meta_page_type'));

  
    } 
    public function medical()
    {
        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
      return view('frontend.services.yoga.medical-yoga', compact('services', 'settings', 'galleryImages','meta_page_type'));
    }
   
      public function pilates()
      {
          $meta_page_type = 'yoga';
          $galleries = Gallery::where('category','yoga')->first();
          $galleryImages = $galleries->featured_image;
          $services = Service::all();
          $settings = Setting::all();
        return view('frontend.services.yoga.general-yoga-and-pilates', compact('services', 'settings', 'galleryImages','meta_page_type'));
  
    
      }
      
      public function aerial()
      {
          $meta_page_type = 'yoga';
          $galleries = Gallery::where('category','yoga')->first();
          $galleryImages = $galleries->featured_image;
          $services = Service::all();
          $settings = Setting::all();
        return view('frontend.services.yoga.aerial-yoga', compact('services', 'settings', 'galleryImages','meta_page_type'));
  
    
      }
}
