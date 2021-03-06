<?php 
 $GLOBALS["dictionary"]["AOS_Line_Item_Groups"]=array (
  'table' => 'aos_line_item_groups',
  'audited' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'required' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'aos_line_item_groups_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'aos_line_item_groups_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'aos_line_item_groups_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
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
      'group' => 'total_amt',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
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
      'group' => 'discount_amount',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
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
      'group' => 'subtotal_amount',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
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
      'group' => 'tax_amount',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'subtotal_tax_amount' => 
    array (
      'required' => false,
      'name' => 'subtotal_tax_amount',
      'vname' => 'LBL_SUBTOTAL_TAX_AMOUNT',
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
    'subtotal_tax_amount_usdollar' => 
    array (
      'name' => 'subtotal_tax_amount_usdollar',
      'vname' => 'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR',
      'type' => 'currency',
      'group' => 'subtotal_tax_amount',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'total_amount' => 
    array (
      'required' => false,
      'name' => 'total_amount',
      'vname' => 'LBL_GROUP_TOTAL',
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
      'vname' => 'LBL_GROUP_TOTAL_USDOLLAR',
      'type' => 'currency',
      'group' => 'amount',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'parent_name' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'parent_name',
      'vname' => 'LBL_FLEX_RELATE',
      'type' => 'parent',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => 0,
      'len' => 25,
      'options' => 'product_quote_parent_type_dom',
      'studio' => 'visible',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'parent_type' => 'record_type_display',
    ),
    'parent_type' => 
    array (
      'required' => false,
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_TYPE',
      'type' => 'parent_type',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'options' => 'parent_line_items',
      'len' => 100,
      'dbType' => 'varchar',
      'studio' => 'hidden',
    ),
    'parent_id' => 
    array (
      'required' => false,
      'name' => 'parent_id',
      'vname' => 'LBL_PARENT_ID',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'len' => 36,
    ),
    'number' => 
    array (
      'required' => false,
      'name' => 'number',
      'vname' => 'LBL_LIST_NUM',
      'type' => 'int',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => true,
      'len' => '11',
      'disable_num_format' => '',
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
        'onListView' => true,
      ),
    ),
    'aos_products_quotes' => 
    array (
      'name' => 'aos_products_quotes',
      'vname' => 'AOS_PRODUCT_QUOTES',
      'type' => 'link',
      'relationship' => 'groups_aos_product_quotes',
      'module' => 'AOS_Products_Quotes',
      'bean_name' => 'AOS_Products_Quotes',
      'source' => 'non-db',
    ),
  ),
  'relationships' => 
  array (
    'aos_line_item_groups_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Line_Item_Groups',
      'rhs_table' => 'aos_line_item_groups',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'aos_line_item_groups_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Line_Item_Groups',
      'rhs_table' => 'aos_line_item_groups',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'aos_line_item_groups_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Line_Item_Groups',
      'rhs_table' => 'aos_line_item_groups',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'groups_aos_product_quotes' => 
    array (
      'lhs_module' => 'AOS_Line_Item_Groups',
      'lhs_table' => 'aos_line_item_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products_Quotes',
      'rhs_table' => 'aos_products_quotes',
      'rhs_key' => 'group_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => false,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'aos_line_item_groupspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
);