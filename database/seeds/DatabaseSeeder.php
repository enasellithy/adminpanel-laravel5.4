<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Cat;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new User;
        $add->name = 'Ahmed';
        $add->email = 'p@mail.com';
        $add->password = bcrypt(123456);
        $add->save();
        
        $add = new User;
        $add->name = 'Adel';
        $add->email = 'w@mail.com';
        $add->password = bcrypt(123456);
        $add->save();
        
        $add = new User;
        $add->name = 'Nour';
        $add->email = 'q@mail.com';
        $add->password = bcrypt(123456);
        $add->save();
        
        $add = new User;
        $add->name = 'raim';
        $add->email = 'x@mail.com';
        $add->password = bcrypt(123456);
        $add->save();
        
        $add = new Cat;
        $add->name = 'Books';
        $add->save();
        
        $add = new Cat;
        $add->name = 'Toys';
        $add->save();
        
        $add = new Cat;
        $add->name = 'Furniture';
        $add->save();
        
        $add = new Cat;
        $add->name = 'Kitchen & Dining';
        $add->save();
        
        $add = new Cat;
        $add->name = 'Jewelry';
        $add->save();
        
        $add = new Cat;
        $add->name = 'Beauty & Grooming';
        $add->save();
    }
}
