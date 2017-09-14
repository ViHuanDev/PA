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
use App\LanguageMeta;
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
        LanguageMeta::truncate();
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
        $languageMetaQuantity = 70;
        $menu = new Menu;
        $group = new Group;

        factory(Language::class, $languageQuantity)->create();
        factory(Menu::class, $menuQuantity)->create()->each(function($menu){
            $languagemeta = new LanguageMeta;
            $languagemeta->content_id = $menu->id;
            if($menu->id % 2 ==0){
                $indexcontent_id = 0;
                $language_id= 1;
            }
            else{
                $indexcontent_id = $menu->id+1;
                $language_id= 2;
            }
            $languagemeta->language_id = $language_id;
            $languagemeta->indexcontent_id = $indexcontent_id;
            $languagemeta->reference = $menu->getTable();
            $languagemeta->save();
        });
        factory(Group::class, $groupQuantity)->create()->each(function($group){
            $menu = Menu::all();
            foreach ($menu as $key => $m) {
                $menu_id = $m->id;
                $value = mt_rand(0, 1);
                $display = mt_rand(0, 1);
                $group->menu()->attach($menu_id,['value'=>$value,'display'=>$display]);
            }
            $languagemeta = new LanguageMeta;
            $languagemeta->content_id = $group->id;
            if($group->id % 2 ==0){
                $indexcontent_id = 0;
                $language_id= 1;
            }
            else{
                $indexcontent_id = $group->id+1;
                $language_id= 2;
            }
            $languagemeta->language_id = $language_id;
            $languagemeta->indexcontent_id = $indexcontent_id;
            $languagemeta->reference = $group->getTable();
            $languagemeta->save();
        });
        factory(Organization::class, $organizationQuantity)->create()->each(function($organization){
            $languagemeta = new LanguageMeta;
            $languagemeta->content_id = $organization->id;
            if($organization->id % 2 ==0){
                $indexcontent_id = 0;
                $language_id= 1;
            }
            else{
                $indexcontent_id = $organization->id+1;
                $language_id= 2;
            }
            $languagemeta->language_id = $language_id;
            $languagemeta->indexcontent_id = $indexcontent_id;
            $languagemeta->reference = $organization->getTable();
            $languagemeta->save();
        });;
        factory(User::class, $usersQuantity)->create();
        factory(Status::class, $statusQuantity)->create();
        factory(GroupFaq::class, $groupfaqQuantity)->create()->each(function($groupfaq){
            $languagemeta = new LanguageMeta;
            $languagemeta->content_id = $groupfaq->id;
            if($groupfaq->id % 2 ==0){
                $indexcontent_id = 0;
                $language_id= 1;
            }
            else{
                $indexcontent_id = $groupfaq->id+1;
                $language_id= 2;
            }
            $languagemeta->language_id = $language_id;
            $languagemeta->indexcontent_id = $indexcontent_id;
            $languagemeta->reference = $groupfaq->getTable();
            $languagemeta->save();
        });
        factory(Document::class, $documentQuantity)->create();
        factory(DocumentItem::class, $documentitemQuantity)->create()->each(function($documentitem){
            $languagemeta = new LanguageMeta;
            $languagemeta->content_id = $documentitem->id;
            if($documentitem->id % 2 ==0){
                $indexcontent_id = 0;
                $language_id= 1;
            }
            else{
                $indexcontent_id = $documentitem->id+1;
                $language_id= 2;
            }
            $languagemeta->language_id = $language_id;
            $languagemeta->indexcontent_id = $indexcontent_id;
            $languagemeta->reference = $documentitem->getTable();
            $languagemeta->save();
        });
        factory(Faq::class, $faqQuantity)->create()->each(
            function($faq){
                $documentitem = DocumentItem::all()->random()->pluck('id');
                $faq->documentitem()->attach($documentitem);
                $languagemeta = new LanguageMeta;
                $languagemeta->content_id = $faq->id;
                if($faq->id % 2 ==0){
                    $indexcontent_id = 0;
                    $language_id= 1;
                }
                else{
                    $indexcontent_id = $faq->id+1;
                    $language_id= 2;
                }
                $languagemeta->language_id = $language_id;
                $languagemeta->indexcontent_id = $indexcontent_id;
                $languagemeta->reference = $faq->getTable();
                $languagemeta->save();
            }
            );
        factory(CheckList::class, $checklistQuantity)->create()->each(
            function($checklist){
                $faq = Faq::all()->random(mt_rand(1,100))->pluck('id');
                $status = mt_rand(1, 4);
                $checklist->faq()->attach($faq,['status_id'=>$status]);
                $users = User::all()->random()->pluck('id');
                $checklist->user()->attach($users,['status'=>Action::APPROVAL]);
                $languagemeta = new LanguageMeta;
                $languagemeta->content_id = $checklist->id;
                if($checklist->id % 2 ==0){
                    $indexcontent_id = 0;
                    $language_id= 1;
                }
                else{
                    $indexcontent_id = $checklist->id+1;
                    $language_id= 2;
                }
                $languagemeta->language_id = $language_id;
                $languagemeta->indexcontent_id = $indexcontent_id;
                $languagemeta->reference = $checklist->getTable();
                $languagemeta->save();
            }
            );
        factory(Comment::class, $commentQuantity)->create();

    }
}
