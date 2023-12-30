<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dandy wahyudin',
            'email' => 'dandywahyudin19@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Movie::create([
            'title' => 'The Hunger Games: The Ballad of Songbirds & Snakes',
            'slug' => 'The-Hunger-Games-The-Ballad-of-Songbirds-&-Snakes',
            'overview' => '64 years before he becomes the tyrannical president of Panem, Coriolanus Snow sees a chance for a change in fortunes when he mentors Lucy Gray Baird, the female tribute from District 12.',
            'popularity' =>  2790.356,
            'poster_path' => '/mBaXZ95R2OxueZhvQbcEWy2DqyO.jpg',
            'backdrop_path' => '/5a4JdoFwll5DRtKMe7JLuGQ9yJm.jpg',
            'release_date' => '2023-11-15',
            'category_id' => 1,
            
        ]);
        Movie::create([
            'title' => 'The Twilight Saga: Breaking Dawn - Part 2',
            'slug' => 'The-Twilight-Saga-Breaking-Dawn-Part 2',
            'overview' => 'After the birth of Renesmee, the Cullens gather other vampire clans in order to protect the child from a false allegation that puts the family in front of the Volturi.',
            'popularity' => 88.722,
            'poster_path' => '/7IGdPaKujv0BjI0Zd0m0a4CzEjJ.jpg',
            'backdrop_path' => '/qkl57wzSFrpi2sRpoc2mZJbMuLP.jpg',
            'release_date' => '2012-11-13',
            'category_id' => 3,
           
            
        ]);
        Movie::create([
            'title' => 'Interstellar',
            'slug' => 'Interstellar',
            'overview' => 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.',
            'popularity' => 136.414,
            'poster_path' => '/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg',
            'backdrop_path' => '/xJHokMbljvjADYdit5fK5VQsXEG.jpg',
            'release_date' => '2014-11-05',
            'category_id' => 1,
           
        ]);
        Movie::create([
            'title' => 'Aquaman and the Lost Kingdom',
            'slug' => 'Aquaman-and-the-Lost-Kingdom',
            'overview' => 'Black Manta, still driven by the need to avenge his fathers death and wielding the power of the mythic Black Trident, will stop at nothing to take Aquaman down once and for all. To defeat him, Aquaman must turn to his imprisoned brother Orm, the former King of Atlantis, to forge an unlikely alliance in order to save the world from irreversible destruction.',
            'popularity' => 1785.691,
            'poster_path' => '/8xV47NDrjdZDpkVcCFqkdHa3T0C.jpg',
            'backdrop_path' => '/jXJxMcVoEuXzym3vFnjqDW4ifo6.jpg',
            'release_date' => '2018-12-07',
            'category_id' => 1,
           
        ]);
        Movie::create([
            'title' => 'John Wick: Chapter 3 - Parabellum',
            'slug' => 'John Wick-Chapter-3-Parabellum',
            'overview' => 'Super-assassin John Wick returns with a $14 million price tag on his head and an army of bounty-hunting killers on his trail. After killing a member of the shadowy international assassin’s guild, the High Table, John Wick is excommunicado, but the world’s most ruthless hit men and women await his every turn.',
            'popularity' => 80.587,
            'poster_path' => '/ziEuG1essDuWuC5lpWUaw1uXY2O.jpg',
            'backdrop_path' => '/vVpEOvdxVBP2aV166j5Xlvb5Cdc.jpg',
            'release_date' => '2019-05-15',
            'category_id' => 1,
           
        ]);
        Movie::create([
            'title' => 'How to Train Your Dragon',
            'slug' => 'How-to-Train-Your-Dragon',
            'overview' => 'As the son of a Viking leader on the cusp of manhood, shy Hiccup Horrendous Haddock III faces a rite of passage: he must kill a dragon to prove his warrior mettle. But after downing a feared dragon, he realizes that he no longer wants to destroy it, and instead befriends the beast – which he names Toothless – much to the chagrin of his warrior father.',
            'popularity' => 106.711,
            'poster_path' => '/ygGmAO60t8GyqUo9xYeYxSZAR3b.jpg',
            'backdrop_path' => '/aH9KWmXFMamXkHMgLjnQmSYjScL.jpg',
            'release_date' => '2010-03-18',
            'category_id' => 1,
           
        ]);
        Movie::create([
            'title' => 'Kung Fu Panda 2',
            'slug' => 'Kung-Fu-Panda-2',
            'overview' => 'Po is now living his dream as The Dragon Warrior, protecting the Valley of Peace alongside his friends and fellow kung fu masters, The Furious Five - Tigress, Crane, Mantis, Viper and Monkey. But Po’s new life of awesomeness is threatened by the emergence of a formidable villain, who plans to use a secret, unstoppable weapon to conquer China and destroy kung fu. It is up to Po and The Furious Five to journey across China to face this threat and vanquish it. But how can Po stop a weapon that can stop kung fu? He must look to his past and uncover the secrets of his mysterious origins; only then will he be able to unlock the strength he needs to succeed.',
            'popularity' => 163.177,
            'poster_path' => '/mtqqD00vB4PGRt20gWtGqFhrkd0.jpg',
            'backdrop_path' => '/7BdxZXbSkUiVeCRXKD3hi9KYeWm.jpg',
            'release_date' => '2011-05-25',
            'category_id' => 1,
        ]);
        Movie::create([
            'title' => 'Avatar: The Way of Water',
            'slug' => 'Avatar-The-Way-of-Water',
            'overview' => 'Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.',
            'popularity' => 359.644,
            'poster_path' => '/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg',
            'backdrop_path' => '/8rpDcsfLJypbO6vREc0547VKqEv.jpg',
            'release_date' => '2022-12-14',
            'category_id' => 1,
        ]);
        Movie::create([
            'title' => 'Barbie',
            'slug' => 'barbie',
            'overview' => 'In 1956 France, a priest is violently murdered, and Sister Irene begins to investigate. She once again comes face-to-face with a powerful evil.',
            'popularity' => 269.215,
            'poster_path' => '/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg',
            'backdrop_path' => '/nHf61UzkfFno5X1ofIhugCPus2R.jpg',
            'release_date' => '2023-07-19',
            'category_id' => 1,
        ]);
        Movie::create([
            'title' => 'The Nun II',
            'slug' => 'The-Nun-II',
            'overview' => 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.',
            'popularity' => 480.109,
            'poster_path' => '/5gzzkR7y3hnY8AD1wXjCnVlHba5.jpg',
            'backdrop_path' => '/gN79aDbZdaSJkFS1iVA17HplF2X.jpg',
            'release_date' => '2023-09-06',
            'category_id' => 1,
        ]);
        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);
        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);
        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);
        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);
        Category::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);
        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        Category::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);
    }
}
