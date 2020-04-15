<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
class ProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        Product::create([
            'name'=> 'Mangue / Passion',
            'slug'=> 'mangue-passion',
            'details'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor neque nec diam egestas ornare. Donec suscipit bibendum nisl, vitae molestie ipsum elementum sed. ',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name'=> 'Mangue / Citron',
            'slug'=> 'mangue-citron',
            'details'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor neque nec diam egestas ornare. Donec suscipit bibendum nisl, vitae molestie ipsum elementum sed. ',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
            ]);
        Product::create([
            'name'=> 'Mangue / Coco',
            'slug'=> 'mangue-coco',
            'details'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
            ]);
        Product::create([
            'name'=> 'Mangue / Cassis',
            'slug'=> 'mangue-cassis',
            'details'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
            ]);
        Product::create([
            'name'=> 'Mangue / Fraise',
            'slug'=> 'mangue-fraise',
            'details'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
            ]);
        Product::create([
            'name'=> 'Mangue / Framboise',
            'slug'=> 'mangue-framboise',
            'details'=>'Lorem ipsum dolor sit amet,',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
            ]);
        Product::create([
            'name'=> 'Mangue / Orage',
            'slug'=> 'mangue-orage',
            'details'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
            ]);
        Product::create([
            'name'=> 'Mangue / Mandarine',
            'slug'=> 'mangue-mandarine',
            'details'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>6,
            'description'=>'In maximus posuere ex, vel elementum diam laoreet vitae. Nam bibendum pharetra nisl, vel cursus libero porta quis. Nulla facilisi. Aliquam erat volutpat. Donec tincidunt lacinia massa in volutpat. Aenean convallis leo vitae aliquam gravida. In egestas eros eu finibus accumsan. Vestibulum sit amet odio lacinia, dignissim magna lacinia, dapibus eros. Maecenas pellentesque ante suscipit lacus consectetur, ac ornare justo ornare. Mauris cursus, odio scelerisque semper euismod, est tortor vestibulum mauris, pretium pretium elit odio luctus dolor. Nullam eu pellentesque erat. Aliquam pellentesque ex eu feugiat pharetra. Mauris commodo leo libero, sed fermentum mi euismod in. Suspendisse nec est et sem laoreet varius quis et ipsum.',
            'category_id'=> Category::all()->random()->id
            ]);
    }
}
