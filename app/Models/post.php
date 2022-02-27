<?php

namespace App\Models;


class Post 
{
  private static $blog_posts = [
[      
    "title" => "Halaman Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => "fadia nurul",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum voluptate eius fuga, quas doloribus expedita rerum quia tempore cumque nostrum laudantium ipsam nemo libero corporis minus saepe aliquam ipsa velit ut optio recusandae odio. Ad, maiores optio at a nobis, harum exercitationem, deserunt provident corrupti odit quisquam beatae nisi veritatis rerum porro! Id, exercitationem dignissimos quisquam nam nostrum aut dolore impedit illo ipsum cum voluptates. Qui cumque quae a dolore voluptates totam, dolorum pariatur, ratione fugit suscipit iusto beatae quos."
],

[
    "title" => "Halaman Post kedua",
    "slug" => "judul-post-kedua",
    "author" => "fadia",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi velit libero id, incidunt maxime neque suscipit ab, molestiae eligendi sit quasi aliquam natus voluptates nam dolorum. Obcaecati facilis neque voluptates distinctio libero ratione, cum quaerat odio id, nisi voluptatem sequi culpa nam, excepturi minus tenetur et mollitia nesciunt sit! Mollitia blanditiis similique repellendus voluptatum laborum, explicabo illo. Quos enim sapiente, quisquam eum nemo eaque fugiat ad mollitia quae odit facere aliquid ipsam itaque ut hic odio eius nobis aperiam in exercitationem accusamus? Quo illum deleniti at dolor, laboriosam quos vero laudantium corrupti necessitatibus culpa perferendis sint ratione expedita maiores excepturi."
]
];

public static function all()
{
    return collect(self::$blog_posts);
}

public static function find($slug)
{
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
}
}
