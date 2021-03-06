<?php

use Illuminate\Database\Seeder;
use App\Permission;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        //Utilisateurs
        Permission::create([
            'permission' => 'view_all_users',
            'label' => 'Liste des utilisateurs',
            'type' => 'Utilisateur'
        ]);
        Permission::create([
            'permission' => 'create_users',
            'label' => 'Ajouter des utilisateurs',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'edit_users',
            'label' => 'Modifier des utilisateurs',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'show_users',
            'label' => 'Afficher un utilisateur',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'disable_users',
            'label' => 'Actvier/Désactiver un utilisateur',
            'type' => 'Utilisateur'
        ]);
        Permission::create([
            'permission' => 'delete_user',
            'label' => 'Supprimer l\'utilisateur',
            'type' => 'Utilisateur'
        ]);

        //Role
        Permission::create([
            'permission' => 'view_all_role',
            'label' => 'Liste des role',
            'type' => 'Role'
        ]);
        Permission::create([
            'permission' => 'create_role',
            'label' => 'Ajouter un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'show_role',
            'label' => 'Afficher les utilisateurs d\'un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'edit_role',
            'label' => 'Modifier un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'delete_role',
            'label' => 'Supprimer un role',
            'type' => 'Role'
        ]);
    }
}
