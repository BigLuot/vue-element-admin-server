<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    
    /**
     * Auto generated seed file
     * @return void
     */
    public function run()
    {
        
        
        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert([
            0 => [
                'id'          => 182,
                'name'        => 'permission',
                'path'        => '/permission',
                'method'      => 'GET',
                'description' => '权限测试页',
                'per_type'    => 2,
                'created_at'  => '2018-08-31 12:34:42',
                'updated_at'  => '2018-08-31 12:34:42',
                'parent_id'   => 0,
                
                1  => [
                    'id'          => 183,
                    'name'        => 'PagePermission',
                    'path'        => 'page',
                    'method'      => 'GET',
                    'description' => '页面权限',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 182,
                ],
                2  => [
                    'id'          => 184,
                    'name'        => 'DirectivePermission',
                    'path'        => 'directive',
                    'method'      => 'GET',
                    'description' => '指令权限',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 182,
                ],
                3  => [
                    'id'          => 185,
                    'name'        => 'icons',
                    'path'        => '/icon',
                    'method'      => 'GET',
                    'description' => '图标',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                4  => [
                    'id'          => 186,
                    'name'        => 'I18n',
                    'path'        => 'index',
                    'method'      => 'GET',
                    'description' => '国际化',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 13:51:41',
                    'parent_id'   => 238,
                ],
                5  => [
                    'id'          => 187,
                    'name'        => 'ComponentDemo',
                    'path'        => '/components',
                    'method'      => 'GET',
                    'description' => '组件',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                6  => [
                    'id'          => 188,
                    'name'        => 'TinymceDemo',
                    'path'        => 'tinymce',
                    'method'      => 'GET',
                    'description' => '富文本编辑器',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                7  => [
                    'id'          => 189,
                    'name'        => 'MarkdownDemo',
                    'path'        => 'markdown',
                    'method'      => 'GET',
                    'description' => 'Markdown',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                8  => [
                    'id'          => 190,
                    'name'        => 'JsonEditorDemo',
                    'path'        => 'json-editor',
                    'method'      => 'GET',
                    'description' => 'JSON编辑器',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                9  => [
                    'id'          => 191,
                    'name'        => 'SplitpaneDemo',
                    'path'        => 'splitpane',
                    'method'      => 'GET',
                    'description' => 'Splitpane',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                10 => [
                    'id'          => 192,
                    'name'        => 'AvatarUploadDemo',
                    'path'        => 'avatar-upload',
                    'method'      => 'GET',
                    'description' => '头像上传',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                11 => [
                    'id'          => 193,
                    'name'        => 'DropzoneDemo',
                    'path'        => 'dropzone',
                    'method'      => 'GET',
                    'description' => 'Dropzone',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                12 => [
                    'id'          => 194,
                    'name'        => 'StickyDemo',
                    'path'        => 'sticky',
                    'method'      => 'GET',
                    'description' => 'Sticky',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                13 => [
                    'id'          => 195,
                    'name'        => 'CountToDemo',
                    'path'        => 'count-to',
                    'method'      => 'GET',
                    'description' => 'CountTo',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                14 => [
                    'id'          => 196,
                    'name'        => 'ComponentMixinDemo',
                    'path'        => 'mixin',
                    'method'      => 'GET',
                    'description' => '小组件',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                15 => [
                    'id'          => 197,
                    'name'        => 'BackToTopDemo',
                    'path'        => 'back-to-top',
                    'method'      => 'GET',
                    'description' => '返回顶部',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                16 => [
                    'id'          => 198,
                    'name'        => 'DragDialogDemo',
                    'path'        => 'drag-dialog',
                    'method'      => 'GET',
                    'description' => '拖拽 Dialog',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                17 => [
                    'id'          => 199,
                    'name'        => 'DndListDemo',
                    'path'        => 'dnd-list',
                    'method'      => 'GET',
                    'description' => '列表拖拽',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                18 => [
                    'id'          => 200,
                    'name'        => 'DragKanbanDemo',
                    'path'        => 'drag-kanban',
                    'method'      => 'GET',
                    'description' => '可拖拽看板',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 187,
                ],
                19 => [
                    'id'          => 201,
                    'name'        => 'Charts',
                    'path'        => '/charts',
                    'method'      => 'GET',
                    'description' => '图表',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                20 => [
                    'id'          => 202,
                    'name'        => 'KeyboardChart',
                    'path'        => 'keyboard',
                    'method'      => 'GET',
                    'description' => '键盘图表',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 201,
                ],
                21 => [
                    'id'          => 203,
                    'name'        => 'LineChart',
                    'path'        => 'line',
                    'method'      => 'GET',
                    'description' => '折线图',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 201,
                ],
                22 => [
                    'id'          => 204,
                    'name'        => 'MixChart',
                    'path'        => 'mixchart',
                    'method'      => 'GET',
                    'description' => '混合图表',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 201,
                ],
                23 => [
                    'id'          => 205,
                    'name'        => 'Nested',
                    'path'        => '/nested',
                    'method'      => 'GET',
                    'description' => '路由嵌套',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                24 => [
                    'id'          => 206,
                    'name'        => 'Menu1',
                    'path'        => 'menu1',
                    'method'      => 'GET',
                    'description' => '菜单1',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 205,
                ],
                25 => [
                    'id'          => 207,
                    'name'        => 'Menu1-1',
                    'path'        => 'menu1-1',
                    'method'      => 'GET',
                    'description' => '菜单1-1',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 206,
                ],
                26 => [
                    'id'          => 208,
                    'name'        => 'Menu1-2',
                    'path'        => 'menu1-2',
                    'method'      => 'GET',
                    'description' => '菜单1-2',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 206,
                ],
                27 => [
                    'id'          => 209,
                    'name'        => 'Menu1-2-1',
                    'path'        => 'menu1-2-1',
                    'method'      => 'GET',
                    'description' => '菜单1-2-1',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 208,
                ],
                28 => [
                    'id'          => 210,
                    'name'        => 'Menu1-2-2',
                    'path'        => 'menu1-2-2',
                    'method'      => 'GET',
                    'description' => '菜单1-2-2',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 208,
                ],
                29 => [
                    'id'          => 211,
                    'name'        => 'Menu1-3',
                    'path'        => 'menu1-3',
                    'method'      => 'GET',
                    'description' => '菜单1-3',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 206,
                ],
                30 => [
                    'id'          => 212,
                    'name'        => 'Menu2',
                    'path'        => 'menu2',
                    'method'      => 'GET',
                    'description' => '菜单2',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 205,
                ],
                31 => [
                    'id'          => 213,
                    'name'        => 'Table',
                    'path'        => '/table',
                    'method'      => 'GET',
                    'description' => 'Table',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                32 => [
                    'id'          => 214,
                    'name'        => 'DynamicTable',
                    'path'        => 'dynamic-table',
                    'method'      => 'GET',
                    'description' => '动态Table',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 213,
                ],
                33 => [
                    'id'          => 215,
                    'name'        => 'DragTable',
                    'path'        => 'drag-table',
                    'method'      => 'GET',
                    'description' => '拖拽Table',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 213,
                ],
                34 => [
                    'id'          => 216,
                    'name'        => 'InlineEditTable',
                    'path'        => 'inline-edit-table',
                    'method'      => 'GET',
                    'description' => 'Table内编辑',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 213,
                ],
                35 => [
                    'id'          => 217,
                    'name'        => 'TreeTableDemo',
                    'path'        => 'tree-table',
                    'method'      => 'GET',
                    'description' => '树形表格',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 213,
                ],
                36 => [
                    'id'          => 218,
                    'name'        => 'CustomTreeTableDemo',
                    'path'        => 'custom-tree-table',
                    'method'      => 'GET',
                    'description' => '自定义树表',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 213,
                ],
                37 => [
                    'id'          => 219,
                    'name'        => 'ComplexTable',
                    'path'        => 'complex-table',
                    'method'      => 'GET',
                    'description' => '综合Table',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 213,
                ],
                38 => [
                    'id'          => 220,
                    'name'        => 'Example',
                    'path'        => '/example',
                    'method'      => 'GET',
                    'description' => '综合实例',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                39 => [
                    'id'          => 221,
                    'name'        => 'CreateArticle',
                    'path'        => 'create',
                    'method'      => 'GET',
                    'description' => '创建文章',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 220,
                ],
                40 => [
                    'id'          => 222,
                    'name'        => 'EditArticle',
                    'path'        => 'edit/:id(\\d+)',
                    'method'      => 'GET',
                    'description' => '编辑文章',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 220,
                ],
                41 => [
                    'id'          => 223,
                    'name'        => 'ArticleList',
                    'path'        => 'list',
                    'method'      => 'GET',
                    'description' => '文章列表',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 220,
                ],
                42 => [
                    'id'          => 224,
                    'name'        => 'tab',
                    'path'        => '/tab',
                    'method'      => 'GET',
                    'description' => 'Tab',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                43 => [
                    'id'          => 225,
                    'name'        => 'ErrorPages',
                    'path'        => '/error',
                    'method'      => 'GET',
                    'description' => '错误页面',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                44 => [
                    'id'          => 226,
                    'name'        => 'Page401',
                    'path'        => '401',
                    'method'      => 'GET',
                    'description' => '401',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 225,
                ],
                45 => [
                    'id'          => 227,
                    'name'        => 'Page404',
                    'path'        => '404',
                    'method'      => 'GET',
                    'description' => '404',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 225,
                ],
                46 => [
                    'id'          => 228,
                    'name'        => 'errorLog',
                    'path'        => '/error-log',
                    'method'      => 'GET',
                    'description' => '错误日志',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                47 => [
                    'id'          => 229,
                    'name'        => 'ErrorLog',
                    'path'        => 'log',
                    'method'      => 'GET',
                    'description' => '错误日志',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 228,
                ],
                48 => [
                    'id'          => 230,
                    'name'        => 'Excel',
                    'path'        => '/excel',
                    'method'      => 'GET',
                    'description' => 'Excel',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                49 => [
                    'id'          => 231,
                    'name'        => 'ExportExcel',
                    'path'        => 'export-excel',
                    'method'      => 'GET',
                    'description' => 'Export Excel',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 230,
                ],
                50 => [
                    'id'          => 232,
                    'name'        => 'EelectExcel',
                    'path'        => 'export-selected-excel',
                    'method'      => 'GET',
                    'description' => 'Export Selected',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 230,
                ],
                51 => [
                    'id'          => 233,
                    'name'        => 'UploadExcel',
                    'path'        => 'upload-excel',
                    'method'      => 'GET',
                    'description' => 'Upload Excel',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 230,
                ],
                52 => [
                    'id'          => 234,
                    'name'        => 'zip',
                    'path'        => '/zip',
                    'method'      => 'GET',
                    'description' => 'Zip',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                53 => [
                    'id'          => 235,
                    'name'        => 'ExportZip',
                    'path'        => 'download',
                    'method'      => 'GET',
                    'description' => 'Export Zip',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 234,
                ],
                54 => [
                    'id'          => 236,
                    'name'        => 'theme',
                    'path'        => '/theme',
                    'method'      => 'GET',
                    'description' => '换肤',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                55 => [
                    'id'          => 237,
                    'name'        => 'clipboardDemo',
                    'path'        => '/clipboard',
                    'method'      => 'GET',
                    'description' => 'Clipboard',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                56 => [
                    'id'          => 238,
                    'name'        => 'I18n',
                    'path'        => '/i18n',
                    'method'      => 'GET',
                    'description' => '国际化',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                57 => [
                    'id'          => 239,
                    'name'        => 'Permission',
                    'path'        => '/permission2',
                    'method'      => 'GET',
                    'description' => '综合实例',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 0,
                ],
                58 => [
                    'id'          => 240,
                    'name'        => 'PermissionList',
                    'path'        => '/permission2/list',
                    'method'      => 'GET',
                    'description' => '权限列表',
                    'per_type'    => 2,
                    'created_at'  => '2018-08-31 12:34:42',
                    'updated_at'  => '2018-08-31 12:34:42',
                    'parent_id'   => 239,
                ],
            ]
        ]);
        
        
    }
}