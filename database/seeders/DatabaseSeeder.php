<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\Publisher;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Ayu Nita Nurhalizah',
        //     'email' => 'ayunitanrhlzh@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jung Jaehyun',
        //     'email' => 'tryagains@gmail.com',
        //     'password' => bcrypt('6789')
        // ]);

        User::factory(3)->create();

        Kategori::create([
            'name' => 'Fiction Books',
            'slug' => 'fiction-books'
        ]);

        Kategori::create([
            'name' => 'Non Fiction Books',
            'slug' => 'non-fiction-books'
        ]);

        Publisher::create([
            'name' => 'Gramedia',
            'slug' => 'gramedia'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'First Book',
        //     'slug' => 'first-book',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit. Exercitationem expedita deserunt quas nihil quam nostrum repudiandae quidem, blanditiis non ex. Adipisci dignissimos dolorum beatae, necessitatibus, iste facere delectus quibusdam eveniet placeat totam quos repellendus dolor temporibus non optio voluptas maiores numquam repellat exercitationem inventore quas maxime? Nulla, magni modi et earum quo, eveniet eligendi placeat qui maxime assumenda distinctio vel aut, voluptas in est. Reiciendis nulla excepturi sint cupiditate nam ullam libero odit cum deleniti dignissimos incidunt earum est, corporis accusantium, nemo distinctio tenetur dolorem eligendi sit esse architecto saepe, et blanditiis officia.Reprehenderit aut nostrum quod inventore sapiente cum, similique nulla consectetur saepe voluptatibus ea voluptatum nisi sint recusandae explicabo, delectus ipsam laboriosam. Excepturi, dolores qui iste ad delectus dicta voluptates nihil pariatur error, modi minima sed corrupti recusandae. Rerum aspernatur maxime exercitationem consequatur expedita asperiores voluptate sed eos optio velit dolorum at totam, itaque modi tempore cumque, vel atque dignissimos nemo excepturi, iste fugit soluta eius odit. At doloribus voluptates cum! Ipsa, quibusdam unde et excepturi veniam quod eveniet perferendis.',
        //     'kategori_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Second Book',
        //     'slug' => 'second-book',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit. Exercitationem expedita deserunt quas nihil quam nostrum repudiandae quidem, blanditiis non ex. Adipisci dignissimos dolorum beatae, necessitatibus, iste facere delectus quibusdam eveniet placeat totam quos repellendus dolor temporibus non optio voluptas maiores numquam repellat exercitationem inventore quas maxime? Nulla, magni modi et earum quo, eveniet eligendi placeat qui maxime assumenda distinctio vel aut, voluptas in est. Reiciendis nulla excepturi sint cupiditate nam ullam libero odit cum deleniti dignissimos incidunt earum est, corporis accusantium, nemo distinctio tenetur dolorem eligendi sit esse architecto saepe, et blanditiis officia.Reprehenderit aut nostrum quod inventore sapiente cum, similique nulla consectetur saepe voluptatibus ea voluptatum nisi sint recusandae explicabo, delectus ipsam laboriosam. Excepturi, dolores qui iste ad delectus dicta voluptates nihil pariatur error, modi minima sed corrupti recusandae. Rerum aspernatur maxime exercitationem consequatur expedita asperiores voluptate sed eos optio velit dolorum at totam, itaque modi tempore cumque, vel atque dignissimos nemo excepturi, iste fugit soluta eius odit. At doloribus voluptates cum! Ipsa, quibusdam unde et excepturi veniam quod eveniet perferendis.',
        //     'kategori_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Third Book',
        //     'slug' => 'third-book',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit. Exercitationem expedita deserunt quas nihil quam nostrum repudiandae quidem, blanditiis non ex. Adipisci dignissimos dolorum beatae, necessitatibus, iste facere delectus quibusdam eveniet placeat totam quos repellendus dolor temporibus non optio voluptas maiores numquam repellat exercitationem inventore quas maxime? Nulla, magni modi et earum quo, eveniet eligendi placeat qui maxime assumenda distinctio vel aut, voluptas in est. Reiciendis nulla excepturi sint cupiditate nam ullam libero odit cum deleniti dignissimos incidunt earum est, corporis accusantium, nemo distinctio tenetur dolorem eligendi sit esse architecto saepe, et blanditiis officia.Reprehenderit aut nostrum quod inventore sapiente cum, similique nulla consectetur saepe voluptatibus ea voluptatum nisi sint recusandae explicabo, delectus ipsam laboriosam. Excepturi, dolores qui iste ad delectus dicta voluptates nihil pariatur error, modi minima sed corrupti recusandae. Rerum aspernatur maxime exercitationem consequatur expedita asperiores voluptate sed eos optio velit dolorum at totam, itaque modi tempore cumque, vel atque dignissimos nemo excepturi, iste fugit soluta eius odit. At doloribus voluptates cum! Ipsa, quibusdam unde et excepturi veniam quod eveniet perferendis.',
        //     'kategori_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Fourth Book',
        //     'slug' => 'fourth-book',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugiat reprehenderit perferendis molestias a dolor necessitatibus dolores ab. Alias odit rem perspiciatis aspernatur ipsam natus error qui perferendis, quas ipsum nisi impedit totam eligendi minus suscipit. Exercitationem expedita deserunt quas nihil quam nostrum repudiandae quidem, blanditiis non ex. Adipisci dignissimos dolorum beatae, necessitatibus, iste facere delectus quibusdam eveniet placeat totam quos repellendus dolor temporibus non optio voluptas maiores numquam repellat exercitationem inventore quas maxime? Nulla, magni modi et earum quo, eveniet eligendi placeat qui maxime assumenda distinctio vel aut, voluptas in est. Reiciendis nulla excepturi sint cupiditate nam ullam libero odit cum deleniti dignissimos incidunt earum est, corporis accusantium, nemo distinctio tenetur dolorem eligendi sit esse architecto saepe, et blanditiis officia.Reprehenderit aut nostrum quod inventore sapiente cum, similique nulla consectetur saepe voluptatibus ea voluptatum nisi sint recusandae explicabo, delectus ipsam laboriosam. Excepturi, dolores qui iste ad delectus dicta voluptates nihil pariatur error, modi minima sed corrupti recusandae. Rerum aspernatur maxime exercitationem consequatur expedita asperiores voluptate sed eos optio velit dolorum at totam, itaque modi tempore cumque, vel atque dignissimos nemo excepturi, iste fugit soluta eius odit. At doloribus voluptates cum! Ipsa, quibusdam unde et excepturi veniam quod eveniet perferendis.',
        //     'kategori_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
