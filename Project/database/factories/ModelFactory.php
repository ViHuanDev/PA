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
use App\DocumentItem;
use App\LanguageMeta;
use App\Organization;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Language::class, function (Faker\Generator $faker){
	return [
			'code' => $faker->randomElement([Language::VI,Language::EN]),
			'name' => $faker->randomElement([Language::VIETNAMESE,Language::ENGLISH]),
	];
});
$factory->define(Menu::class, function (Faker\Generator $faker){
	return [
		'parent_id' => $faker->numberBetween(1,10),
		'name' => $faker->word,
		'nameroute' => $faker->word,
		'order' => $faker->numberBetween(1,6),
	];
});
$factory->define(Group::class, function (Faker\Generator $faker){
	return [
		'name' => $faker->name,
		'note' => $faker->paragraph(1),
	];
});
$factory->define(Organization::class, function (Faker\Generator $faker){
	return [
		'name' => $faker->name,
		'organization_code' => $faker->ean8,
		'address' => $faker->city,
		'phone' => $faker->tollFreePhoneNumber,
		'location' => $faker->streetAddress,
		'representative' => $faker->userName,
	];
});
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
    	'fullname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'status' => $status = $faker->randomElement([User::PENDING, USER::APPROVAL,User::REFUSE, USER::BAN]),
       	'phone' => $faker->tollFreePhoneNumber,
       	'extendinfo' => $faker->realText($maxNbChars = 200, $indexSize = 2),
       	'position' => $faker->realText($maxNbChars = 200, $indexSize = 1),
        'group_id' => Group::all()->random()->id,
        'organization_id' => Organization::all()->random()->id,
        'remember_token' => str_random(10),
    ];
});
$factory->define(Document::class, function (Faker\Generator $faker){
	return [
		'name' => $faker->name,
		'location' => $faker->streetAddress,
		'document_id' => null,
		'version' => $faker->areaCode,
		'filepath' => $faker->file(public_path('document/file/'), public_path('document'), false),
	];
});
$factory->define(DocumentItem::class, function (Faker\Generator $faker){
	return [
		'document_id' => Document::all()->random()->id,
		'parent_id' => null,
		'content' => $faker->realText($maxNbChars = 300, $indexSize = 1),
		'document_index' => null,
	];
});
$factory->define(GroupFaq::class, function (Faker\Generator $faker){
	return [
		'name' => $faker->name,
		'parent_id' => null,
	];
});
$factory->define(Faq::class, function (Faker\Generator $faker){
	return [
		'groupfaq_id' => GroupFaq::all()->random()->id,
		'content' => $faker->realText($maxNbChars = 200, $indexSize = 1),
		'status' => $status = $faker->randomElement([Action::PENDING, Action::APPROVAL,Action::REFUSE]),
	];
});
$factory->define(Status::class, function (Faker\Generator $faker){
	return [
			'name' => $faker->randomElement([Action::PENDING, Action::APPROVAL,Action::REFUSE,Action::FIXING]),
	];
});
$factory->define(CheckList::class, function (Faker\Generator $faker){
	return [
		'name' => $faker->name,
        'organization_id' => Organization::all()->random()->id,
		'status' => $status = $faker->randomElement([Action::PENDING, Action::APPROVAL,Action::REFUSE]),
	];
});
$factory->define(Comment::class, function (Faker\Generator $faker){
	return [
		'user_id' => User::all()->random()->id,
        'checklistfaq_id' => $faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt'),
		'content' => $faker->realText($maxNbChars = 200, $indexSize = 1),
		'parent_id' =>null,
	];
});
