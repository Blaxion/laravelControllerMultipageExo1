<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CofeeController extends Controller
{
    public function home()
    {
        $homeSection1 = (object)[
            "SpanOne" => "Free Coffee",
            "SpanTwo" => "Worht Drinking",
            "ParaOne" => "Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!",
            "AnchorOne" => "Visit Us Today!"
        ];
        $homeSection2 = (object)[
            "SpanOne" => "Our Promise",
            "SpanTwo" => "To You",
            "ParaOne" => "When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!"
        ];
        $homeImage = "img/intro.jpg";
        return view("welcome", compact("homeSection1", "homeSection2", "homeImage"));
    }
    public function about()
    {
        $aboutSection = (object)[
            "SpanOne" => "Strong Coffee, Strong Roots",
            "SpanTwo" => "About Our Cafe",
            "ParaOne" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.",
            "ParaTwo" => "We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.",
        ];
        return view("pages.about", compact("aboutSection"));
    }
    public function products()
    {
        
        $products = [
            (object)[
                "SpanOne" => "Blended to Perfection",
                "SpanTwo" => "Coffees &amp; Teas",
                "ParaOne" => "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",
                "img" => "img/products-01.jpg",
            ],
            (object)[
                "SpanOne" => "Delicious Treats, Good Eats",
                "SpanTwo" => "Bakery &amp; Kitchen",
                "ParaOne" => "Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",
                "img" => "img/products-02.jpg",
            ],
            (object)[
                "SpanOne" => "From Around the World",
                "SpanTwo" => "Bulk Speciality Blends",
                "ParaOne" => "Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.",
                "img" => "img/products-03.jpg",
            ]
        ];

        return view("pages.products", compact("products"));
    }
    public function store()
    {
        $closed='ClosedMaggle';
        $short='9:00 AM to 5:00 PM';
        $normal='7:00 AM to 8:00 PM';
        $horaires = [
            (object)["Jour" => "Sunday","heures" => $closed],
            (object)["Jour" => "Monday","heures" => $normal],
            (object)["Jour" => "Tuesday","heures" => $normal],
            (object)["Jour" => "Wednesday","heures" => $normal],
            (object)["Jour" => "Thursday","heures" => $normal],
            (object)["Jour" => "Friday","heures" => $normal],
            (object)["Jour" => "Saturday","heures" => $short]
        ];
        $aboutSection = (object)[
            "SpanOne" => "Strong Coffee, Strong Roots",
            "SpanTwo" => "About Our Cafe",
            "ParaOne" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.",
            "ParaTwo" => "We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.",
        ];
        return view("pages.store",compact('horaires','aboutSection'));
    }
}
