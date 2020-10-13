<?php
/*
Question: What are traits in Laravel?
Answer :
    PHP Traits are simply a group of methods that you want include within another class. A Trait,
    like an abstract class cannot be instantiated by itself.Trait are created to reduce the limitations
    of single inheritance in PHP by enabling a developer to reuse sets of methods freely in several independent
    classes living in different class hierarchies.

    Here is an example of trait.

    trait Sharable {
        public function share($item)
        {
            return 'share this item';
        }
    }

    You could then include this Trait within other classes like this:


    class Post {
        use Sharable;
    }

    class Comment {
        use Sharable;
    }

    Now if you were to create new objects out of these classes you would find that they both have the share() method available:

    $post = new Post;
    echo $post->share(''); // 'share this item'

    $comment = new Comment;
    echo $comment->share(''); // 'share this item'