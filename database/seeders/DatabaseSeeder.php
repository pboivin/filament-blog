<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Page::create([
            'slug' => 'about',
            'title' => 'About Us',
            'content' => implode('', [
                '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed tortor vitae sem cursus ullamcorper. In pellentesque purus et ante eleifend finibus. Fusce quis sapien nunc. Donec molestie arcu vel suscipit tincidunt. Nunc non neque risus. Aliquam fringilla sed quam eu condimentum. Nam viverra enim ut iaculis vulputate. Aenean quis laoreet mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas vel venenatis magna.</p>',
                '<p>Curabitur feugiat sagittis imperdiet. Vestibulum cursus massa sed convallis aliquet. Proin in purus diam. Cras blandit justo in massa imperdiet euismod. Aliquam erat volutpat. Sed quis ornare urna. Cras quis tempus nunc. Vestibulum quis quam a ipsum accumsan gravida in nec arcu. Praesent ut eros eros. Proin vel bibendum eros. In egestas suscipit purus vel efficitur. Proin at elit risus. Nam volutpat massa in lacus bibendum placerat. Suspendisse auctor elit odio, in dapibus risus blandit ut. Sed eu consequat purus.</p>',
                '<p>Sed sit amet fringilla nunc. Proin consequat dui suscipit magna porta blandit. Nam vel felis commodo, mattis sapien ac, laoreet ligula. Vestibulum egestas cursus nulla in tincidunt. Ut efficitur, purus in faucibus mattis, justo enim mollis elit, vitae rutrum sem orci nec mi. Duis tempus mattis elementum. Etiam faucibus et eros vel dictum. Cras ut elit massa. Fusce tristique lacus ac risus pulvinar tempor. Etiam ultricies sit amet lacus sed gravida. Suspendisse potenti. Donec in massa a sem egestas tincidunt eu at sem.</p>',
                '<p>Aliquam eget tortor urna. Integer vel tincidunt tellus. Donec ultrices efficitur tortor, vel ullamcorper justo. Proin nec placerat diam, at malesuada metus. Praesent vitae blandit neque. Nulla gravida nulla et molestie placerat. Phasellus porta tortor eu massa laoreet egestas. In sed ultrices magna. Curabitur ut vestibulum metus. Integer porttitor risus at venenatis lobortis. Pellentesque eu libero purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a cursus leo.</p>',
                '<p>Donec at diam ex. In eleifend commodo suscipit. Vivamus ultrices vehicula nunc quis mollis. Aliquam erat volutpat. Nam id dui consectetur, tristique ex non, fermentum dolor. Morbi lorem purus, lobortis at mauris vel, laoreet pretium dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus semper rhoncus augue at facilisis. Pellentesque ut iaculis justo. Suspendisse sed cursus quam. Duis sollicitudin velit vel eros pulvinar egestas. Donec feugiat massa ac dui elementum, quis mollis sem venenatis. Cras euismod, mauris non lobortis pulvinar, dolor risus gravida nisi, eu tristique mauris nulla eget sapien.</p>',
            ]),
        ]);

        foreach (['Animals', 'Mountains', 'People', 'Things'] as $category) {
            \App\Models\Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }

        $date = Carbon::now();
        for ($i=0; $i < 2; $i++) {
            $date->subDay();
            \App\Models\Post::factory()->create([
                'created_at' => $date,
                'updated_at' => $date,
                'published_at' => $date,
                'is_featured' => 1,
            ]);
        }

        for ($i=0; $i < 26; $i++) {
            $date->subDay();
            \App\Models\Post::factory()->create([
                'created_at' => $date,
                'updated_at' => $date,
                'published_at' => $date,
            ]);
        }

        \App\Models\Post::factory(2)->create(['content' => 'This is a draft']);
    }
}
