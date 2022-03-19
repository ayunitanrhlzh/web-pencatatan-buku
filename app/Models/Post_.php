<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Page",
            "slug" => "first-page",
            "author" => "Nama 1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorem ea unde soluta doloribus fugiat optio corporis voluptatem animi laudantium necessitatibus sapiente quaerat harum quis natus, reprehenderit cupiditate facilis praesentium alias, at libero dignissimos maxime beatae. Eveniet, similique id illo ratione porro quibusdam assumenda, voluptatibus at nesciunt praesentium nam qui sint? Consequatur consectetur nisi enim consequuntur? Soluta doloremque iusto tenetur porro facilis impedit debitis magnam, ratione id minus repudiandae! Illo, adipisci. Nulla perferendis velit saepe. Voluptatibus eos odit ipsa est!"
        ],
        [
            "title" => "Second Page",
            "slug" => "second-page",
            "author" => "Nama 2",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed nostrum non placeat, exercitationem dolore aspernatur eveniet possimus reprehenderit aut perferendis nulla repellendus impedit adipisci dolores porro voluptates ad quis sit? Excepturi consectetur praesentium voluptates molestias suscipit aliquam minus, modi animi aut vel, quis reprehenderit cumque. Facilis sed optio excepturi quis architecto blanditiis quae at corrupti ut. Commodi minus, cum, expedita, quae eum optio voluptate impedit dolorum praesentium quas tempora rem rerum reprehenderit perferendis. Iste, beatae? Nemo impedit obcaecati eius a nesciunt porro molestias corrupti repudiandae magni vitae atque facere amet at, placeat, aliquam in. Officia repudiandae necessitatibus ullam molestiae quaerat!"
        ]
        ];

        public static function all()
        {
            return collect (self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
