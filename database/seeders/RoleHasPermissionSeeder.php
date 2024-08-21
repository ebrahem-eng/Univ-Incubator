<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //============================================= Give The Permission To Supper Admin ===================================

        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (1, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (2, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (3, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (4, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (5, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (6, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (7, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (8, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (9, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (10, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (11, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (12, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (13, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (14, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (15, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (16, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (17, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (18, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (19, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (20, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (21, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (22, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (23, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (24, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (25, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (26, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (27, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (28, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (29, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (30, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (31, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (32, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (33, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (34, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (35, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (36, 1);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (37, 1);");


        //========================= Give The Permission To Assistant Local Admin =============================


        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (38, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (39, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (40, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (41, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (42, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (43, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (44, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (45, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (46, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (47, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (48, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (49, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (50, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (51, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (52, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (53, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (54, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (55, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (56, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (57, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (58, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (59, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (60, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (61, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (62, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (63, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (64, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (65, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (66, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (67, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (68, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (69, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (70, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (71, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (72, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (73, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (74, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (75, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (76, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (77, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (78, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (79, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (80, 4);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (81, 4);");

        //========================= Give The Permission To Local Admin =============================

        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (82, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (83, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (84, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (85, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (86, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (87, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (88, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (89, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (90, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (91, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (92, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (93, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (94, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (95, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (96, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (97, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (98, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (99, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (100, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (101, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (102, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (103, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (104, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (105, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (106, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (107, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (108, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (109, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (110, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (111, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (112, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (113, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (114, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (115, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (116, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (117, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (118, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (119, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (120, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (121, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (122, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (123, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (124, 3);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (125, 3);");

        //========================= Give The Permission To UserS =============================

        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (126, 5);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (127, 5);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (128, 5);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (129, 5);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (130, 5);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (131, 5);");
        DB::insert("INSERT INTO role_has_permissions (permission_id, role_id) VALUES (132, 5);");
    }
}
