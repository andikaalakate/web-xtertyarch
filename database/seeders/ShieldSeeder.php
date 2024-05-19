<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"super_admin","guard_name":"web","permissions":["view_home::hero","view_any_home::hero","create_home::hero","update_home::hero","restore_home::hero","restore_any_home::hero","replicate_home::hero","reorder_home::hero","delete_home::hero","delete_any_home::hero","force_delete_home::hero","force_delete_any_home::hero","view_home::service","view_any_home::service","create_home::service","update_home::service","restore_home::service","restore_any_home::service","replicate_home::service","reorder_home::service","delete_home::service","delete_any_home::service","force_delete_home::service","force_delete_any_home::service","view_home::tide","view_any_home::tide","create_home::tide","update_home::tide","restore_home::tide","restore_any_home::tide","replicate_home::tide","reorder_home::tide","delete_home::tide","delete_any_home::tide","force_delete_home::tide","force_delete_any_home::tide","view_shield::role","view_any_shield::role","create_shield::role","update_shield::role","delete_shield::role","delete_any_shield::role","view_user","view_any_user","create_user","update_user","restore_user","restore_any_user","replicate_user","reorder_user","delete_user","delete_any_user","force_delete_user","force_delete_any_user","page_MyProfilePage","widget_OverlookWidget","view_home::about","view_any_home::about","create_home::about","update_home::about","restore_home::about","restore_any_home::about","replicate_home::about","reorder_home::about","delete_home::about","delete_any_home::about","force_delete_home::about","force_delete_any_home::about","view_home::feature","view_any_home::feature","create_home::feature","update_home::feature","restore_home::feature","restore_any_home::feature","replicate_home::feature","reorder_home::feature","delete_home::feature","delete_any_home::feature","force_delete_home::feature","force_delete_any_home::feature","view_home::header","view_any_home::header","create_home::header","update_home::header","restore_home::header","restore_any_home::header","replicate_home::header","reorder_home::header","delete_home::header","delete_any_home::header","force_delete_home::header","force_delete_any_home::header","view_home::product","view_any_home::product","create_home::product","update_home::product","restore_home::product","restore_any_home::product","replicate_home::product","reorder_home::product","delete_home::product","delete_any_home::product","force_delete_home::product","force_delete_any_home::product","view_home::project","view_any_home::project","create_home::project","update_home::project","restore_home::project","restore_any_home::project","replicate_home::project","reorder_home::project","delete_home::project","delete_any_home::project","force_delete_home::project","force_delete_any_home::project"]},{"name":"customer","guard_name":"web","permissions":["view_home::hero","view_any_home::hero","create_home::hero","update_home::hero","restore_home::hero","restore_any_home::hero","replicate_home::hero","reorder_home::hero","delete_home::hero","delete_any_home::hero","force_delete_home::hero","force_delete_any_home::hero","page_MyProfilePage"]},{"name":"admin","guard_name":"web","permissions":["view_home::hero","view_any_home::hero","create_home::hero","update_home::hero","restore_home::hero","restore_any_home::hero","replicate_home::hero","reorder_home::hero","delete_home::hero","delete_any_home::hero","force_delete_home::hero","force_delete_any_home::hero","view_home::service","view_any_home::service","create_home::service","update_home::service","restore_home::service","restore_any_home::service","replicate_home::service","reorder_home::service","delete_home::service","delete_any_home::service","force_delete_home::service","force_delete_any_home::service","view_home::tide","view_any_home::tide","create_home::tide","update_home::tide","restore_home::tide","restore_any_home::tide","replicate_home::tide","reorder_home::tide","delete_home::tide","delete_any_home::tide","force_delete_home::tide","force_delete_any_home::tide","view_user","view_any_user","create_user","update_user","restore_user","restore_any_user","replicate_user","reorder_user","delete_user","delete_any_user","force_delete_user","force_delete_any_user","page_MyProfilePage","widget_OverlookWidget","view_home::about","view_any_home::about","create_home::about","update_home::about","restore_home::about","restore_any_home::about","replicate_home::about","reorder_home::about","delete_home::about","delete_any_home::about","force_delete_home::about","force_delete_any_home::about","view_home::feature","view_any_home::feature","create_home::feature","update_home::feature","restore_home::feature","restore_any_home::feature","replicate_home::feature","reorder_home::feature","delete_home::feature","delete_any_home::feature","force_delete_home::feature","force_delete_any_home::feature","view_home::header","view_any_home::header","create_home::header","update_home::header","restore_home::header","restore_any_home::header","replicate_home::header","reorder_home::header","delete_home::header","delete_any_home::header","force_delete_home::header","force_delete_any_home::header","view_home::product","view_any_home::product","create_home::product","update_home::product","restore_home::product","restore_any_home::product","replicate_home::product","reorder_home::product","delete_home::product","delete_any_home::product","force_delete_home::product","force_delete_any_home::product","view_home::project","view_any_home::project","create_home::project","update_home::project","restore_home::project","restore_any_home::project","replicate_home::project","reorder_home::project","delete_home::project","delete_any_home::project","force_delete_home::project","force_delete_any_home::project"]}]';
        $directPermissions = '{"54":{"name":"view-any HomeAbout","guard_name":"web"},"55":{"name":"view-any HomeAbout","guard_name":"api"},"56":{"name":"view HomeAbout","guard_name":"web"},"57":{"name":"view HomeAbout","guard_name":"api"},"58":{"name":"create HomeAbout","guard_name":"web"},"59":{"name":"create HomeAbout","guard_name":"api"},"60":{"name":"update HomeAbout","guard_name":"web"},"61":{"name":"update HomeAbout","guard_name":"api"},"62":{"name":"delete HomeAbout","guard_name":"web"},"63":{"name":"delete HomeAbout","guard_name":"api"},"64":{"name":"restore HomeAbout","guard_name":"web"},"65":{"name":"restore HomeAbout","guard_name":"api"},"66":{"name":"force-delete HomeAbout","guard_name":"web"},"67":{"name":"force-delete HomeAbout","guard_name":"api"},"68":{"name":"replicate HomeAbout","guard_name":"web"},"69":{"name":"replicate HomeAbout","guard_name":"api"},"70":{"name":"reorder HomeAbout","guard_name":"web"},"71":{"name":"reorder HomeAbout","guard_name":"api"},"72":{"name":"view-any HomeCta","guard_name":"web"},"73":{"name":"view-any HomeCta","guard_name":"api"},"74":{"name":"view HomeCta","guard_name":"web"},"75":{"name":"view HomeCta","guard_name":"api"},"76":{"name":"create HomeCta","guard_name":"web"},"77":{"name":"create HomeCta","guard_name":"api"},"78":{"name":"update HomeCta","guard_name":"web"},"79":{"name":"update HomeCta","guard_name":"api"},"80":{"name":"delete HomeCta","guard_name":"web"},"81":{"name":"delete HomeCta","guard_name":"api"},"82":{"name":"restore HomeCta","guard_name":"web"},"83":{"name":"restore HomeCta","guard_name":"api"},"84":{"name":"force-delete HomeCta","guard_name":"web"},"85":{"name":"force-delete HomeCta","guard_name":"api"},"86":{"name":"replicate HomeCta","guard_name":"web"},"87":{"name":"replicate HomeCta","guard_name":"api"},"88":{"name":"reorder HomeCta","guard_name":"web"},"89":{"name":"reorder HomeCta","guard_name":"api"},"90":{"name":"view-any HomeFeature","guard_name":"web"},"91":{"name":"view-any HomeFeature","guard_name":"api"},"92":{"name":"view HomeFeature","guard_name":"web"},"93":{"name":"view HomeFeature","guard_name":"api"},"94":{"name":"create HomeFeature","guard_name":"web"},"95":{"name":"create HomeFeature","guard_name":"api"},"96":{"name":"update HomeFeature","guard_name":"web"},"97":{"name":"update HomeFeature","guard_name":"api"},"98":{"name":"delete HomeFeature","guard_name":"web"},"99":{"name":"delete HomeFeature","guard_name":"api"},"100":{"name":"restore HomeFeature","guard_name":"web"},"101":{"name":"restore HomeFeature","guard_name":"api"},"102":{"name":"force-delete HomeFeature","guard_name":"web"},"103":{"name":"force-delete HomeFeature","guard_name":"api"},"104":{"name":"replicate HomeFeature","guard_name":"web"},"105":{"name":"replicate HomeFeature","guard_name":"api"},"106":{"name":"reorder HomeFeature","guard_name":"web"},"107":{"name":"reorder HomeFeature","guard_name":"api"},"108":{"name":"view-any HomeFooter","guard_name":"web"},"109":{"name":"view-any HomeFooter","guard_name":"api"},"110":{"name":"view HomeFooter","guard_name":"web"},"111":{"name":"view HomeFooter","guard_name":"api"},"112":{"name":"create HomeFooter","guard_name":"web"},"113":{"name":"create HomeFooter","guard_name":"api"},"114":{"name":"update HomeFooter","guard_name":"web"},"115":{"name":"update HomeFooter","guard_name":"api"},"116":{"name":"delete HomeFooter","guard_name":"web"},"117":{"name":"delete HomeFooter","guard_name":"api"},"118":{"name":"restore HomeFooter","guard_name":"web"},"119":{"name":"restore HomeFooter","guard_name":"api"},"120":{"name":"force-delete HomeFooter","guard_name":"web"},"121":{"name":"force-delete HomeFooter","guard_name":"api"},"122":{"name":"replicate HomeFooter","guard_name":"web"},"123":{"name":"replicate HomeFooter","guard_name":"api"},"124":{"name":"reorder HomeFooter","guard_name":"web"},"125":{"name":"reorder HomeFooter","guard_name":"api"},"126":{"name":"view-any HomeHeader","guard_name":"web"},"127":{"name":"view-any HomeHeader","guard_name":"api"},"128":{"name":"view HomeHeader","guard_name":"web"},"129":{"name":"view HomeHeader","guard_name":"api"},"130":{"name":"create HomeHeader","guard_name":"web"},"131":{"name":"create HomeHeader","guard_name":"api"},"132":{"name":"update HomeHeader","guard_name":"web"},"133":{"name":"update HomeHeader","guard_name":"api"},"134":{"name":"delete HomeHeader","guard_name":"web"},"135":{"name":"delete HomeHeader","guard_name":"api"},"136":{"name":"restore HomeHeader","guard_name":"web"},"137":{"name":"restore HomeHeader","guard_name":"api"},"138":{"name":"force-delete HomeHeader","guard_name":"web"},"139":{"name":"force-delete HomeHeader","guard_name":"api"},"140":{"name":"replicate HomeHeader","guard_name":"web"},"141":{"name":"replicate HomeHeader","guard_name":"api"},"142":{"name":"reorder HomeHeader","guard_name":"web"},"143":{"name":"reorder HomeHeader","guard_name":"api"},"144":{"name":"view-any HomeHero","guard_name":"web"},"145":{"name":"view-any HomeHero","guard_name":"api"},"146":{"name":"view HomeHero","guard_name":"web"},"147":{"name":"view HomeHero","guard_name":"api"},"148":{"name":"create HomeHero","guard_name":"web"},"149":{"name":"create HomeHero","guard_name":"api"},"150":{"name":"update HomeHero","guard_name":"web"},"151":{"name":"update HomeHero","guard_name":"api"},"152":{"name":"delete HomeHero","guard_name":"web"},"153":{"name":"delete HomeHero","guard_name":"api"},"154":{"name":"restore HomeHero","guard_name":"web"},"155":{"name":"restore HomeHero","guard_name":"api"},"156":{"name":"force-delete HomeHero","guard_name":"web"},"157":{"name":"force-delete HomeHero","guard_name":"api"},"158":{"name":"replicate HomeHero","guard_name":"web"},"159":{"name":"replicate HomeHero","guard_name":"api"},"160":{"name":"reorder HomeHero","guard_name":"web"},"161":{"name":"reorder HomeHero","guard_name":"api"},"162":{"name":"view-any HomeProduct","guard_name":"web"},"163":{"name":"view-any HomeProduct","guard_name":"api"},"164":{"name":"view HomeProduct","guard_name":"web"},"165":{"name":"view HomeProduct","guard_name":"api"},"166":{"name":"create HomeProduct","guard_name":"web"},"167":{"name":"create HomeProduct","guard_name":"api"},"168":{"name":"update HomeProduct","guard_name":"web"},"169":{"name":"update HomeProduct","guard_name":"api"},"170":{"name":"delete HomeProduct","guard_name":"web"},"171":{"name":"delete HomeProduct","guard_name":"api"},"172":{"name":"restore HomeProduct","guard_name":"web"},"173":{"name":"restore HomeProduct","guard_name":"api"},"174":{"name":"force-delete HomeProduct","guard_name":"web"},"175":{"name":"force-delete HomeProduct","guard_name":"api"},"176":{"name":"replicate HomeProduct","guard_name":"web"},"177":{"name":"replicate HomeProduct","guard_name":"api"},"178":{"name":"reorder HomeProduct","guard_name":"web"},"179":{"name":"reorder HomeProduct","guard_name":"api"},"180":{"name":"view-any HomeProject","guard_name":"web"},"181":{"name":"view-any HomeProject","guard_name":"api"},"182":{"name":"view HomeProject","guard_name":"web"},"183":{"name":"view HomeProject","guard_name":"api"},"184":{"name":"create HomeProject","guard_name":"web"},"185":{"name":"create HomeProject","guard_name":"api"},"186":{"name":"update HomeProject","guard_name":"web"},"187":{"name":"update HomeProject","guard_name":"api"},"188":{"name":"delete HomeProject","guard_name":"web"},"189":{"name":"delete HomeProject","guard_name":"api"},"190":{"name":"restore HomeProject","guard_name":"web"},"191":{"name":"restore HomeProject","guard_name":"api"},"192":{"name":"force-delete HomeProject","guard_name":"web"},"193":{"name":"force-delete HomeProject","guard_name":"api"},"194":{"name":"replicate HomeProject","guard_name":"web"},"195":{"name":"replicate HomeProject","guard_name":"api"},"196":{"name":"reorder HomeProject","guard_name":"web"},"197":{"name":"reorder HomeProject","guard_name":"api"},"198":{"name":"view-any HomeService","guard_name":"web"},"199":{"name":"view-any HomeService","guard_name":"api"},"200":{"name":"view HomeService","guard_name":"web"},"201":{"name":"view HomeService","guard_name":"api"},"202":{"name":"create HomeService","guard_name":"web"},"203":{"name":"create HomeService","guard_name":"api"},"204":{"name":"update HomeService","guard_name":"web"},"205":{"name":"update HomeService","guard_name":"api"},"206":{"name":"delete HomeService","guard_name":"web"},"207":{"name":"delete HomeService","guard_name":"api"},"208":{"name":"restore HomeService","guard_name":"web"},"209":{"name":"restore HomeService","guard_name":"api"},"210":{"name":"force-delete HomeService","guard_name":"web"},"211":{"name":"force-delete HomeService","guard_name":"api"},"212":{"name":"replicate HomeService","guard_name":"web"},"213":{"name":"replicate HomeService","guard_name":"api"},"214":{"name":"reorder HomeService","guard_name":"web"},"215":{"name":"reorder HomeService","guard_name":"api"},"216":{"name":"view-any HomeStat","guard_name":"web"},"217":{"name":"view-any HomeStat","guard_name":"api"},"218":{"name":"view HomeStat","guard_name":"web"},"219":{"name":"view HomeStat","guard_name":"api"},"220":{"name":"create HomeStat","guard_name":"web"},"221":{"name":"create HomeStat","guard_name":"api"},"222":{"name":"update HomeStat","guard_name":"web"},"223":{"name":"update HomeStat","guard_name":"api"},"224":{"name":"delete HomeStat","guard_name":"web"},"225":{"name":"delete HomeStat","guard_name":"api"},"226":{"name":"restore HomeStat","guard_name":"web"},"227":{"name":"restore HomeStat","guard_name":"api"},"228":{"name":"force-delete HomeStat","guard_name":"web"},"229":{"name":"force-delete HomeStat","guard_name":"api"},"230":{"name":"replicate HomeStat","guard_name":"web"},"231":{"name":"replicate HomeStat","guard_name":"api"},"232":{"name":"reorder HomeStat","guard_name":"web"},"233":{"name":"reorder HomeStat","guard_name":"api"},"234":{"name":"view-any HomeTeam","guard_name":"web"},"235":{"name":"view-any HomeTeam","guard_name":"api"},"236":{"name":"view HomeTeam","guard_name":"web"},"237":{"name":"view HomeTeam","guard_name":"api"},"238":{"name":"create HomeTeam","guard_name":"web"},"239":{"name":"create HomeTeam","guard_name":"api"},"240":{"name":"update HomeTeam","guard_name":"web"},"241":{"name":"update HomeTeam","guard_name":"api"},"242":{"name":"delete HomeTeam","guard_name":"web"},"243":{"name":"delete HomeTeam","guard_name":"api"},"244":{"name":"restore HomeTeam","guard_name":"web"},"245":{"name":"restore HomeTeam","guard_name":"api"},"246":{"name":"force-delete HomeTeam","guard_name":"web"},"247":{"name":"force-delete HomeTeam","guard_name":"api"},"248":{"name":"replicate HomeTeam","guard_name":"web"},"249":{"name":"replicate HomeTeam","guard_name":"api"},"250":{"name":"reorder HomeTeam","guard_name":"web"},"251":{"name":"reorder HomeTeam","guard_name":"api"},"252":{"name":"view-any HomeTestimoni","guard_name":"web"},"253":{"name":"view-any HomeTestimoni","guard_name":"api"},"254":{"name":"view HomeTestimoni","guard_name":"web"},"255":{"name":"view HomeTestimoni","guard_name":"api"},"256":{"name":"create HomeTestimoni","guard_name":"web"},"257":{"name":"create HomeTestimoni","guard_name":"api"},"258":{"name":"update HomeTestimoni","guard_name":"web"},"259":{"name":"update HomeTestimoni","guard_name":"api"},"260":{"name":"delete HomeTestimoni","guard_name":"web"},"261":{"name":"delete HomeTestimoni","guard_name":"api"},"262":{"name":"restore HomeTestimoni","guard_name":"web"},"263":{"name":"restore HomeTestimoni","guard_name":"api"},"264":{"name":"force-delete HomeTestimoni","guard_name":"web"},"265":{"name":"force-delete HomeTestimoni","guard_name":"api"},"266":{"name":"replicate HomeTestimoni","guard_name":"web"},"267":{"name":"replicate HomeTestimoni","guard_name":"api"},"268":{"name":"reorder HomeTestimoni","guard_name":"web"},"269":{"name":"reorder HomeTestimoni","guard_name":"api"},"270":{"name":"view-any HomeTide","guard_name":"web"},"271":{"name":"view-any HomeTide","guard_name":"api"},"272":{"name":"view HomeTide","guard_name":"web"},"273":{"name":"view HomeTide","guard_name":"api"},"274":{"name":"create HomeTide","guard_name":"web"},"275":{"name":"create HomeTide","guard_name":"api"},"276":{"name":"update HomeTide","guard_name":"web"},"277":{"name":"update HomeTide","guard_name":"api"},"278":{"name":"delete HomeTide","guard_name":"web"},"279":{"name":"delete HomeTide","guard_name":"api"},"280":{"name":"restore HomeTide","guard_name":"web"},"281":{"name":"restore HomeTide","guard_name":"api"},"282":{"name":"force-delete HomeTide","guard_name":"web"},"283":{"name":"force-delete HomeTide","guard_name":"api"},"284":{"name":"replicate HomeTide","guard_name":"web"},"285":{"name":"replicate HomeTide","guard_name":"api"},"286":{"name":"reorder HomeTide","guard_name":"web"},"287":{"name":"reorder HomeTide","guard_name":"api"},"288":{"name":"view-any User","guard_name":"web"},"289":{"name":"view-any User","guard_name":"api"},"290":{"name":"view User","guard_name":"web"},"291":{"name":"view User","guard_name":"api"},"292":{"name":"create User","guard_name":"web"},"293":{"name":"create User","guard_name":"api"},"294":{"name":"update User","guard_name":"web"},"295":{"name":"update User","guard_name":"api"},"296":{"name":"delete User","guard_name":"web"},"297":{"name":"delete User","guard_name":"api"},"298":{"name":"restore User","guard_name":"web"},"299":{"name":"restore User","guard_name":"api"},"300":{"name":"force-delete User","guard_name":"web"},"301":{"name":"force-delete User","guard_name":"api"},"302":{"name":"replicate User","guard_name":"web"},"303":{"name":"replicate User","guard_name":"api"},"304":{"name":"reorder User","guard_name":"web"},"305":{"name":"reorder User","guard_name":"api"}}';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            /** @var Model $roleModel */
            $roleModel = Utils::getRoleModel();
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = $roleModel::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {
                    $permissionModels = collect($rolePlusPermission['permissions'])
                        ->map(fn ($permission) => $permissionModel::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissionModels);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}