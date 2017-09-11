<?php

use App\Faq;
use App\Menu;
use App\User;
use App\Group;
use App\Action;
use App\Status;
use App\Comment;
use App\Document;
use App\GroupFaq;
use App\Language;
use App\CheckList;
use Faker\Factory;
use App\DocumentItem;
use App\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Menu::truncate();
        Group::truncate();
        User::truncate();
        Organization::truncate();
        CheckList::truncate();
        Comment::truncate();
        Status::truncate();
        GroupFaq::truncate();
        Faq::truncate();
        DocumentItem::truncate();
        Document::truncate();
        Language::truncate();
        DB::table('group_menu')->truncate();
        DB::table('checklist_user')->truncate();
        DB::table('documentitem_faq')->truncate();
        DB::table('checklist_faq')->truncate();

        $usersQuantity = 100;
        $menuQuantity = 70;
        $groupQuantity = 20;
        $organizationQuantity = 50;
        $statusQuantity = 4;
        $groupfaqQuantity = 100;
        $documentQuantity = 1;
        $documentitemQuantity = 100;
        $faqQuantity = 100;
        $checklistQuantity = 50;
        $commentQuantity = 1000;
        $languageQuantity = 2;

        factory(Language::class, $languageQuantity)->create();
        factory(Menu::class, $menuQuantity)->create();
        factory(Group::class, $groupQuantity)->create()->each(function($group){
            $menu = Menu::all();
            foreach ($menu as $key => $m) {
                $menu_id = $m->id;
                $value = mt_rand(0, 1);
                $display = mt_rand(0, 1);
                $group->menu()->attach($menu_id,['value'=>$value,'display'=>$display]);
            }
        });
        factory(Organization::class, $organizationQuantity)->create();
        factory(User::class, $usersQuantity)->create();
        factory(Status::class, $statusQuantity)->create();
        factory(GroupFaq::class, $groupfaqQuantity)->create();
        factory(Document::class, $documentQuantity)->create();
        factory(DocumentItem::class, $documentitemQuantity)->create();
        factory(Faq::class, $faqQuantity)->create()->each(
            function($faq){
                $documentitem = DocumentItem::all()->random()->pluck('id');
                $faq->documentitem()->attach($documentitem);
            }
            );
        factory(CheckList::class, $checklistQuantity)->create()->each(
            function($checklist){
                $faq = Faq::all()->random(mt_rand(1,100))->pluck('id');
                $status = mt_rand(1, 4);
                $checklist->faq()->attach($faq,['status_id'=>$status]);
                $users = User::all()->random()->pluck('id');
                $checklist->user()->attach($users,['status'=>Action::APPROVAL]);
            }
            );
        factory(Comment::class, $commentQuantity)->create();

    }
}
