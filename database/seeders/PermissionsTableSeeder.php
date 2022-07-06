<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 39,
                'title' => 'currency_create',
            ],
            [
                'id'    => 40,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 41,
                'title' => 'currency_show',
            ],
            [
                'id'    => 42,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 43,
                'title' => 'currency_access',
            ],
            [
                'id'    => 44,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 45,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 46,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 47,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 48,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 49,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 50,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 51,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 52,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 53,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 54,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 55,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 56,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 57,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 58,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 59,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 60,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 61,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 62,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 63,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 64,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 65,
                'title' => 'client_create',
            ],
            [
                'id'    => 66,
                'title' => 'client_edit',
            ],
            [
                'id'    => 67,
                'title' => 'client_show',
            ],
            [
                'id'    => 68,
                'title' => 'client_delete',
            ],
            [
                'id'    => 69,
                'title' => 'client_access',
            ],
            [
                'id'    => 70,
                'title' => 'project_create',
            ],
            [
                'id'    => 71,
                'title' => 'project_edit',
            ],
            [
                'id'    => 72,
                'title' => 'project_show',
            ],
            [
                'id'    => 73,
                'title' => 'project_delete',
            ],
            [
                'id'    => 74,
                'title' => 'project_access',
            ],
            [
                'id'    => 75,
                'title' => 'note_create',
            ],
            [
                'id'    => 76,
                'title' => 'note_edit',
            ],
            [
                'id'    => 77,
                'title' => 'note_show',
            ],
            [
                'id'    => 78,
                'title' => 'note_delete',
            ],
            [
                'id'    => 79,
                'title' => 'note_access',
            ],
            [
                'id'    => 80,
                'title' => 'document_create',
            ],
            [
                'id'    => 81,
                'title' => 'document_edit',
            ],
            [
                'id'    => 82,
                'title' => 'document_show',
            ],
            [
                'id'    => 83,
                'title' => 'document_delete',
            ],
            [
                'id'    => 84,
                'title' => 'document_access',
            ],
            [
                'id'    => 85,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 86,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 87,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 88,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 89,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 90,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 91,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 92,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 93,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 94,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 95,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 96,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 97,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 98,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 99,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 100,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 101,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 102,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 103,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 104,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 105,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 106,
                'title' => 'expense_create',
            ],
            [
                'id'    => 107,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 108,
                'title' => 'expense_show',
            ],
            [
                'id'    => 109,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 110,
                'title' => 'expense_access',
            ],
            [
                'id'    => 111,
                'title' => 'income_create',
            ],
            [
                'id'    => 112,
                'title' => 'income_edit',
            ],
            [
                'id'    => 113,
                'title' => 'income_show',
            ],
            [
                'id'    => 114,
                'title' => 'income_delete',
            ],
            [
                'id'    => 115,
                'title' => 'income_access',
            ],
            [
                'id'    => 116,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 117,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 118,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 119,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 120,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 121,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 122,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 123,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 124,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 125,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 126,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 127,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 128,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 129,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 130,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 131,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 132,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 133,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 134,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 135,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 136,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 137,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 138,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 139,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 140,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 141,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 142,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 143,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 144,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 145,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 146,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 147,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 148,
                'title' => 'product_create',
            ],
            [
                'id'    => 149,
                'title' => 'product_edit',
            ],
            [
                'id'    => 150,
                'title' => 'product_show',
            ],
            [
                'id'    => 151,
                'title' => 'product_delete',
            ],
            [
                'id'    => 152,
                'title' => 'product_access',
            ],
            [
                'id'    => 153,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
