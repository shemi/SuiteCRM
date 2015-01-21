<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */
global $locale;

    if((int)$locale->getPrecedentPreference('sugar_version') > 5)
    {
    	$type = 'datetimecombo';
    }
    else
    {
    	$type = 'datetime';
    }

$dictionary['AOS_Contracts'] = array(
	'table'=>'aos_contracts',
	'audited'=>true,
	'fields'=>array (
  'reference_code' => 
  array (
    'required' => false,
    'name' => 'reference_code',
    'vname' => 'LBL_REFERENCE_CODE ',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'start_date' => 
  array (
    'required' => false,
    'name' => 'start_date',
    'vname' => 'LBL_START_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'display_default' => 'now',
  ),
  'end_date' => 
  array (
    'required' => false,
    'name' => 'end_date',
    'vname' => 'LBL_END_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'display_default' => '+1 year',
  ),
  'total_contract_value' => 
  array (
    'required' => false,
    'name' => 'total_contract_value',
    'vname' => 'LBL_TOTAL_CONTRACT_VALUE',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '26,6',
    'size' => '10',
    'enable_range_search' => true,
    'options' => 'numeric_range_search_dom',
  ),
        'total_contract_value_usdollar' =>
            array (
                'name' => 'total_contract_value_usdollar',
                'vname' => 'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR',
                'type' => 'currency',
                'group'=>'amount',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
  'currency_id' => 
  array (
    'required' => false,
    'name' => 'currency_id',
    'vname' => 'LBL_CURRENCY',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'len' => 36,
    'size' => '20',
    'studio' => 'visible',
    'function' => 
    array (
      'name' => 'getCurrencyDropDown',
      'returns' => 'html',
    ),
  ),
  'status' => 
  array (
    'required' => true,
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Not Started',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'contract_status_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'customer_signed_date' => 
  array (
    'required' => false,
    'name' => 'customer_signed_date',
    'vname' => 'LBL_CUSTOMER_SIGNED_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
    'enable_range_search' => false,
  ),
  'company_signed_date' => 
  array (
    'required' => false,
    'name' => 'company_signed_date',
    'vname' => 'LBL_COMPANY_SIGNED_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
    'enable_range_search' => false,
  ),
  'renewal_reminder_date' => 
  array (
    'required' => false,
    'name' => 'renewal_reminder_date',
    'vname' => 'LBL_RENEWAL_REMINDER_DATE',
    'dbType' => 'datetime',
    'type' => $type,
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
  ),
  'contract_type' => 
  array (
    'required' => false,
    'name' => 'contract_type',
    'vname' => 'LBL_CONTRACT_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Type',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'contract_type_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'contract_account_id' => 
  array (
    'required' => false,
    'name' => 'contract_account_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'contract_account' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'contract_account',
    'vname' => 'LBL_CONTRACT_ACCOUNT',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => true,
    'relationship' => 'account_aos_contracts',
    'len' => '255',
    'id_name' => 'contract_account_id',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
    'opportunity_id' => 
  array (
    'required' => false,
    'name' => 'opportunity_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'opportunity' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'opportunity',
    'vname' => 'LBL_OPPORTUNITY',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => true,
    'len' => '255',
    'id_name' => 'opportunity_id',
    'ext2' => 'Opportunities',
    'module' => 'Opportunities',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'contact_id' => 
  array (
    'required' => false,
    'name' => 'contact_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'contact' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'contact',
    'vname' => 'LBL_CONTACT',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => true,
    'len' => '255',
    'id_name' => 'contact_id',
    'ext2' => 'Contacts',
    'module' => 'Contacts',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'call_id' => 
  array (
    'required' => false,
    'name' => 'call_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => true,
    'required' => true,
    'importable' => 'required',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  
  'tasks' =>
  array (
    'name' => 'tasks',
    'type' => 'link',
    'relationship' => 'aos_contracts_tasks',
    'module'=>'Tasks',
    'bean_name'=>'Task',
    'source'=>'non-db',
  ),
  'notes' =>
  array (
    'name' => 'notes',
    'type' => 'link',
    'relationship' => 'aos_contracts_notes',
    'module'=>'Notes',
    'bean_name'=>'Note',
    'source'=>'non-db',
  ),
  'meetings' =>
  array (
    'name' => 'meetings',
    'type' => 'link',
    'relationship' => 'aos_contracts_meetings',
    'module'=>'Meetings',
    'bean_name'=>'Meeting',
    'source'=>'non-db',
  ),
  'calls' =>
  array (
    'name' => 'calls',
    'type' => 'link',
    'relationship' => 'aos_contracts_calls',
    'module'=>'Calls',
    'bean_name'=>'Call',
    'source'=>'non-db',
  ),

  'emails' =>
  array (
    'name' => 'emails',
    'type' => 'link',
    'relationship' => 'emails_aos_contracts_rel', /* reldef in emails */
    'module'=>'Emails',
    'bean_name'=>'Email',
    'source'=>'non-db',
    'studio' => array("formula" => false),
  ),
  'aos_quotes_aos_contracts' =>
  array (
  	'name' => 'aos_quotes_aos_contracts',
  	'type' => 'link',
  	'relationship' => 'aos_quotes_aos_contracts',
  	'source' => 'non-db',
	'module'=>'AOS_Quotes',
 ),
    "documents" =>
    array (
    'name' => 'documents',
    'type' => 'link',
    'relationship' => 'aos_contracts_documents',
    'source' => 'non-db',
    'module' => 'Documents',
    ),
    'line_items' =>
        array (
            'required' => false,
            'name' => 'line_items',
            'vname' => 'LBL_LINE_ITEMS',
            'type' => 'function',
            'source' => 'non-db',
            'massupdate' => 0,
            'importable' => 'false',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'reportable' => false,
            'function' =>
            array (
                'name' => 'display_lines',
                'returns' => 'html',
                'include' => 'modules/AOS_Products_Quotes/Line_Items.php'
            ),
        ),
        'total_amt' =>
        array (
            'required' => false,
            'name' => 'total_amt',
            'vname' => 'LBL_TOTAL_AMT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
        ),
        'total_amt_usdollar' =>
            array (
                'name' => 'total_amt_usdollar',
                'vname' => 'LBL_TOTAL_AMT_USDOLLAR',
                'type' => 'currency',
                'group'=>'total_amt',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
        'subtotal_amount' =>
        array (
            'required' => false,
            'name' => 'subtotal_amount',
            'vname' => 'LBL_SUBTOTAL_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
        ),
        'subtotal_amount_usdollar' =>
            array (
                'name' => 'subtotal_amount_usdollar',
                'vname' => 'LBL_SUBTOTAL_AMOUNT_USDOLLAR',
                'type' => 'currency',
                'group'=>'subtotal_amount',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
        'discount_amount' =>
        array (
            'required' => false,
            'name' => 'discount_amount',
            'vname' => 'LBL_DISCOUNT_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
        ),
        'discount_amount_usdollar' =>
            array (
                'name' => 'discount_amount_usdollar',
                'vname' => 'LBL_DISCOUNT_AMOUNT_USDOLLAR',
                'type' => 'currency',
                'group'=>'discount_amount',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
        'tax_amount' =>
        array (
            'required' => false,
            'name' => 'tax_amount',
            'vname' => 'LBL_TAX_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 1,
            'reportable' => true,
            'len' => '26,6',
        ),
        'tax_amount_usdollar' =>
            array (
                'name' => 'tax_amount_usdollar',
                'vname' => 'LBL_TAX_AMOUNT_USDOLLAR',
                'type' => 'currency',
                'group'=>'tax_amount',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
        'shipping_amount' =>
        array (
            'required' => false,
            'name' => 'shipping_amount',
            'vname' => 'LBL_SHIPPING_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 0,
            'reportable' => true,
            'len' => '26,6',
        ),
        'shipping_amount_usdollar' =>
            array (
                'name' => 'shipping_amount_usdollar',
                'vname' => 'LBL_SHIPPING_AMOUNT_USDOLLAR',
                'type' => 'currency',
                'group'=>'shipping_amount',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
        'shipping_tax' =>
        array (
            'required' => false,
            'name' => 'shipping_tax',
            'vname' => 'LBL_SHIPPING_TAX',
            'type' => 'enum',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 0,
            'reportable' => true,
            'len' => 100,
            'options' => 'vat_list',
            'studio' => 'visible',
        ),
        'shipping_tax_amt' =>
        array (
            'required' => false,
            'name' => 'shipping_tax_amt',
            'vname' => 'LBL_SHIPPING_TAX_AMT',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => 0,
            'reportable' => true,
            'len' => '26,6',
            'size' => '10',
            'enable_range_search' => false,
            'function' =>
            array (
                'name' => 'display_shipping_vat',
                'returns' => 'html',
                'include' => 'modules/AOS_Products_Quotes/Line_Items.php'
            ),
        ),
        'shipping_tax_amt_usdollar' =>
            array (
                'name' => 'shipping_tax_amt_usdollar',
                'vname' => 'LBL_SHIPPING_TAX_AMT_USDOLLAR',
                'type' => 'currency',
                'group'=>'shipping_tax_amt',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
        'total_amount' =>
        array (
            'required' => false,
            'name' => 'total_amount',
            'vname' => 'LBL_GRAND_TOTAL',
            'type' => 'currency',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'len' => '26,6',
            'enable_range_search' => true,
            'options' => 'numeric_range_search_dom',
        ),
        'total_amount_usdollar' =>
            array (
                'name' => 'total_amount_usdollar',
                'vname' => 'LBL_GRAND_TOTAL_USDOLLAR',
                'type' => 'currency',
                'group'=>'total_amount',
                'disable_num_format' => true,
                'duplicate_merge'=>'0',
                'audited'=>true,
                'comment' => '',
                'studio' => array(
                    'editview'=>false,
                    'detailview'=>false,
                    'quickcreate'=>false,
                ),
                'len' => '26,6',
            ),
        'currency_id' =>
        array (
            'required' => false,
            'name' => 'currency_id',
            'vname' => 'LBL_CURRENCY',
            'type' => 'id',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'reportable' => false,
            'len' => 36,
            'size' => '20',
            'studio' => 'visible',
            'function' =>
            array (
                'name' => 'getCurrencyDropDown',
                'returns' => 'html',
            ),
        ),
    "aos_products_quotes" =>
    array (
        'name' => 'aos_products_quotes',
        'type' => 'link',
        'relationship' => 'aos_contracts_aos_products_quotes',
        'module' => 'AOS_Products_Quotes',
        'bean_name' => 'AOS_Products_Quotes',
        'source' => 'non-db',
    ),
),
'relationships'=>array (
    'aos_contracts_aos_products_quotes' =>
    array (
        'lhs_module'=> 'AOS_Contracts',
        'lhs_table'=> 'aos_contracts',
        'lhs_key' => 'id',
        'rhs_module'=> 'AOS_Products_Quotes',
        'rhs_table'=> 'aos_products_quotes',
        'rhs_key' => 'parent_id',
        'relationship_type'=>'one-to-many',
    ),
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('AOS_Contracts','AOS_Contracts', array('basic','assignable'));
