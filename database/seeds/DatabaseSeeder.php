<?php

use App\Course;
use App\Tag;
use App\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private $courses = [
        [   'id'=> 1,
            'name' => 'Introduction to VueJS',
            'series_type' => 'standalone_chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/792-Building a VueJS app part 1.png.png',
            'description' => "In this intro-level course, we create a VueJS app using Vue-CLI.  We then walk through the basics of VueJS, Vue Router, Vuex, and player.js to create a simple video player app.\n\nIf you're completely new to VueJS, this is the place to start.\n\nThis also acts as the first chapter in the Building a VueJS App mega-course.",
            'order' => 1.0,
            'difficulty' => 'beginner',
            'parent_id' => 3],
        [   'id'=> 2,
            'name' => 'Vuex: Loading data using axios and deserializing JSON API relationships',
            'series_type' => 'standalone_chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/699-Building a VueJS app part 2.png.png',
            'description' =>  "In this course we'll learn a huge amount about data handling with Vuex and VueJS -- how to load data from the server, how to handle relationships, and how to deal with JSON-API.\n\nSpecifically, we'll cover accessing Vuex state (directly and through getters), dispatching Vuex actions, using Vuex mutations, setting up Axios calls, and deserializing the JSON API format into something more directly usable.\n\nIn our app, we'll implement a tag system to organize and navigate through our videos.\n\n__How to follow along__\n\nThere are several options if you want to follow along.\n\nFirst, you could use MirageJS as a mock backend.  [Here's the course where I explain how to use it](https://www.vuescreencasts.com/courses/29), and [here's the github branch](https://github.com/jeffreybiles/vue-screencasts/tree/with-mirage-backend).  I'll be linking to specific videos and github commits from the relevant videos in this course.  This is probably the easiest way to follow along, but the downside is that data doesn't actually persist... this is a temporary solution to help you learn, not something you'll want to put into production.\n\nSecond, you could download the Ruby on Rails app I've created.  [Here's the app](https://github.com/jeffreybiles/vue-screencasts-server).  The relevant github commits will be linked in the video where they're needed.  I plan on creating a \"how to get a Ruby on Rails app running\" video sometime, but for now, only use this option if you're able to install and run a Rails app.\n\nThird, you could create your own API with the backend web framework of your choice.  Apparently that's Laravel and Node for most of you.  I don't plan on offering courses in those right now, but I may do that eventually if demand is high enough.\n\nFinally, you could just watch without creating the app yourself.  You'll probably learn less, but it's an option.",
            'order' => 2.0,
            'difficulty' => 'beginner',
            'parent_id' => 3],
        [   'id'=> 3,
            'name' => 'Building VueScreencasts.com',
            'series_type' => 'course',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/339-Building a VueJS app - Parent.png.png',
            'description' => "In this GIGANTIC course, we're going to start from zero and build VueScreencasts.com*.  A real, production-ready, money-making app, created on video.\n\nThis is probably the most in-depth introductions to Vue available -- and _definitely_ the most in-depth _free_ introduction to Vue that's available.  In addition to all the functionality you see, there's also a large admin section that we'll be building.  We really do cover almost everything here.\n\n\\*The progress of this series may sometimes be behind the state of the production app.",
            'difficulty' => 'beginner to advanced'],
        [   'id'=> 4,
            'name' => "Vuetify: Make a VueJS app look good, even if you're bad at design",
            'series_type' => 'standalone_chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/708-Building a VueJS app part 3.png.png',
            'description' => "In this chapter we're going to take a functional but ugly app and turn it into a beautiful app -- or, at the very least, one that's less ugly -- using Vuetify, a Material Design library for VueJS.\n\nSpecifically, we're going to cover creating a navbar, improving button style and interaction (such as @mousedown events), using the inbuilt style classes (including color), using a bootstrap-style rows/columns layout, and using a cards layout.",
            'order' => 3.0,
            'difficulty' => 'beginner',
            'parent_id' => 3],
        [   'id'=> 5,
            'name' => 'Vuex + LocalStorage to track video watch status',
            'series_type' => 'chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/021-Building a VueJS app part 4.png.png',
            'description' => "Let’s say we get a bunch of videos on our site, and people can’t remember everything they’ve watched… well, good news!  Computers are _great_ at remembering things!\n\nWe’re going to mark videos as played — either when the video ends or when the user clicks a button — and then display that information to the user on the video watch page and on the lists of videos.\n\nAlong the way we'll learn about Vuex, Localstorage, Font Awesome, and vue-video-player.",
            'order' => 4.0,
            'difficulty' => 'beginner',
            'parent_id' => 3],
        [   'id'=> 6,
            'name' => 'Video Creation Form - Text Inputs + Vuetify + Axios + Vuex',
            'series_type' => 'chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/187-Building a VueJS app part 5.png.png',
            'description' =>  "In this tutorial we learn how to add more videos to our VueJS app.\n\nWe'll start with building our own Create Video form using the basic input tags, then we'll greatly simplify it by using Vuetify's text input components.  \n\nWe'll also see how to persist the new videos to the server using Axios, then save it with Vuex.",
            'order' => 4.5,
            'difficulty' => 'beginner',
            'parent_id' => 3],
        [   'id'=> 7,
            'name' => 'Admin CRUD in Vuex',
            'series_type' => 'chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/612-Building a VueJS app part 6.png.png',
            'description' => "In this tutorial we’ll be adding a delete button, an edit page, and an admin page to our VueJS app.  Along the way we’ll discover Vue Filters and learn more Vuex patterns.\n\nVue Filters are a feature that lets us create purely functional code, then use it in our template tags to modify data.  The big advantage over a method is that you know it won't have side effects -- and it's also slightly more visually appealing to stack multiple filters than to nest multiple methods calls.\n\nThe Vuex patterns we'll be learning will using actions to edit individual records within the store and remove records -- and calling the appropriate mutations and Axios API calls to make that happen.",
            'order' => 5.0,
            'difficulty' => 'intermediate',
            'parent_id' => 3],
        [   'id'=> 8,
            'name' => 'Validating Forms with Vuetify',
            'series_type' => 'standalone_chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/326-Building a VueJS app part 7.png.png',
            'description' => "This course is all about validations!  We create custom validation rules, then combine them with Vuetify to make sure that our users can’t accidentally submit an invalid form.\n\nWe chose using custom validations over Vuelidate, Vee-Validate, or other libraries because our needs aren't yet complex enough to justify them, and it's a bit simpler to see how things work using custom validations.\n\nWe end up validating presence, minimum length, and maximum length.  These could be done with pure html, but they show the principles needed for more complex validations that can only be done with Javascript.\n\nWe also add some cool UI touches with the counter property on Vuetify's v-text-field component.\n",
            'order' => 7.65625,
            'difficulty' => 'beginner',
            'parent_id' => 3],
        [   'id'=> 9,
            'name' => 'Authentication and Authorization in VueJS',
            'series_type' => 'standalone_chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/117-Building a VueJS app part 8 v2.png.png',
            'description' => "Most apps will need authentication and authorization, but it can be extremely tricky the first time you build it.\n\nThis tutorial takes us step by logical step as we grow our authentication system, slowly making our login and registration process more usable and more secure.\n\nTowards the end, we tackle authorization and token authentication.\n\nIf you're using MirageJS to mock your backend, [here is the relevant video](https://www.vuescreencasts.com/watch/176).",
            'order' => 8.1875,
            'difficulty' => 'intermediate',
            'parent_id' => 3],
        [   'id'=> 10,
            'name' => "Notifications using Vuetify's snackbar component",
            'series_type' => 'standalone_chapter',
            'image_url' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/984-Building a VueJS app part 10.png.png',
            'description' =>  "Many user workflows can benefit from an unobtrusive notification system -- including, in our app, user login/registration and video create, edit, and destroy.\n\nIn this course we take Vuetify's snackbar component and build on it to create a reusable app-wide notification system.\n\nNote: there are libraries do this just as well or better, and I would recommend doing that for your project unless you have needs that require deep customization.  [Here's a listing of many of the popular ones](https://madewithvuejs.com/blog/best-vue-js-notification-components).",
            'order' => 9.25,
            'difficulty' => 'intermediate',
            'parent_id' => 3],
    ];

    private $videos = [
        [
            'name' => 'Playing video with vue-video-player',
            'description' => "Using the vue-video-player was less difficult than I imagined.  Let's get it working and get our video playing!",
            'video_url' => "https://vue-screencasts.s3.us-east-2.amazonaws.com/video-files/Series%3A+Building+a+VueJS+App/1.5+-+Playing+video+with+the+vue-video-player.mp4",
            'duration' => 439,
            'published_at' => "2019-09-08 13:00:00",
            'order' => 6.0,
            'code_summary_state' => "not_ready",
            'course_id' => 1
        ],
        [
            'name' => 'Loading Server data into Vuex',
            'description' => "By loading the data into Vuex, we can easily access it all throughout our app while using fewer API calls.  \n\nTo accomplish this, we move our loading call into a Vuex action, then call it from App.vue.\n\n[Github: Loading videos into store](https://github.com/jeffreybiles/vue-screencasts/commit/1910e7670b313a5ad16616d059bad14c86ebea40)",
            'thumbnail' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/771-Building a VueJS app part 2.png.png',
            'video_url' => "https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/videos/341-2.2 - Putting Server Data into VueX.mp4.mp4",
            'duration' => 618,
            'published_at' => "2019-09-09 07:00:00",
            'order' => 3.0,
            'code_summary_state' => "not_ready",
            'course_id' => 2
        ],
        [
            'name' => 'What Is Vuetify?',
            'description' => "[Vuetify](https://vuetifyjs.com/en/) is a UI library that follows the Material Design spec.  It offers lots of pre-made Components with a consistent theme, so you can get your app off the ground and looking decent quickly.",
            'thumbnail' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/634-Building a VueJS app part 3.png.png',
            'video_url' => "https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/videos/061-3.1 - What Is Vuetify.mp4.mp4",
            'duration' => 211,
            'published_at' => "2019-09-11 09:00:00",
            'order' => 3.0,
            'code_summary_state' => "not_ready",
            'course_id' => 4
        ],
        [
            'name' => 'Introduction to Tracking Watched Videos',
            'description' => "A quick preview of what we'll be building in this mini-course.",
            'thumbnail' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/285-Building a VueJS app part 4.png.png',
            'video_url' => "https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/videos/594-4.0 - Introduction to Tracking Watched Videos.mp4.mp4",
            'duration' => 28,
            'published_at' => "2019-09-13 07:00:00",
            'order' => 1.0,
            'code_summary_state' => "not_ready",
            'course_id' => 5
        ],
        [
            'name' => 'Introduction to Forms and Persisting Videos',
            'description' => "A quick preview of what we'll be building in this mini-course.",
            'thumbnail' => 'https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/thumbnails/285-Building a VueJS app part 4.png.png',
            'video_url' => "https://vue-screencasts-uploads.s3-us-west-2.amazonaws.com/videos/546-5.0 Introduction to Forms and Persisting Videos.mp4.mp4",
            'duration' => 104,
            'published_at' => "2019-09-16 08:00:00",
            'order' => 1.0,
            'code_summary_state' => "not_ready",
            'course_id' => 6
        ]
    ];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->courses as $course){
            Course::create($course);
        }

        $tag1 = Tag::create([
            'name' => 'Javascript'
        ]);

        $tag2 = Tag::create([
            'name' => 'VueJS'
        ]);

        foreach ($this->videos as $video){
            $video = Video::create($video);
            $video->tags()->attach([$tag1->id, $tag2->id]);
        }
    }
}
